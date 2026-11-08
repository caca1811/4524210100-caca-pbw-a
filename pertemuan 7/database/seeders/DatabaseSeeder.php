<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat User Admin (Caca)
        User::create([
            'name' => 'Caca Admin',
            'email' => 'caca@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Buat User Staff
        User::create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
        ]);

        // Buat User Viewer
        User::create([
            'name' => 'Viewer User',
            'email' => 'viewer@example.com',
            'password' => Hash::make('password'),
            'role' => 'viewer',
        ]);

        // Buat 10 authors
        $authors = Author::factory(10)->create();

        // Buat 50 books
        Book::factory(50)->create([
            'author_id' => fn() => $authors->random()->id,
        ]);
    }
}