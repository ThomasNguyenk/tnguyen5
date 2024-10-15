<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;


class ProfilEtudiantTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function tests_accede_profil(): void
    {
        $this->actingAs($user = User::factory()->create());
        $response = $this->get('/info');
        $response->assertStatus(200);
    }

    public function test_etat_guest(): void
    {
        $this->assertGuest(); // Vérifie que l'utilisateur actuel est un "guest"
    }
}


