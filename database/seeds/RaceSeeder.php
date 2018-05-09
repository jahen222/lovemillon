<?php

use Illuminate\Support\Facades\DB;
use App\Dog;
use Faker\Factory;

class RaceSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $statement = "INSERT INTO ".env('DB_PREFIX')."races (id, name) VALUES
          (1, 'Airedale Terrier'),
          (2, 'Akita Americano'),
          (3, 'Akita Inu'),
          (4, 'Alano Español'),
          (5, 'Alaskan Klee Kai'),
          (6, 'Alaskan Malamute'),
          (7, 'American Bully'),
          (8, 'American Pit Bull Terrier'),
          (9, 'American Staffordshire Terrier'),
          (10, 'Azawakh'),
          (11, 'Basenji'),
          (12, 'Basset Hound'),
          (13, 'Beagle'),
          (14, 'Bichon Frise'),
          (15, 'Bichon Maltes'),
          (16, 'Boerboel'),
          (17, 'Border Collie'),
          (18, 'Boston Terrier'),
          (19, 'Bóxer'),
          (20, 'Boyero de Berna'),
          (21, 'Bull Terrier'),
          (22, 'Bulldog Frances'),
          (23, 'Bulldog Inglés'),
          (24, 'Bullmastiff'),
          (25, 'Bully Americano'),
          (26, 'Cairn Terrier'),
          (27, 'Cane Corso'),
          (28, 'Carlino'),
          (29, 'Chihuahua'),
          (30, 'Chin Japones'),
          (31, 'Chow Chow'),
          (32, 'Cocker Spaniel Americano'),
          (33, 'Coton de Tulear'),
          (34, 'Dachshund'),
          (35, 'Dálmata'),
          (36, 'Doberman'),
          (37, 'Dogo Argentino'),
          (38, 'Dogo de Burdeos'),
          (39, 'Dogo del Tíbet'),
          (40, 'Fila Brasilero'),
          (41, 'Galgo Español'),
          (42, 'Galgo Italiano'),
          (43, 'Golden Retriever'),
          (44, 'Gran Danés'),
          (45, 'Greyhound'),
          (46, 'Husky Siberiano'),
          (47, 'Jack Russell Terrier'),
          (48, 'Keeshond'),
          (49, 'Komondor'),
          (50, 'Kuvasz'),
          (51, 'Labrador Retriever'),
          (52, 'Leonberger'),
          (53, 'Lhasa Apso'),
          (54, 'Mastiff'),
          (55, 'Mastín del Pirineo'),
          (56, 'Mastín Español'),
          (57, 'Mastin Napolitano'),
          (58, 'Pastor Alemán'),
          (59, 'Pastor Australiano'),
          (60, 'Pekinés'),
          (61, 'Perdiguero de Burgos'),
          (62, 'Perro de Agua Español'),
          (63, 'Perro de Agua Portugues'),
          (64, 'Perro de Montaña de los Pirineos'),
          (65, 'Perro de San Huberto'),
          (66, 'Perro Esquimal Americano'),
          (67, 'Perro Lobo Checoslovaco'),
          (68, 'Pointer Inglés'),
          (69, 'Pomerania'),
          (70, 'Presa Canario'),
          (71, 'Presa Mallorquin'),
          (72, 'Puli'),
          (73, 'Ratonero Bodeguero Andaluz'),
          (74, 'Rhodesian Ridgeback'),
          (75, 'Rottweiler'),
          (76, 'Saluki'),
          (77, 'Samoyedo'),
          (78, 'San Bernardo'),
          (79, 'Setter Inglés'),
          (80, 'Setter Irlandés Rojo'),
          (81, 'Shar Pei'),
          (82, 'Shiba Inu'),
          (83, 'Shih Tzu'),
          (84, 'Staffordshire Bull Terrier'),
          (85, 'Tamaskan'),
          (86, 'Terranova'),
          (87, 'Terrier Galés'),
          (88, 'Tosa Inu'),
          (89, 'Weimaraner'),
          (90, 'Xoloitzcuintle'),
          (91, 'Yorkshire Terrier'),
          (92, 'Otra');";
      DB::unprepared($statement);

      //$faker = Factory::create();
      //for($i=0; $i<2000; $i++){
          $dog = Dog::create([
            'name' => 'Cori',
            'image' => '1524194371.jpeg',
            'race_id' => 43,
            'bio' => 'hermosa, hermosa, muy hermosa y perfecta',
            'gender' => 'Hembra',
            'age' => 9,
            'dead' => false,
            'country_id' => 237,
            'owner_name' => 'Betzabeth Álvarez',
            'owner_email' => 'betzabeth.alvarez@unet.edu.ve'
          ]);

          $dog = Dog::create([
            'name' => 'Rocky',
            'image' => '1524194372.jpeg',
            'race_id' => 29,
            'bio' => 'Jugueton y molestoso, cazador de cucharachas, ya no corro como antes pero todavia le ladro a cualquiera que no sea de la familia. jejeje',
            'gender' => 'Macho',
            'age' => 13,
            'dead' => false,
            'country_id' => 237,
            'owner_name' => 'Merly Jaimes',
            'owner_email' => 'merlyjaimes94@gmail.com'
          ]);

          $dog = Dog::create([
            'name' => 'Draco',
            'image' => '1.jpg',
            'race_id' => 38,
            'bio' => 'Soy grande pero no dejo de ser el bebé de mamá mis hobbies son comer, dormir, despertar a todos con mis ronquidos Y apapachar a mi familia humana. También me gustan comer hojas :) pero no le digan a mi mamá.',
            'gender' => 'Macho',
            'age' => 4,
            'dead' => false,
            'country_id' => 26,
            'owner_name' => 'Macarena Plaza',
            'owner_email' => 'maquis_fa13_1@hotmail.com'
          ]);

          $dog = Dog::create([
            'name' => 'Olivia',
            'image' => '2.jpg',
            'race_id' => 23,
            'bio' => 'Dulce, tierna, cariñosa y obsesionada con dar besos, en ese cuerpito super rechonchon y gordo se siente la protectora de la casa XD  es una bola de amor.',
            'gender' => 'Hembra',
            'age' => 1,
            'dead' => false,
            'country_id' => 26,
            'owner_name' => 'Macarena Plaza',
            'owner_email' => 'maquis_fa13_1@hotmail.com'
          ]);

          $dog = Dog::create([
            'name' => 'Bruna',
            'image' => '3.jpg',
            'race_id' => 23,
            'bio' => 'Tengo 8 meses y acabo de convertirme en señorita. Tengo 3 hermanos con los que juego toda la noche (duermo todo el dia) me encanta correr de un lado al otro y morder los cachetes de mi hermana Olivia cuando mi mamá no está mirando.',
            'gender' => 'Hembra',
            'age' => 0,
            'dead' => false,
            'country_id' => 26,
            'owner_name' => 'Macarena Plaza',
            'owner_email' => 'maquis_fa13_1@hotmail.com'
          ]);

          $dog = Dog::create([
            'name' => 'Rodolfo',
            'image' => '4.jpg',
            'race_id' => 23,
            'bio' => 'Soy un poco aburrido y mi actividad preferida es pasarme horas mordiendo lo q pueda, zapatos, paredes, recipientes, muebles, etc. Tengo 3 Hermanas  que me vuelven loco! No es fácil ser el hombre de la casa XD y aún no levantó la pata para orinar.',
            'gender' => 'Macho',
            'age' => 1,
            'dead' => false,
            'country_id' => 26,
            'owner_name' => 'Macarena Plaza',
            'owner_email' => 'maquis_fa13_1@hotmail.com'
          ]);

          $dog = Dog::create([
            'name' => 'Sofia',
            'image' => '5.jpg',
            'race_id' => 23,
            'bio' => 'Tengo 9 meses soy hiperactiva, cariñosa y un poco loca. me encanta jugar con mis hermanos y también salir a pasear al parque  con mis papás humanos, para hacer nuevos amigos perrunos aunque mi hiperactividad los espanta.. soy muy emocional y juguetona.',
            'gender' => 'Hembra',
            'age' => 0,
            'dead' => false,
            'country_id' => 26,
            'owner_name' => 'Sebastian',
            'owner_email' => 'hucor_666@hotmail.com'
          ]);

          $dog = Dog::create([
            'name' => 'Pulga',
            'image' => '6.jpg',
            'race_id' => 92,
            'bio' => 'hermosa, hermosa, muy hermosa y perfecta',
            'gender' => 'Hembra',
            'age' => 4,
            'dead' => false,
            'country_id' => 237,
            'owner_name' => 'Chelo Garcia',
            'owner_email' => 'henryjaimes.peli@gmail.com'
          ]);
        //}
    }
}
