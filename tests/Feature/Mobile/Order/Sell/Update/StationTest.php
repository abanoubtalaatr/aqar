<?php

namespace Tests\Feature\Mobile\Order\Sell\Update;

use App\Models\Category;
use Tests\TestCase;
use App\Models\User;
use App\Models\Order;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StationTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * test update station order.
     */
    public function test_update_station_order(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user, 'api');

        $category = Category::factory()->create([
            'id' => 21,
            'adable' => "App\Models\Station",
        ]);

        $order = Order::factory()->create(['user_id' => $user->id]);

        $data = Order::factory()->make([
            'user_id' => $user->id,
            'adable_id' => $category->id,
            'adable_type' => $category->adable,
            'for_rent' => '0',
            'category_id' => $category->id
            ])->toArray();

        $this->putJson('api/m/orders/'. $order->id, $data)->assertOk();

        $this->assertDatabaseCount('orders', 1);

        $this->assertDatabaseCount('stations', 1);
    }
}
