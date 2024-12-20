<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Menu;
use App\Models\Nuoc;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            // 'name' => 'Test User 1',
            // 'email' => 'test1@example.com',
        ]);

        Menu::create([
            'name' => 'MenuTra',
            'mota' => 'Tra thom ngon dam vi',
        ]);
        Menu::create([
            'name' => 'MenuNuocTraiCay',
            'mota' => 'Trai cay tuoi thom ngon',
        ]);

        Nuoc::create([
            'name' => 'Tra sua1',
            'price' => '30.000',
            'menu_id' => '1',
        ]);
        Nuoc::create([
            'name' => 'Tra sua2',
            'price' => '30.000',
            'menu_id' => '1',
        ]);
        Nuoc::create([
            'name' => 'Tra sua3',
            'price' => '30.000',
            'menu_id' => '1',
        ]);
    }
}