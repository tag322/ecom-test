<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use PHPUnit\Framework\Attributes\DataProvider;
use Illuminate\Testing\Fluent\AssertableJson;

class BasketActionsTest extends TestCase
{

    /**
     * 
     * 
     */
    #[DataProvider('userDataProvider')]
    public function test_basket_item_add_then_delete($user)
    {

        $user = $user();

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
    }

    /**
     *
     * @depends test_basket_item_add
     */
    
    // public function test_basket_item_deletion(): void
    // {
    //     $user = User::orderBy('id', 'desc')->first(); //хуй знает как запустить два теста с одинаковым инстансом юзера, который я создаю через фабрику. Поэтому просто берем последнего созданного.

    //     $requestBody = [
    //         'product_id' => 1,
    //         'quantity' => 0,
    //     ];

    //     $response = $this->actingAs($user)->post('/api/add-to-cart', $requestBody);

    //     $response->assertStatus(200);
    // }

    public static function userDataProvider(): array {
        return [[fn(): User => User::factory()->create()]];
    }
}
