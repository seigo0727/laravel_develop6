<?php

use App\Models\Admin;
use App\Models\AdminGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new \DateTime();
        $adminGroup = AdminGroup::first();
        $model = new Admin();
        $model->name = 'admin';
        $model->adminGroup()->associate($adminGroup);
        $model->display_name = 'マスター';
        $model->email = 'admin@example.com';
        $model->password = Hash::make('secret');
        $model->created_at = $now;
        $model->updated_at = $now;
        $model->save();
    }
}
