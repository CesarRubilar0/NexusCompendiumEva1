<?php
// Test directo del sistema
require_once __DIR__ . '/../routes/web.php';

echo "=== TEST DEL SISTEMA ===\n";

try {
    echo "1. Probando función view con dashboard.dashboard...\n";
    $result = view('dashboard.dashboard');
    echo "   ✓ Función view ejecutada\n";
    echo "   ✓ Longitud del resultado: " . strlen($result) . " caracteres\n";
    echo "   ✓ Contiene '<html>': " . (strpos($result, '<html>') !== false ? 'SÍ' : 'NO') . "\n";
    echo "   ✓ Contiene 'Dashboard': " . (strpos($result, 'Dashboard') !== false ? 'SÍ' : 'NO') . "\n";
    
} catch (Exception $e) {
    echo "   ❌ ERROR: " . $e->getMessage() . "\n";
}

echo "\n2. Verificando archivos de vista...\n";
$views = [
    'dashboard.dashboard' => __DIR__ . '/../resources/views/dashboard/dashboard.blade.php',
    'proyectos.index' => __DIR__ . '/../resources/views/proyectos/index.blade.php',
    'usuarios.index' => __DIR__ . '/../resources/views/usuarios/index.blade.php',
    'institutos.index' => __DIR__ . '/../resources/views/institutos/index.blade.php',
    'reportes.index' => __DIR__ . '/../resources/views/reportes/index.blade.php',
    'auth.login' => __DIR__ . '/../resources/views/auth/login.blade.php'
];

foreach ($views as $viewName => $path) {
    echo "   $viewName: " . (file_exists($path) ? '✓ Existe' : '❌ No existe') . "\n";
}

echo "\n3. Verificando layout...\n";
$layoutPath = __DIR__ . '/../resources/views/layouts/app.blade.php';
echo "   Layout: " . (file_exists($layoutPath) ? '✓ Existe' : '❌ No existe') . "\n";

echo "\n=== FIN DEL TEST ===\n";
?>
