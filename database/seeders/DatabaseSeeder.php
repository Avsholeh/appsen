<?php

namespace Database\Seeders;

use App\Models\Absensi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        $json = json_decode(file_get_contents('database/seeders/seeders.json'));

        foreach ($json->Departemen as $departemen => $jabatans) {
            $new_departemen = \App\Models\Departemen::factory()->create([
                'nama' => $departemen
            ]);
            foreach ($jabatans as $jabatan) {
                $new_jabatan = \App\Models\Jabatan::factory()->create([
                    'nama' => $jabatan
                ]);

                $user = \App\Models\User::factory()
                    ->for($new_departemen)
                    ->for($new_jabatan)
                    ->create();

                $today = \Carbon\Carbon::now();
                // generate data absensi untuk hari ini
                Absensi::factory()->for($user)->create([
                    'tanggal' => $today,
                ]);
                // generate data absensi bebas
                Absensi::factory(5)->for($user)->create();
            }
        }
    }
}
