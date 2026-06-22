document.addEventListener('DOMContentLoaded', function () {

    const servicios = [
        { id: 1, nombre: 'Landing Page Corporativa',  precio: 850,  activo: true  },
        { id: 2, nombre: 'Sitio Web Institucional',   precio: 1800, activo: true  },
        { id: 3, nombre: 'Mantenimiento Web Mensual', precio: 450,  activo: true  },
        { id: 4, nombre: 'Correos Corporativos',      precio: 320,  activo: true  },
        { id: 5, nombre: 'Integración con CMS',       precio: 950,  activo: false }
    ];

    const iconos = {
        1: '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>',
        2: '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
        3: '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>',
        4: '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
        5: '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>'
    };

    const estado = {
        soloActivos:      false,
        ordenarPorPrecio: false
    };

    const formatearPrecio = new Intl.NumberFormat('es-PE', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });

    function obtenerVisibles() {
        let lista = [...servicios];

        if (estado.soloActivos) {
            lista = lista.filter(function (s) { return s.activo === true; });
        }

        if (estado.ordenarPorPrecio) {
            lista.sort(function (a, b) { return a.precio - b.precio; });
        }

        return lista;
    }

    function crearTarjeta(servicio) {
        const badgeClase = servicio.activo ? 'tarjeta__badge--activo' : 'tarjeta__badge--inactivo';
        const badgeTexto = servicio.activo ? 'Disponible' : 'No disponible';
        const icono      = iconos[servicio.id] || iconos[1];

        return (
            '<article class="tarjeta">' +
                '<div class="tarjeta__icono">' + icono + '</div>' +
                '<h3 class="tarjeta__nombre">' + servicio.nombre + '</h3>' +
                '<div class="tarjeta__precio-bloque">' +
                    '<span class="tarjeta__moneda">S/</span>' +
                    '<span class="tarjeta__precio">' + formatearPrecio.format(servicio.precio) + '</span>' +
                    '<span class="tarjeta__periodo">/ proyecto</span>' +
                '</div>' +
                '<div class="tarjeta__footer">' +
                    '<span class="tarjeta__badge ' + badgeClase + '">' + badgeTexto + '</span>' +
                    '<a href="https://apros.pe/#contacto" target="_blank" rel="noopener" class="tarjeta__cta">Cotizar →</a>' +
                '</div>' +
            '</article>'
        );
    }

    function render() {
        const visibles = obtenerVisibles();
        const grid     = document.getElementById('servicios-grid');

        if (visibles.length === 0) {
            grid.innerHTML = '<p class="servicios-vacio">No hay servicios que coincidan con los filtros aplicados.</p>';
            return;
        }

        grid.innerHTML = visibles.map(crearTarjeta).join('');
    }

    function configurarBotonToggle(botonId, flagEstado) {
        var boton = document.getElementById(botonId);

        boton.addEventListener('click', function () {
            estado[flagEstado] = !estado[flagEstado];
            boton.classList.toggle('activo', estado[flagEstado]);
            boton.setAttribute('aria-pressed', String(estado[flagEstado]));
            render();
        });
    }

    configurarBotonToggle('btn-activos', 'soloActivos');
    configurarBotonToggle('btn-precio',  'ordenarPorPrecio');

    render();
});
