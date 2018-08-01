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
            ['id' => 2, 'title' => 'Συντονιστής',],
            ['id' => 3, 'title' => 'Οργανωτική Επιτροπή',],
            ['id' => 4, 'title' => 'Επιστημονική Επιτροπή',],

        ];

        foreach ($items as $item) {
            \App\Role::create($item);
        }
    }
}
