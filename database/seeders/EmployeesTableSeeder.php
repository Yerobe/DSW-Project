<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create(['nif' => '78821497Z','name' => 'Yerobe', 'surname' => 'Marrero Moreno', 'email' => "jmamor2016@gmail.com", 'email_verified_at' => '2000-01-24 00:00:00', 'password' => '12345', 'remember_token' => '1234567890']);
    }
}
