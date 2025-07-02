<?php

namespace Database\Seeders\Auth;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dokumen Admin',
            'username' => 'dokumen.piramid.admin',
            'email' => 'studio.exium@gmail.com',
            'password' => Hash::make('dokumenpiramidadmin123'),
            'register_at' => Carbon::now(env('APP_TIMEZONE'))
        ]);
    }
}
