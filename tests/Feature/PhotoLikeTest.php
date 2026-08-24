<?php

namespace Tests\Feature;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PhotoLikeTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_renders_the_like_button(): void
    {
        $user = User::factory()->create();
        Photo::factory()->create();

        $response = $this->actingAs($user)->get(route('dashboard'));

        $response->assertOk();
        $response->assertSee('Curtir foto');
    }

    public function test_authenticated_users_can_like_a_photo(): void
    {
        $user = User::factory()->create();
        $photo = Photo::factory()->create();

        $response = $this->actingAs($user)->post(route('photos.like', $photo));

        $response->assertRedirect();
        $this->assertDatabaseHas('likes', [
            'photo_id' => $photo->id,
            'user_id' => $user->id,
        ]);
    }

    public function test_authenticated_users_can_remove_their_like_from_a_photo(): void
    {
        $user = User::factory()->create();
        $photo = Photo::factory()->create();

        $photo->likes()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->post(route('photos.like', $photo));

        $response->assertRedirect();
        $this->assertDatabaseMissing('likes', [
            'photo_id' => $photo->id,
            'user_id' => $user->id,
        ]);
    }
}
