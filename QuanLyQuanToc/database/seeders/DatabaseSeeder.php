<?php

namespace Database\Seeders;

use App\Models\User;
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

        KhachHang::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'admin',
        ]);

        KieuToc::factory()->create([
            'IdToc' => '0',
            'TenKieuToc' => 'DauTroc',
        ]);

        ThoCatToc::factory()->create([
            'IdTho' => '0',
            'TenTho' => 'Dao Manh Vuong',
            'Luong' => '100.000.000',
            'Chuc Vu' => 'Onwer',
        ]);
        ThoCatToc::factory()->create([
            'IdTho' => '1',
            'TenTho' => 'Nguyen Van Hung',
            'Luong' => '100.000',
            'Chuc Vu' => 'Co_Owner',
        ]);

    }
}
