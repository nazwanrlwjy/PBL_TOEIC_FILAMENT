<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(SectionsTableSeeder::class);
        $this->call(PendaftaranTableSeeder::class);
        $this->call(SettingsTableSeeder::class);

        $this->call([
    MahasiswaTerdaftarSeeder::class,
]);

        $this->call(HasilsTableSeeder::class);
        $this->call(JadwalPendaftaranTableSeeder::class);

    }
}
