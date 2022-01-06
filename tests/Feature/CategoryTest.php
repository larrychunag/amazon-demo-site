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
            ->count(3)
            ->create()
        ;
        $this->assertDatabaseCount('categories', 3);
    }
}
