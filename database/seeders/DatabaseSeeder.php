<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(13)->create();

        /** @var User $adminUser */
        $adminUser = User::factory()->create([
            'email'    => 'admin@admin.com',
            'name'     => 'Admin',
            'password' => bcrypt('admin123'),
        ]);

        $adminRole = Role::create(['name' => 'admin']);
        $adminUser->assignRole($adminRole);
    }
}
