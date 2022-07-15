<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        $categories =  [
              [
                'name' => 'Automotive Vehicles',
                    'children' => [
                        ['Auto Parts & Accessories'],
                        ['Caravans & Trailers'],
                        ['Cars & Bakkies'],
                        ['Classic & Vintage Cars'],
                        ['Farm Vehicles & Equipment'],
                        ['Medium & Heavy Commercials'],
                        ['Motorcycle Parts & Accessories'],
                        ['Motorcycles & Scooters'],
                    ],
              ],
              [
                'name' => 'Community',
                    'children' => [
                        ['Activities & Hobbies'],
                        ['Carpool & Rideshare'],
                        ['Classes & Adult Education'],
                        ['Language Courses & Training'],
                        ['Lost & Found'],
                        ['Missed Connections'],
                        ['Musicians & Artists'],
                        ['Other'],
                        ['Sports & Sports Partners'],
                        ['Travel Partners & Companions'],
                    ],
              ],
              [
                'name' => 'Home & Garden',
                    'children' => [
                        ['Antiques & Collectables'],
                        ['Antiques & Collectables'],
                        ['Antiques & Collectables'],
                        ['Antiques & Collectables'],
                        ['Antiques & Collectables'],
                        ['Antiques & Collectables'],
                        ['Antiques & Collectables'],
                        ['Antiques & Collectables'],
                        ['Antiques & Collectables'],        
                    ],
              ],
              [
                'name' => 'Sports & Leisure',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Services',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Electronics',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Events',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Baby & Kids',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Jobs',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Boats & Watercraft',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Fashion',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Freebies',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Business To Business',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Property',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Pets',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Charity',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Job Seekers',
                    'children' => [
                        [],
                       
                    ],
              ],
              [
                'name' => 'Swap & Trade',
                    'children' => [
                        [],
                       
                    ],
              ],
            ];
        foreach($categories as $category)
        {
            \App\Models\Category::create($category);
        }
    }
}
