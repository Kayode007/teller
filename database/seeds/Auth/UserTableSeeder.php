<?php

use App\Models\Auth\User;
use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master administrator, user id of 1
        User::create([
            'first_name'        => 'Admin',
            'last_name'         => 'Teller',
            'email'             => 'admin@teller.com',
            'password'          => 'secret',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed'         => true,
        ]);

        User::create([
            'first_name'        => 'Backend',
            'last_name'         => 'User',
            'email'             => 'executive@executive.com',
            'password'          => 'secret',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed'         => true,
            'ac_number'         => Str::random(8)
        ]);

        User::create([
            'first_name'        => 'teller client',
            'last_name'         => 'client 1',
            'email'             => 'user@user.com',
            'password'          => 'secret',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed'         => true,
            'ac_number'         => Str::random(8)
        ]);

        $this->enableForeignKeys();
    }
}
