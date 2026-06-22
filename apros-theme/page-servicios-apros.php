<?php get_header(); ?>

<div class="apros-landing">

    <nav class="apros-nav">
        <div class="apros-nav__inner">
            <span class="apros-nav__logo">APROS</span>
            <a href="https://apros.pe/" target="_blank" rel="noopener" class="apros-nav__link">
                Volver al sitio principal
            </a>
        </div>
    </nav>

    <header class="apros-hero">
        <div class="apros-hero__inner">
            <div class="apros-hero__badge">Soluciones digitales</div>
            <h1 class="apros-hero__titulo">
                Hacemos tu presencia<br>
                <span class="apros-hero__titulo--accent">digital memorable</span>
            </h1>
            <p class="apros-hero__descripcion">
                Diseño, desarrollo y mantenimiento web para empresas que quieren
                crecer en el entorno digital. Más de 200 clientes confían en nosotros.
            </p>
            <div class="apros-hero__acciones">
                <a href="#servicios" class="btn btn--primario">Ver servicios</a>
                <a href="https://wa.me/51906459245" target="_blank" rel="noopener" class="btn btn--secundario">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    WhatsApp
                </a>
            </div>
        </div>
        <div class="apros-hero__estadisticas">
            <div class="apros-hero__inner">
                <div class="estadistica">
                    <span class="estadistica__numero">200+</span>
                    <span class="estadistica__label">Clientes</span>
                </div>
                <div class="estadistica">
                    <span class="estadistica__numero">10+</span>
                    <span class="estadistica__label">Años de experiencia</span>
                </div>
                <div class="estadistica">
                    <span class="estadistica__numero">ISO</span>
                    <span class="estadistica__label">9001 Certificados</span>
                </div>
                <div class="estadistica">
                    <span class="estadistica__numero">24/7</span>
                    <span class="estadistica__label">Soporte técnico</span>
                </div>
            </div>
        </div>
    </header>

    <section class="apros-servicios" id="servicios" aria-labelledby="servicios-titulo">
        <div class="apros-servicios__inner">

            <div class="apros-servicios__encabezado">
                <h2 id="servicios-titulo" class="apros-servicios__titulo">Nuestros servicios</h2>
                <p class="apros-servicios__subtitulo">
                    Soluciones a medida para cada etapa de tu presencia digital
                </p>
            </div>

            <div class="controles" role="group" aria-label="Filtros de servicios">
                <button id="btn-activos" class="control-btn" aria-pressed="false">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    Solo activos
                </button>
                <button id="btn-precio" class="control-btn" aria-pressed="false">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                    Menor precio primero
                </button>
            </div>

            <div id="servicios-grid" aria-live="polite" aria-label="Lista de servicios"></div>

        </div>
    </section>

    <section class="apros-cta">
        <div class="apros-cta__inner">
            <div class="apros-cta__texto">
                <h2 class="apros-cta__titulo">¿Tienes un proyecto en mente?</h2>
                <p class="apros-cta__descripcion">
                    Cuéntanos qué necesitas y te enviamos una propuesta personalizada sin compromiso.
                </p>
            </div>
            <div class="apros-cta__acciones">
                <a href="https://apros.pe/#contacto" target="_blank" rel="noopener" class="btn btn--blanco">
                    Solicitar cotización
                </a>
                <a href="https://wa.me/51906459245" target="_blank" rel="noopener" class="btn btn--whatsapp">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    +51 906 459 245
                </a>
            </div>
        </div>
    </section>

    <footer class="apros-footer">
        <div class="apros-footer__inner">
            <span class="apros-footer__marca">APROS</span>
            <span class="apros-footer__copy">© <?php echo date('Y'); ?> APROS. Todos los derechos reservados.</span>
        </div>
    </footer>

</div>

<?php get_footer(); ?>
