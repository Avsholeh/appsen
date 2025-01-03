<?php

namespace Tests\Feature;

use App\Models\Departemen;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DepartemenTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    protected $seed = true;

    protected function setUp(): void
    {
        parent::setUp();
        $this->actingAs(User::find(1));
    }

    public function test_it_displays_departemen_index()
    {
        $response = $this->get(route('departemen.index'));

        $response->assertStatus(200);
    }

    public function test_it_creates_a_departemen()
    {
        $data = [
            'nama' => $this->faker->text(10),
            'deskripsi' => $this->faker->text(20),
        ];

        $response = $this->post(route('departemen.store'), $data);

        $response->assertRedirect(route('departemen.index'));
        $this->assertDatabaseHas('departemen', $data);
    }

    public function test_it_edits_a_departemen()
    {
        $departemen = Departemen::factory()->create();

        $data = [
            'nama' => $this->faker->text(10),
            'deskripsi' => $this->faker->text(20),
        ];

        $response = $this->put(route('departemen.update', $departemen->id), $data);
        $response->assertRedirect(route('departemen.index'));
        $this->assertDatabaseHas('departemen', $data);
    }

    public function test_it_deletes_a_departemen()
    {
        $departemen = Departemen::factory()->create();

        $response = $this->delete(route('departemen.destroy', $departemen->id));

        $response->assertRedirect(route('departemen.index'));
        $this->assertDatabaseMissing('departemen', ['id' => $departemen->id]);
    }
}
