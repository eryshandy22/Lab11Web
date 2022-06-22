<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'EryShandy',
            'useremail' => 'eryshandy22@gmail.com',
            'userpassword' => password_hash('eryshandy12345', PASSWORD_DEFAULT),
        ]);
    }
}
