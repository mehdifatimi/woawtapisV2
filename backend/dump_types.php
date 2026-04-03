<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$types = \App\Models\Type::all();
foreach($types as $t) {
    echo "Type " . $t->id . ": " . $t->name . "\n";
}

$c = \App\Models\Category::find(17);
echo "\nCategory 17: " . $c->name . " -> type_id: " . $c->type_id . "\n";
$prods = \App\Models\Product::where('category_id', 17)->get();
foreach($prods as $p) {
    echo "- Prod " . $p->id . ": type_id: " . $p->type_id . "\n";
}
