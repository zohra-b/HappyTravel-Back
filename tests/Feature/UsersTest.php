<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UsersTest extends TestCase
{
    use RefreshDatabase;
    public function test_if_the_register_function_returns_response_201(): void
    {
        $user = [
            'name' => 'Zohra',
            'email' => 'zohra@gmail.com',
            'password' => '123456789',
            'password_confirmation' => '123456789'
        ];
        $response = $this->postJson('/api/register', $user);

        $response->assertStatus(201);
    }


    public function test_if_the_login_function_returns_response_200(): void
    {
        $user = [
            'name' => 'Zohra',
            'email' => 'zohra@gmail.com',
            'password' => '123456789',
            'password_confirmation' => '123456789'
        ];
        $response = $this->postJson('/api/register', $user);

        $response = $this->postJson('/api/login', $user);

        $response->assertStatus(200);
    }

    public function test_if_the_logout_function(): void
    {
        $user = User::factory()->create([
            'name' => 'Zohra',
            'email' => 'zohra@gmail.com',
            'password' => '123456789',
            'password_confirmation' => '123456789'
        ]);

        $token = $user->createToken('TestToken')->plainTextToken;

        // $response = $this->postJson('/api/register', );
        // $response = $this->getJson('/api/user-profile', $user);
        // $response = $this->getJson('/api/logout', $user);
        $response = $this->withHeaders(['Authorization' => 'Bearer ' . $token])
        ->getJson('/api/logout');

        $response->assertJsonFragment(['msg' => 'Sesión cerrada']);
    }
}
