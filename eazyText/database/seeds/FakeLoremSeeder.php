<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FakeLoremSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\EazyText');
        DB::table('texte')->insert([
        	'texte' => implode($faker->paragraphs(50))
        ]);
    }
}
