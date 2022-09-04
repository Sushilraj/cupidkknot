<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $userRecords = [
            ['id'=>1,'name'=>'Sushil Kumar Raj','email'=>'sushil@gmail.in','password'=>'12345','dob'=>'2022-08-31','gender'=>'Male','anual_incom'=>'110000','occupation'=>'Private Job','family_type'=>'Nuclear Job','manglik'=>'No'],
            ['id'=>2,'name'=>'Sushil Kumar Raj','email'=>'sushil1@gmail.in','password'=>'12345','dob'=>'2022-08-31','gender'=>'Male','anual_incom'=>'110000','occupation'=>'Private Job','family_type'=>'Nuclear Job','manglik'=>'No'],
            ['id'=>3,'name'=>'Neha Kumari','email'=>'neha@gmail.in','password'=>'12345','dob'=>'2022-08-31','gender'=>'Female',' anual_incom'=>'110000','occupation'=>'Private Job','family_type'=>'Nuclear Job','manglik'=>'No'],
        ];
        User::insert($userRecords);
    }
}
