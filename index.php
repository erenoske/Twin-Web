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

//Html boşluklarını kapatma
function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',     
        '/[^\S ]+\</s',     
        '/(\s)+/s',         
        '/<!--(.|\s)*?-->/' 
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}
ob_start("sanitize_output");

// Seçilen sayfaya uygun içeriği dahil edin
include __DIR__ . "/pages/{$page}.php";
