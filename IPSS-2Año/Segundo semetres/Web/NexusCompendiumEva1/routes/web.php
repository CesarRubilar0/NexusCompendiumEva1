
<?php

require_once __DIR__ . '/../bootstrap.php';

use Illuminate\Support\Facades\Route;

// Funciones helper de Laravel
if (!function_exists('view')) {
    function view($view, $data = []) {
        $viewPath = __DIR__ . '/../resources/views/' . str_replace('.', '/', $view) . '.blade.php';
        
        if (!file_exists($viewPath)) {
            throw new Exception("Vista no encontrada: {$view}");
        }
        
        // Compilar y renderizar la vista Blade
        $content = file_get_contents($viewPath);
        
        // Procesar @extends
        if (preg_match('/@extends\([\'"](.+)[\'"]\)/', $content, $matches)) {
            $layoutPath = __DIR__ . '/../resources/views/' . str_replace('.', '/', $matches[1]) . '.blade.php';
            if (file_exists($layoutPath)) {
                $layout = file_get_contents($layoutPath);
                // Extraer @section('content')
                if (preg_match('/@section\([\'"]content[\'"]\)(.*?)@endsection/s', $content, $sectionMatches)) {
                    $content = str_replace('@yield(\'content\')', $sectionMatches[1], $layout);
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

// Ruta principal - usando función de clausura según el enunciado
Route::get('/', function () {
    return view('welcome');
});

// Rutas para proyectos - usando funciones de clausura según el enunciado
Route::get('/proyectos', function () {
    return view('proyectos.index');
});

Route::get('/proyectos/crear', function () {
    return view('proyectos.create');
});

Route::get('/proyectos/{id}', function ($id) {
    return view('proyectos.show', ['id' => $id]);
});

// Rutas adicionales requeridas - usando funciones de clausura
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
