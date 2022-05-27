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
               'firstname'=>'Admin',
               'middlename' => 'Middle',
               'lastname' => 'User',
               'email'=>'admin@codel.com',
               'type'=>2,
               'password'=> bcrypt('123456'),
            ],
            [
               'firstname'=>'Manager',
               'middlename' => 'Middle',
               'lastname' => 'User',
               'email'=>'manager@codel.com',
               'type'=> 3,
               'password'=> bcrypt('123456'),
            ],
            [
               'firstname'=>'User',
               'middlename' => 'Middle',
               'lastname' => 'User',
               'email'=>'user@codel.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],

            [
                'firstname'=>'Applicant',
                'middlename' => 'Middle',
                'lastname' => 'User',
                'email'=>'applicant@codel.com',
                'type'=>0,
                'password'=> bcrypt('123456'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}