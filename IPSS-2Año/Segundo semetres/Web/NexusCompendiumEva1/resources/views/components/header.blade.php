    <header>
         <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nexus Compendium')</title>
    @stack('styles')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  
        <div class="header-content">
            <div class="logo-section">
                <img src="images/logo.png" alt="Nexus Compendium Logo" class="logo">
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