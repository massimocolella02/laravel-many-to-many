<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tech = [
            'Php',
            'Laravel',
            'Vue JS',
            'JS Vanilla',
            'Bootstrap',
            'Html',
            'Css',
            'Scss'
        ];

        foreach ($tech as $elem) {
            $newTech = new Technology();
            $newTech->name_tech = $elem;
            $newTech->save();
        }
    }
}
