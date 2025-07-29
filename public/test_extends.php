<?php
// Test específico del @extends
$content = file_get_contents(__DIR__ . '/../resources/views/dashboard/dashboard.blade.php');

echo "=== TEST DE @EXTENDS ===\n";
echo "Contenido de los primeros 200 caracteres:\n";
echo substr($content, 0, 200) . "\n\n";

echo "Buscando @extends...\n";
if (preg_match('/@extends\([\'"](.+?)[\'"]\)/', $content, $matches)) {
    echo "✓ @extends encontrado: " . $matches[1] . "\n";
    
    $layoutPath = __DIR__ . '/../resources/views/' . str_replace('.', '/', $matches[1]) . '.blade.php';
    echo "Ruta del layout: $layoutPath\n";
    echo "¿Layout existe?: " . (file_exists($layoutPath) ? 'SÍ' : 'NO') . "\n";
    
    if (file_exists($layoutPath)) {
        $layout = file_get_contents($layoutPath);
        echo "Layout contiene <!DOCTYPE html>: " . (strpos($layout, '<!DOCTYPE html>') !== false ? 'SÍ' : 'NO') . "\n";
    }
} else {
    echo "❌ @extends NO encontrado\n";
}

echo "\nBuscando @section('content')...\n";
if (preg_match('/@section\([\'"]content[\'"]\)(.*?)@endsection/s', $content, $sectionMatches)) {
    echo "✓ @section('content') encontrado\n";
    echo "Longitud del contenido: " . strlen($sectionMatches[1]) . " caracteres\n";
} else {
    echo "❌ @section('content') NO encontrado\n";
}
?>
