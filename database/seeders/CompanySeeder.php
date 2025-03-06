<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'company_name' => 'PT Pertamina',
            'address' => 'Jl. Medan Merdeka Timur No.1A, Gambir, Jakarta Pusat',
            'industry' => 'Oil & Gas',
            'email' => 'pertamina@gmail.com',
            'phone' => '0812-3456-7890',
            'website' => 'www.pertamina.com',
        ]);

        Company::create([
            'company_name' => 'PT Indihome',
            'address' => 'Jl. Kebon Sirih No.12, Menteng, Jakarta Pusat',
            'industry' => 'Telecommunication',
            'email' => 'indihome@gmail.com',
            'phone' => '0812-3456-7890',
            'website' => 'www.indihome.com',
        ]);
    }
}