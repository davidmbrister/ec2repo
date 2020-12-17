<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class BasicAuthenticationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
        //->withSession(['foo' => 'bar'])
        ->get('/');
        $response->dumpHeaders();
        $testString = "sedfbrser";
        $response->assertStatus(200);
    }
}
