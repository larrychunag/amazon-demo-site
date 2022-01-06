<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class CategoryTest extends TestCase
{
    /*
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function testDatabase()
    {
        $category = Category::factory()
            ->hasProducts(10)
            ->create()
        ;
        $this->assertDatabaseCount('categories', 1);
        $this->assertDatabaseCount('products', 10);
    }
}
