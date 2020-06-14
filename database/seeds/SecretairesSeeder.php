<?php
use App\Secretaire;
use Illuminate\Database\Seeder;

class SecretairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Secretaire::class,100)->create();
    }
}
