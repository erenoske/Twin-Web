<?php
// Temel yönlendirme mantığı
$uri = $_SERVER['REQUEST_URI'];
$routes = [
    '/erendevyedek/erendev/' => 'index',
    '/erendevyedek/erendev/hakkimizda' => 'about',
    // Gerektiğinde daha fazla rota ekleyin
];

// URI'dan rotayı çıkarın ve küçük harfe dönüştürün
$route = strtolower(strtok($uri, '?'));

// Seçilen sayfa veya eylemi belirleyin
$page = isset($routes[$route]) ? $routes[$route] : '404';

// Seçilen sayfaya uygun içeriği dahil edin
include __DIR__ . "/pages/{$page}.php";

include __DIR__ . "/footer/footer.php";
?>