<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Διαχειριστής',],
            ['id' => 3, 'title' => 'Συντονιστής',],
            ['id' => 4, 'title' => 'Οργανωτική Επιτροπή',],
            ['id' => 5, 'title' => 'Επιστημονική Επιτροπή',],
            ['id' => 6, 'title' => 'Συγγραφέας',],
            ['id' => 7, 'title' => 'Ακροατής',],
            ['id' => 8, 'title' => 'Γραμματεία',],
            ['id' => 9, 'title' => 'Εθελοντής',],
            ['id' => 10, 'title' => 'Επιμελητές Πρακτικών',],

        ];

        foreach ($items as $item) {
            \App\Role::create($item);
        }
    }
}
