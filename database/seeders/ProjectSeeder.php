<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'name' => 'Boolflix',
                'description' => 'Descrizione progetto Boolflix',
            ],
            [
                'name' => 'Whatsapp Web',
                'description' => 'Descrizione progetto whatsapp web',
            ],
            [
                'name' => 'Dc Comics',
                'description' => 'Descrizione progetto Dc Comics',
            ],
        ];

        foreach ($projects as $elem) {
            $newProject = new Project();
            $newProject->name = $elem['name'];
            $newProject->description = $elem['description'];
            $newProject->save();
        }
    }
}
