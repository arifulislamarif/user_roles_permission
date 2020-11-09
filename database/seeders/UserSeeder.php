<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','arif@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "arif";
            $user->email = "arif@gmail.com";
            $user->password = bcrypt('12345678');
            $user->email_verified_at = Carbon::now();
            $user->remember_token = Str::random(10);
            $user->save();
        }
    }
}
