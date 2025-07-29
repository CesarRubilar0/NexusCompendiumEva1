<!DOCTYPE html>
<html lang="es">

@extends('components.header')
<body>


    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Nexus Compendium - Instituto Profesional San Sebastián</p>
            <p>Plataforma de Vinculación con el Medio</p>
        </div>
    </footer>
</body>
</html>

    <main>
        <div class="content-section fade-in">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Instituto Profesional San Sebastián</h3>
                <p>Formando profesionales en tecnologías aplicadas a la salud con excelencia académica y compromiso social.</p>
                <p style="color: var(--verde-brillante); font-weight: bold;">
                    🎨 Diseño basado en paleta Nexus Compendium
                </p>
            </div>
            <div class="footer-section">
                <h3>Contacto Institucional</h3>
                <p>📍 Av. Principal 123, Santiago, Chile</p>
                <p>📞 +56 2 2234 5678</p>
                <p>📧 contacto@ipss.cl</p>
            </div>
            <div class="footer-section">
                <h3>Enlaces del Sistema</h3>
                <p><a href="{{ url('/projects') }}">📁 Gestión de Proyectos</a></p>
                <p><a href="{{ url('/users') }}">👥 Usuarios del Sistema</a></p>
                <p><a href="{{ url('/reports') }}">📊 Reportes</a></p>
            </div>
        </div>
                <div class="footer-bottom text-center">
            <p>&copy; 2025 Nexus Compendium - Instituto Profesional San Sebastián</p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
