<?php

use App\Models\AdminGroup;
use Illuminate\Database\Seeder;

class AdminGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new \DateTime();
        $model = new AdminGroup();
        $model->name = 'master_admin';
        $model->display_name = 'マスター管理者';
        $model->level = 1000;
        $model->created_at = $now;
        $model->updated_at = $now;
        $model->save();
    }
}
