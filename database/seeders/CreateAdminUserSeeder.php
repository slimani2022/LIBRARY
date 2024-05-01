<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'ADMIN1', 
            'email' => 'master@gmail.com',
            'phone' => '0555552324',
            'address' => 'saida 20',
            'usertype' => 'admin',
            'password' => bcrypt('admin12345678')
        
        ]);
    
        $user = User::create([
            'name' => 'ADMIN2', 
            'email' => 'master1@gmail.com',
            'phone' => '0555552324',
            'address' => 'saida 20',
            'usertype' => 'admin',
            'password' => bcrypt('admin1admin')
        
        ]);
     
    }
    }
