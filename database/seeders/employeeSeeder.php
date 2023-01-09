<?php

namespace Database\Seeders;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use DB;
class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([

            [
                'name' => 'ramji',
                'email' => 'ramji@domain.com',
                'exp' => '2',
                
            ],
            [
                'name' => 'murali',
                'email' => 'murali@domain.com',
                'exp' => '7',
                
            ],   
            [
                'name' => 'kumar',
                'email' => 'kumar@domain.com',
                'exp' => '9',
                
            ]
        ]);
    }
}
