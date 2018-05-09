<?php

use Illuminate\Database\Seeder;
use App\Dog;
use Faker\Factory;

class DogSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();
      for($i=0; $i<50; $i++){

        $dog = Dog::create([
          'name' => $faker->name,
          'image' => '/home/jahen/Proyectos/doggymillion/public/imagenes/6EiSvYRnWxjQj9E4ZZY08cqkKBMAWuPkotsT12Li.jpeg'
          'race_id' => rand(1,10),
          'bio' => $faker->text,
          'gender' => 'Macho',
          'age' => rand(1,10),
          'dead' => false,
          'country_id' => rand(1,10),
          'owner_name' => $faker->name,
          'owner_email' => $faker->email
        ]);
      }
    }
}
