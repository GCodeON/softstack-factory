<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    private $users;

    private function getFile()
    {
        return base_path('database/seeds/users.php');
    }

    private function prepPassword($users)
    {
        return array_map(function ($user) {
            $user['password'] = bcrypt($user['password']);
            return $user;
        }, $users);
    }

    private function setDefaults()
    {
        if (file_exists($this->getFile())) {
            $users = include $this->getFile();
            $this->users = $this->prepPassword($users);
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->setDefaults();

        if (! empty($this->users)) {
            foreach ($this->users as $user) {
                // Base admin user
                DB::table('users')->insert($user);
            }
        }

    }
}
