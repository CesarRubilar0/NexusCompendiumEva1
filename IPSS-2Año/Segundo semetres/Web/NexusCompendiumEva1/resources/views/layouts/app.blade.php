
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nexus Compendium')</title>
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
            background-color: var(--white);
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
            color: var(--white);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
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
        }

        .site-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin: 0;
        }

        /* Navigation */
        .nav-menu {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-menu a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color: var(--bright-green);
        }

        /* Main Content */
        main {
            min-height: calc(100vh - 200px);
            background-color: var(--gray-light);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--light-green), var(--primary-blue));
            color: var(--dark-blue);
            padding: 4rem 0;
            text-align: center;
        }

        .hero-title {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.8;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Buttons */
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-primary {
            background-color: var(--primary-blue);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: var(--dark-blue);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: var(--bright-green);
            color: var(--dark-blue);
        }

        .btn-secondary:hover {
            background-color: var(--light-green);
            transform: translateY(-2px);
        }

        /* Features Section */
        .features-section {
            padding: 4rem 0;
            background-color: var(--white);
        }

        .features-section h2 {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--dark-blue);
            font-size: 2.5rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-left: 4px solid var(--primary-blue);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-card h3 {
            color: var(--dark-blue);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        /* Footer */
        footer {
            background-color: var(--dark-blue);
            color: var(--white);
            text-align: center;
            padding: 2rem 0;
            margin-top: auto;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            .hero-title {
                font-size: 2rem;
            }

            .nav-menu {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-section">
                <div class="logo">NC</div>
                <h1 class="site-title">Nexus Compendium</h1>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/proyectos">Proyectos</a></li>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Nexus Compendium - Instituto Profesional de Sistemas de Salud</p>
            <p>Plataforma de Vinculación con el Medio</p>
        </div>
    </footer>
</body>
</html>

    <nav>
        <div class="nav-container">
            <ul class="nav-menu">
                <li><a href="{{ url('/') }}">🏠 Inicio</a></li>
                <li><a href="{{ url('/projects') }}">📁 Proyectos</a></li>
                <li><a href="{{ url('/users') }}">👥 Usuarios</a></li>
                <li><a href="{{ url('/dashboard') }}">📊 Dashboard</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="content-section fade-in">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Instituto Profesional de Sistemas de Salud</h3>
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
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Instituto Profesional de Sistemas de Salud. Todos los derechos reservados.</p>
            <p style="font-size: 0.8rem; color: var(--verde-brillante);">
                🎨 Paleta Nexus Compendium | 📧 Correos @ipss.cl
            </p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
