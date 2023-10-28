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
        \App\Models\Departemen::factory(100)->create();

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        $users = \App\Models\User::factory(5)->create();

        foreach ($users as $user) {
            $today = \Carbon\Carbon::now();
            // generate data absensi untuk hari ini
            Absensi::factory()->for($user)->create([
                'tanggal' => $today,
            ]);
            // generate data absensi bebas
            Absensi::factory(5)->for($user)->create();
        }

        \App\Models\Jabatan::factory(100)->create();
    }
}
