<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'FrontEnd',
            'BackEnd',
            'FullStack',
            'Design'
        ];

        foreach ($types as $elem) {
            $newType = new Type();
            $newType->tipologia = $elem;
            $newType->save();
        }
    }
}
