<?php

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('can create a product', function () {
    $product = Product::factory()->create([
        'title' => 'Jus Mangga',
        'price' => '15000',
        'quantity' => '10',
    ]);

    expect($product)->toBeInstanceOf(Product::class)
        ->and($product->title)->toBe('Jus Mangga')
        ->and($product->price)->toBe('15000');
});

test('can list all products', function () {
    Product::factory()->count(5)->create();

    dump(Product::all()->toArray());

    expect(Product::count())->toBe(5);
});
