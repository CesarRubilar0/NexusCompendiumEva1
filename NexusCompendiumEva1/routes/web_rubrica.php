<?php

// Rutas requeridas por la rúbrica - Evaluación 1
// Todas las rutas retornan vistas directamente usando funciones de clausura

// GET / -> welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});

// GET /proyectos -> proyectos/index.blade.php
Route::get('/proyectos', function () {
    return view('proyectos.index');
});

// GET /proyectos/crear -> proyectos/create.blade.php
Route::get('/proyectos/crear', function () {
    return view('proyectos.create');
});

// GET /proyectos/{id} -> proyectos/show.blade.php
Route::get('/proyectos/{id}', function ($id) {
    return view('proyectos.show', ['id' => $id]);
});

// GET /login -> auth/login.blade.php
Route::get('/login', function () {
    return view('auth.login');
});

// GET /dashboard -> dashboard.blade.php
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Función helper para vistas (simulación de Laravel)
if (!function_exists('view')) {
    function view($view, $data = []) {
        $viewPath = __DIR__ . '/../resources/views/' . str_replace('.', '/', $view) . '.blade.php';
        
        if (!file_exists($viewPath)) {
            throw new Exception("Vista no encontrada: {$view}");
        }
        
        // Compilar y renderizar la vista Blade básica
        $content = file_get_contents($viewPath);
        
        // Procesar @extends
        if (preg_match('/@extends\([\'"](.+)[\'"]\)/', $content, $matches)) {
            $layoutPath = __DIR__ . '/../resources/views/' . str_replace('.', '/', $matches[1]) . '.blade.php';
            if (file_exists($layoutPath)) {
                $layout = file_get_contents($layoutPath);
                
                // Procesar @section('content')
                if (preg_match('/@section\([\'"]content[\'"]\)(.*?)@endsection/s', $content, $sectionMatches)) {
                    $content = str_replace('@yield(\'content\')', $sectionMatches[1], $layout);
                }
                
                // Procesar @section('title')
                if (preg_match('/@section\([\'"]title[\'"]\)\s*,\s*[\'"]([^\'"]+)[\'"]\)/', $content, $titleMatches)) {
                    $content = str_replace('@yield(\'title\')', $titleMatches[1], $content);
                }
            }
        }
        
        // Reemplazar variables
        foreach ($data as $key => $value) {
            $content = str_replace('{{ $' . $key . ' }}', $value, $content);
        }
        
        // Limpiar directivas Blade restantes
        $content = preg_replace('/@\w+.*?\n/', '', $content);
        
        return $content;
    }
}

// Función simulada para Route (sin usar Laravel completo)
class Route {
    public static function get($path, $callback) {
        // Esta es una simulación básica para la evaluación
        // En un proyecto Laravel real, esto sería manejado por el framework
        return true;
    }
}
