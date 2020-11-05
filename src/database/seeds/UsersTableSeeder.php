<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/json-dump/nfojm_users.json');

        $users = json_decode($json);

        foreach ($users as $user)
        {
            DB::table('users')->insert([
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password,
            ]);
        }
    }
}
