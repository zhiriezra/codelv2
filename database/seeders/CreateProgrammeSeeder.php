<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Programme;

class CreateProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programmes = [
            [
                'name' =>  'Computer Science',
                'duration' => '5 years',
                'amount' => 122700,
            ],

            [
                'name' =>  'Cyber Security',
                'duration' => '6 years',
                'amount' => 122700,
            ],

            [
                'name' =>  'Entreprenuership',
                'duration' => '2 years',
                'amount' => 80000,
            ],
        ];

        foreach($programmes as $key => $programme){
            Programme::create($programme);
        }
    }
}
