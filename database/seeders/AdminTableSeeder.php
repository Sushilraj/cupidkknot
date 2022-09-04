<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $adminRecord = [
            ['id'=>1, 'name'=>'Super Admin','email'=>'admin@gmail.com','password'=>""],
        ];
        Admin::insert($adminRecord);
    }
}
