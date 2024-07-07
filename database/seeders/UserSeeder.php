<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menghapus semua data dari tabel users
        DB::table('users')->truncate();

        // Menyisipkan data baru
        DB::table('users')->insert([
            [
                'email' => 'nickyzahrani@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('nicky123'), // Encrypting password
                'nama_lengkap' => 'Nicky Zahrani Monitaputri',
                'no_hp' => '08123456789',
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'andikapamungkas72@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('andika123'), // Encrypting password
                'nama_lengkap' => 'Andika Gusti Pamungkas',
                'no_hp' => '08123456780',
                'role' => 'manager',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);    
    }
}
