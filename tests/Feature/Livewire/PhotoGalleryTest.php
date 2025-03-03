<?php

namespace Tests\Feature\Livewire;

use App\Livewire\PhotoGallery;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PhotoGalleryTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(PhotoGallery::class)
            ->assertStatus(200);
    }
}
