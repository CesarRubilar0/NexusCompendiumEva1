<?php

/**
 * Nexus Compendium - Instituto Profesional San Sebastián
 * Punto de entrada principal para Laragon
 * Redirige automáticamente al sistema principal
 */

// Redirigir directamente a public/index.php
require_once __DIR__ . '/public/index.php';
?>
            background: rgba(255,255,255,0.1);
            padding: 3rem;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #6FC7D1;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        .btn {
            display: inline-block;
            background: #6FC7D1;
            color: #1A1B41;
            padding: 15px 30px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .logo {
            font-size: 4rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">🎓</div>
        <h1>Nexus Compendium</h1>
        <p>Sistema de Gestión de Proyectos de Vinculación con el Medio</p>
        <p><strong>Instituto Profesional San Sebastián</strong></p>
        <a href="/public/" class="btn">🚀 Acceder al Sistema</a>
    </div>
</body>
</html>
