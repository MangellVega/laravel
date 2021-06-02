<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Curso();
        $blog->name ="Laravel";
        $blog->description ="Laravel1";        
        $blog->categoria ="Desarrollo web";

        $blog->save();       
    }
}