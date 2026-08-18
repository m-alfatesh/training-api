<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('GET /products returns 200', function () {
    $response = $this->get('/api/products');

    $response->assertStatus(200);
});

test('POST /products with invalid data returns 422', function () {
    $response = $this->postJson('/api/products', [
        'name' => '',
        'price' => '',
    ]);

    $response->assertStatus(422);
});
