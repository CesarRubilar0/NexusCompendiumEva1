
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nexus Compendium - IPSS')</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        :root {
            --primary-blue: #6290C3;
            --light-green: #C2E7DA;
            --dark-blue: #1A1B41;
            --bright-green: #BAFF29;
            --white: #ffffff;
            --gray-light: #f8f9fa;
            --gray-dark: #343a40;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: var(--dark-blue);
            background-color: var(--gray-light);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
            color: var(--white);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo {
            width: 50px;
            height: 50px;
            background: var(--bright-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: var(--dark-blue);
            font-size: 1.2rem;
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .site-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }

        /* Navigation */
        .nav-menu {
            display: flex;
            gap: 1.5rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-menu a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            background-color: var(--bright-green);
            color: var(--dark-blue);
        }

        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Main Content */
        main {
            flex: 1;
            background-color: var(--gray-light);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        /* Footer */
        footer {
            background-color: var(--dark-blue);
            color: var(--white);
            padding: 2rem 0;
            margin-top: auto;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: var(--bright-green);
        }

        .footer-section p {
            margin-bottom: 0.5rem;
            opacity: 0.9;
        }

        .footer-section a {
            color: var(--bright-green);
            text-decoration: none;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 2rem;
            padding-top: 1rem;
            text-align: center;
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }
            
            .mobile-menu-toggle {
                display: block;
                position: absolute;
                right: 1rem;
                top: 1rem;
            }
            
            .nav-menu {
                display: none;
                flex-direction: column;
                width: 100%;
                gap: 0.5rem;
                margin-top: 1rem;
            }
            
            .nav-menu.show {
                display: flex;
            }
            
            .nav-menu a {
                text-align: center;
                padding: 1rem;
            }
            
            .site-title {
                font-size: 1.2rem;
            }
            
            .container {
                padding: 1rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .logo {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            
            .site-title {
                font-size: 1rem;
            }
            
            .nav-menu a {
                padding: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-section">
                <div class="logo">
                    <img src="/images/logo.png" alt="Nexus Compendium Logo" />
                </div>
                <h1 class="site-title">Nexus Compendium</h1>
            </div>
            <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">☰</button>
            <nav>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="/" id="nav-bienvenidos">🏠 Bienvenidos</a></li>
                    <li><a href="/dashboard" id="nav-dashboard">📊 Dashboard</a></li>
                    <li><a href="/proyectos" id="nav-proyectos">📁 Proyectos</a></li>
                    <li><a href="/usuarios" id="nav-usuarios">👥 Usuarios</a></li>
                    <li><a href="/institutos" id="nav-institutos">🏢 Institutos</a></li>
                    <li><a href="/reportes" id="nav-reportes">📈 Reportes</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>📚 Nexus Compendium</h3>
                <p>Sistema de Gestión de Proyectos de Vinculación con el Medio</p>
                <p>Instituto Profesional San Sebastián</p>
                <p style="margin-top: 1rem;">
                    <strong>Conectando conocimiento con impacto social</strong>
                </p>
            </div>
            <div class="footer-section">
                <h3>📞 Contacto</h3>
                <p>📍 Av. Principal 123, Santiago, Chile</p>
                <p>📧 contacto@ipss.cl</p>
                <p>☎️ +56 2 2234 5678</p>
                <p>🌐 www.ipss.cl</p>
            </div>
            <div class="footer-section">
                <h3>🔗 Enlaces Rápidos</h3>
                <p><a href="/proyectos">Ver Proyectos Activos</a></p>
                <p><a href="/usuarios">Gestión de Usuarios</a></p>
                <p><a href="/institutos">Instituciones Aliadas</a></p>
                <p><a href="/reportes">Reportes y Estadísticas</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Nexus Compendium - Instituto Profesional San Sebastián. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('show');
        }

        // Cerrar menú móvil al hacer clic en un enlace
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navMenu').classList.remove('show');
            });
        });

        // Cerrar menú móvil al hacer clic fuera
        document.addEventListener('click', (e) => {
            const navMenu = document.getElementById('navMenu');
            const toggle = document.querySelector('.mobile-menu-toggle');
            
            if (!navMenu.contains(e.target) && !toggle.contains(e.target)) {
                navMenu.classList.remove('show');
            }
        });

        // Solo manejar clases activas, SIN interceptar navegación
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            
            // Limpiar y setear clases activas
            document.querySelectorAll('.nav-menu a').forEach(link => {
                link.classList.remove('active');
                
                const href = link.getAttribute('href');
                if ((currentPath === '/' || currentPath === '/dashboard') && href === '/') {
                    link.classList.add('active');
                } else if (currentPath.startsWith(href) && href !== '/') {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
