<?php


use App\User;
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
//        DB::table('users')->insert([
//            'name'     => "hasib",
//            'email'    => 'hasib@unifiedtransform.com',
//            'password' => bcrypt('secret'),
//            'role'     => 'master',
//        ]);

       factory(User::class, 20)->create();

    }
}
