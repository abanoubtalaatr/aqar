<?php

namespace Tests\Feature\Mobile\Order\Rent\Add;

use App\Models\Category;
use Tests\TestCase;
use App\Models\User;
use App\Models\Order;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VillaTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * test add villa order.
     */
    public function test_add_villa_order(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user, 'api');

        $category = Category::factory()->create([
            'id' => 3,
            'adable' => "App\Models\Villa",
        ]);

        $data = Order::factory()->make([
            'user_id' => $user->id,
            'adable_id' => $category->id,
            'adable_type' => $category->adable,
            'for_rent' => '1',
            'category_id' => $category->id
            ])->toArray();

        $this->postJson('api/m/orders', $data)->assertOk();

        $this->assertDatabaseCount('orders', 1);

        $this->assertDatabaseCount('villas', 1);
    }
}
