<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/json-dump/users.json');

        $users = json_decode($json);

        DB::table('users')->insert([
                      'name' => "Dave",
                      'email' => "w0423999@nscc.ca",
                      'password' => bcrypt('test1234'),
                      'role_id' => 1
                    ]);
        factory(User::class, 3)->create();
       /*  foreach ($users as $user)
        {
            DB::table('users')->insert([
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password,
            ]);
        } */
    }
}
