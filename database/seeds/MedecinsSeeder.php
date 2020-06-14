<?php
use App\Medecin;
use Illuminate\Database\Seeder;

class MedecinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Medecin::class,100)->create();
    }
}
