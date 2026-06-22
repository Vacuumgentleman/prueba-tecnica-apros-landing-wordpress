# Parte 1 — WordPress: Landing "Servicios APROS"

## Requisitos

- WordPress 6.x instalado (probado con Local by WP Engine)
- PHP 8.x
- Navegador moderno (Chrome, Firefox, Edge, Safari)

## Instalación del tema

1. Copia la carpeta `apros-theme/` dentro de `wp-content/themes/` de tu instalación de WordPress.
2. En el panel de administración ve a **Apariencia → Temas** y activa **APROS Theme**.
3. Alternativa con WP-CLI: `wp theme activate apros-theme`

## Crear la página "Servicios APROS"

### Desde el admin
1. Ve a **Páginas → Añadir nueva**.
2. Escribe el título exacto: `Servicios APROS`.
3. Verifica que el slug sea `servicios-apros` (WordPress lo genera automáticamente).
4. Publica la página.

### Con WP-CLI
```bash
wp post create --post_type=page --post_title='Servicios APROS' --post_status=publish
```

Una vez publicada, visita `/servicios-apros/` y verás la landing completa.

## Decisiones de arquitectura

| Decisión | Razonamiento |
|---|---|
| Tema clásico (no block theme) | Control total sobre el markup sin dependencias de Gutenberg. |
| `page-servicios-apros.php` | WordPress la asigna automáticamente por slug, sin necesidad de "Template Name" seleccionable. |
| Render de tarjetas en JS | Separa los datos (array) de la presentación, facilita filtros y orden sin round-trips al servidor. |
| Estado centralizado `{ soloActivos, ordenarPorPrecio }` | Un único objeto de estado y una función `render()` que siempre parte del array original evita bugs de toggles que se pisan entre sí. |
| Assets encolados solo en `servicios-apros` | `is_page('servicios-apros')` garantiza que CSS y JS no se cargan en otras páginas del sitio. |
| Cache-busting con `filemtime()` | Invalida la caché del navegador en cada cambio de archivo sin necesidad de un build step. |
| CSS plano, mobile-first | Sin dependencias de preprocesadores; CSS Grid con media queries cubre el layout responsive. |
| `Intl.NumberFormat` con prefijo `S/` | Formato de moneda local (sol peruano), trivial de cambiar a otra moneda editando una línea. |

## Mejoras futuras

- Cargar los servicios desde un Custom Post Type de WordPress (en lugar del array hardcodeado) para que el cliente pueda gestionarlos desde el admin.
- Añadir paginación o carga infinita cuando el catálogo crezca.
- Incorporar un formulario de cotización conectado a un plugin de formularios (Contact Form 7, Gravity Forms) o una API propia.
- Agregar animaciones de entrada a las tarjetas con `IntersectionObserver`.
- Internacionalizar los textos del tema con `__()` y `_e()` para soporte multilenguaje.
- Añadir un pipeline de CI/CD (GitHub Actions) que valide el PHP con `phpcs` y el JS con `eslint` en cada push.
