<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Testing\File;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Trips;

class TripsTest extends TestCase
{
    use RefreshDatabase;
    public function test_if_index_function_returns_response_200(): void
    {
        $response = $this->getJson('/api');
        $response->assertStatus(200);
    }

    public function test_if_store_destroy_delete_data(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $trip = Trips::factory()->create(['user_id' => $user->id]);
    
        $response = $this->deleteJson('/api/trip/' . $trip->id);
        
        $response->assertJson(['message' => 'Se ha eliminado el viaje']);
    }

    public function test_if_store_function_can_add_data(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $fakeImage = UploadedFile::fake()->image('image.jpg');

        $tripData = [
            'title' => 'Título de prueba',
            'location' => 'Ubicación de prueba',
            'image' => $fakeImage, 
            'description' => 'Descripción de prueba'
        ];

        
        $response = $this->post('/api/store', $tripData);

        $response->assertJson(['message' => 'Viaje se ha creado correctamente']);
    }
}
