<?php

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('can create a category', function () {
    $category = Category::factory()->create([
        'category_name' => 'Minuman',
    ]);

    expect($category)->toBeInstanceOf(Category::class)
        ->and($category->category_name)->toBe('Minuman');
});

test('can see categories in the database', function () {
    Category::factory()->count(3)->create();

    dump(Category::all()->toArray());

    expect(Category::count())->toBe(3);
});
