<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Super Admin',
               'email'=>'admin11@gmail.com',
               'usertype'=>'Super Admin',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Admin Jurusan',
               'email'=>'user8547@gmail.com',
               'usertype'=>'Admin Jurusan',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Dosen',
               'email'=>'user12@gmail.com',
               'usertype'=>'Dosen',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
