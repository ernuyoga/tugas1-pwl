<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'name' => 'Angga Yunanda',
            'address' => 'Jl. Bunga Mawar No.46, Jakarta Selatan',
            'position' => 'Software Engineer',
            'birth_date' => '1990-01-18',
            'email' => 'anggayunanda@gmail.com',
            'phone' => '0812-3456-7890',
            'company_id' => 1,
        ]);

        Employee::create([
            'name' => 'Shenina Cinnamon',
            'address' => 'Jl. Bunga Mawar No.46, Jakarta Selatan',
            'position' => 'UI/UX Designer',
            'birth_date' => '1992-03-05',
            'email' => 'sheninacinnamon@gmail.com',
            'phone' => '0812-3456-7890',
            'company_id' => 1,
        ]);

        Employee::create([
            'name' => 'Sergio Marquina',
            'address' => 'Jl. Singaraja No.7, Jakarta Utara',
            'position' => 'Project Manager',
            'birth_date' => '1985-05-15',
            'email' => 'sergiomarquina@gmail.com',
            'phone' => '0812-3456-7890',
            'company_id' => 2,
        ]);
    }
}