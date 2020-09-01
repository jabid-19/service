<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Service;
use App\User;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Order::truncate();
        Service::truncate();

        factory(User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
        ]);

        factory(User::class)->create([
            'name' => 'User',
            'email' => 'user@mail.com',
        ]);

        factory(Order::class, 15)->create();
        factory(Service::class, 50)->create();

    }
}
