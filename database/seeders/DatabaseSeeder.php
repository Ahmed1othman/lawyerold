<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
       $this->call(NavBarSeeder::class);
       $this->call(InfoSeeder::class);
       $this->call(SectionsSeeder::class);

       DB::table('users')->delete();
       User::create([
           'name' => 'Admin'
           ,'email' => 'admin@abdallahmwathiq.com'
           ,'password' => Hash::make('@bdalla7_2022')
       ]);
    }
}
