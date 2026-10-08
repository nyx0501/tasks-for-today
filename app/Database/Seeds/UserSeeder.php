<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->truncate();
        $this->db->table('users')->insert([
            'username'   => 'jdelacruz',
            'full_name'  => 'Juan Dela Cruz',
            'email'      => 'juan.delacruz@example.com',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
