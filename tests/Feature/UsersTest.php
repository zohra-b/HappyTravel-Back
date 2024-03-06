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
        $user = [
            'name' => 'Zohra',
            'email' => 'zohra@gmail.com',
            'password' => '123456789',
            'password_confirmation' => '123456789'
        ];
    
        $this->postJson('/api/register', $user);
    
        $response = $this->postJson('/api/login', $user);
    
        $token = $response->json('access_token');
    
        $response = $this->withHeaders(['Authorization' => 'Bearer ' . $token])
                         ->getJson('/api/logout');
    
        $response->assertJsonFragment(['msg' => 'Sesión cerrada']);
    }
}
