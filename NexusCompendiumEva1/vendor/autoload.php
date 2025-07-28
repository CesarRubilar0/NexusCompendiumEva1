<?php

// Autoloader simulado de Composer para Nexus Compendium
// Este archivo simula el autoloader de Composer para cumplir con la estructura Laravel

define('COMPOSER_AUTOLOAD_LOADED', true);

// Autoloader principal
spl_autoload_register(function ($class) {
    // Mapeado de namespaces
    $prefixes = [
        'App\\' => __DIR__ . '/../app/',
        'Illuminate\\Support\\Facades\\' => __DIR__ . '/../app/Support/Facades/',
        'Database\\Factories\\' => __DIR__ . '/../database/factories/',
        'Database\\Seeders\\' => __DIR__ . '/../database/seeders/',
    ];
    
    foreach ($prefixes as $prefix => $base_dir) {
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) === 0) {
            $relative_class = substr($class, $len);
            $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
            
            if (file_exists($file)) {
                require_once $file;
                return true;
            }
        }
    }
    
    return false;
});

// Simular clases de Laravel básicas si no existen
if (!class_exists('Illuminate\Foundation\Application')) {
    class_alias('stdClass', 'Illuminate\Foundation\Application');
}

return true;
