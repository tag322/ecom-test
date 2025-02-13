<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use PHPUnit\Framework\Attributes\DataProvider;
use Illuminate\Testing\Fluent\AssertableJson;

beforeAll(function () {
    
});

test('should delete item', function (User $user) {

    $requestBody = [
        'product_id' => 1,
        'quantity' => rand(1,10),
    ];

    $response = $this->actingAs($user)->post('/api/add-to-cart', $requestBody);

    $response->assertStatus(200);

    $requestBody = [
        'product_id' => 1,
        'quantity' => 0,
    ];

    $response = $this->actingAs($user)->post('/api/add-to-cart', $requestBody);

    $response->assertJsonMissing(['product_id' => $requestBody['product_id']]);;

    User::find($user->id)->delete();
})->with([
    fn() => User::factory()->create(),
]);
    
afterAll(function() {

});