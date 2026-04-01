<?php 
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$products = App\Models\Product::with('images')->take(5)->get();
echo json_encode($products, JSON_PRETTY_PRINT);
