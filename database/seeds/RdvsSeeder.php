<?php
use App\Rdv;
use Illuminate\Database\Seeder;

class RdvsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rdv::class,500)->create();
    }
}
