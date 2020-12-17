<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Category;
use App\Models\Camp;
use App\Models\Event;

class CreateCampEventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateCampEvent()
    {
        
        $category = factory(Category::class)->create([
          'name' => 'testCat'
        ]);
        $camp = factory(Camp::class)->create([
          'title' => 'testCamp',
          'category_id' => $category->id,
          'event_id' => factory(Event::class), // creates an event and provides the autoincremented event id to this attrubute's event_id value
        ]);
        $user = factory(User::class)->create([
          'name' => 'testUser',
          'role_id' => 1
        ]);

        // Assert the page is accessible by the authenticated user
        $response = $this->actingAs($user)
        //->withSession(['foo' => 'bar'])
        ->get('/camps');
        $response->assertStatus(200);

        // Assert that the records are in the database
        $this->assertDatabaseHas('categories', [
              'name' => 'testCat',
          ]);
        $this->assertDatabaseHas('camps', [
              'title' => 'testCamp',
          ]);
        $this->assertDatabaseCount('events', 1);
        // Assert the page is accessible by the 
        //$response = $this->get('/');
        //$response->assertStatus(302);
    }
}
