<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;   //   va el modelo a correspondiente a la tabla

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //datos del admin
        $user = new User;

        $user->username ="Admin";
        $user->email ="AhorroManager";
        $user->password ="admin";

        $user->save();

        $user2 = new User;
        $user2->username ="CorreoTest";
        $user2->email ="chato4010@gmail.com";
        $user2->password ="admin";
        $user2->save();
        


    }
}
