<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PostSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $faker = \Faker\Factory::create("id-ID");

            $data = [
                'title' => ucwords($faker->words(round(rand(7, 10)), true)),
                'body'    => "<p class='text-indent-30 text-justify'>" . join("</p><p class='text-indent-30 text-justify'>", $faker->paragraphs()) . "</p>",
                'excerpt' => $faker->sentence(45),
                'thumbnail' => $faker->imageUrl(),
                'images' => '{
                    "0":"' . $faker->imageUrl() . '",
                    "1":"' . $faker->imageUrl() . '",
                    "2":"' . $faker->imageUrl() . '",
                    "3":"' . $faker->imageUrl() . '",
                    "4":"' . $faker->imageUrl() . '",
                    "5":"' . $faker->imageUrl() . '"
                }',
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
            ];

            $this->db->table('posts')->insert($data);
        }
    }
}
