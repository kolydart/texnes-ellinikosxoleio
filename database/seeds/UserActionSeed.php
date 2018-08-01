<?php

use Illuminate\Database\Seeder;

class UserActionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'user_id' => 1, 'action' => 'updated', 'action_model' => 'papers', 'action_id' => 1,],
            ['id' => 2, 'user_id' => 1, 'action' => 'created', 'action_model' => 'judgements', 'action_id' => 1,],
            ['id' => 3, 'user_id' => 1, 'action' => 'created', 'action_model' => 'judgements', 'action_id' => 2,],
            ['id' => 4, 'user_id' => 1, 'action' => 'deleted', 'action_model' => 'judgements', 'action_id' => 2,],
            ['id' => 5, 'user_id' => 1, 'action' => 'created', 'action_model' => 'judgements', 'action_id' => 3,],
            ['id' => 6, 'user_id' => 1, 'action' => 'deleted', 'action_model' => 'judgements', 'action_id' => 3,],
            ['id' => 7, 'user_id' => 1, 'action' => 'permanently deleted', 'action_model' => 'judgements', 'action_id' => 2,],
            ['id' => 8, 'user_id' => 1, 'action' => 'permanently deleted', 'action_model' => 'judgements', 'action_id' => 3,],

        ];

        foreach ($items as $item) {
            \App\UserAction::create($item);
        }
    }
}
