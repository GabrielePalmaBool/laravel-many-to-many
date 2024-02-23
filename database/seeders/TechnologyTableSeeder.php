<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;

use App\Models\Project;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology :: factory() ->count(10) -> create() ->each(function ($technology)
        {
                //vado a pescare dalla tabella projects tre progetti casuali
                $project = Project:: inRandomOrder() -> limit(3) ->get(); 

                //La funzione projects() si trova all'interno del model technology
                $technology -> projects() ->attach($project);

                $technology -> save();

        });
    }
}
