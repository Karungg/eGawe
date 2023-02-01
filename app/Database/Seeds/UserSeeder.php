<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat Seeder
        $data = [
            [
                'name_user'     => 'Karung',
                'email_user'    => 'karung@gmail.com',
                'password_user' => password_hash('1234', PASSWORD_BCRYPT),
            ],
            [
                'name_user'     => 'Miftah Fadilah',
                'email_user'    => 'miftahfadilah71@gmail.com',
                'password_user' => password_hash('karung', PASSWORD_BCRYPT),
            ],
            [
                'name_user'     => 'Kawung',
                'email_user'    => 'Kawung@gmail.com',
                'password_user' => password_hash('1234', PASSWORD_BCRYPT),
            ],

        ];

        $this->db->table('users')->insertBatch($data);
    }
}
