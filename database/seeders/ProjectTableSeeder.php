<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

use App\Models\Type;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //soluzione 1 a molti
        Project :: factory() ->count(30) -> make() 

            ->each(function($project){

                $type = Type :: inRandomOrder() -> first();

                //La funzione type() si trova all'interno del model project
                $project -> type() -> associate($type);

                $project -> save();
        });

    }
}
