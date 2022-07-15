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
                        ['name' => 'Auto Parts & Accessories'],
                        ['name' => 'Caravans & Trailers'],
                        ['name' => 'Cars & Bakkies'],
                        ['name' => 'Classic & Vintage Cars'],
                        ['name' => 'Farm Vehicles & Equipment'],
                        ['name' => 'Medium & Heavy Commercials'],
                        ['name' => 'Motorcycle Parts & Accessories'],
                        ['name' => 'Motorcycles & Scooters'],
                    ],
              ],
              [
                'name' => 'Community',
                    'children' => [
                        ['name' => 'Activities & Hobbies'],
                        ['name' => 'Carpool & Rideshare'],
                        ['name' => 'Classes & Adult Education'],
                        ['name' => 'Language Courses & Training'],
                        ['name' => 'Lost & Found'],
                        ['name' => 'Missed Connections'],
                        ['name' => 'Musicians & Artists'],
                        ['name' => 'Other'],
                        ['name' => 'Sports & Sports Partners'],
                        ['name' => 'Travel Partners & Companions'],
                    ],
              ],
              [
                'name' => 'Home & Garden',
                    'children' => [
                        ['name' => 'Antiques & Collectables'],
                        ['name' => 'Generators & Solar Power'],
                        ['name' => 'Lighting & Lamps'],
                        ['name' => 'Home Improvement'],
                        ['name' => 'Antiques & Collectables'],
                        ['name' => 'Furniture'],
                        ['name' => 'Garden & Braai'],
                        ['name' => 'Home Decor'],
                        ['name' => 'Home Appliances'],   
                        ['name' => 'Hand Tools & Power Tools'],    
                        ['name' => 'Other'],    
                    ],
              ],
              [
                'name' => 'Sports & Leisure',
                    'children' => [
                        ['name' => 'Camping Gear'],
                        ['name' => 'Bicycle and Cycling'],
                        ['name' => 'Sports and Fitness Gear'],
                        ['name' => 'Books & Games'],
                        ['name' => 'Musical Instrument'],
                        ['name' => 'CD & DVD'],
                        ['name' => 'Tickets'],
                        ['name' => 'Other'],
                       
                    ],
              ],
              [
                'name' => 'Services',
                    'children' => [
                        ['name' => 'Appliances Services'],
                        ['name' => 'Automotive Services'],
                        ['name' => 'Building & Trades'],
                        ['name' => 'Chauffeur & Airport Transfer'],
                        ['name' => 'Child Care'],
                        ['name' => 'Cleaning Services'],
                        ['name' => 'Courses & Training'],
                        ['name' => 'DJ & MCs'],
                        ['name' => 'DSTV'],
                        ['name' => 'I.T Services'],
                        ['name' => 'Electronics'],
                        ['name' => 'Events'],
                        ['name' => 'Health and Beauty'],
                        ['name' => 'Gardening and Landscape'],
                        ['name' => 'Legal Services'],
                        ['name' => 'Manufacturing Services'],
                        ['name' => 'Catering Services'],
                        ['name' => 'Pet Services'],
                        ['name' => 'Film & Photography'],
                        ['name' => 'Real Estate'],
                        ['name' => 'Removals'],
                        ['name' => 'Sports & Fitness'],
                        ['name' => 'Tax & Financial Services'],
                        ['name' => 'Travel & Tourism'],
                        ['name' => 'Other'],
                    ],
              ],
              [
                'name' => 'Electronics',
                    'children' => [
                        ['name' => 'Wearable Technology'],
                        ['name' => 'Drones & Gadgets'],
                        ['name' => 'Solar & Equipment'],
                        ['name' => 'Printers & Accessories'],
                        ['name' => 'Cellphone & Accessories'],
                        ['name' => 'Computers & Laptops'],
                        ['name' => 'TVs, LCD & Projectors'],
                        ['name' => 'Sound System'],
                        ['name' => 'Other'],
                       
                    ],
              ],
              [
                'name' => 'Events',
                    'children' => [
                        ['name' => 'Events, Gigs & Nightlife'],
                        ['name' => 'Flea Market & Jumble Sale'],
                        ['name' => 'Other'],
                       
                    ],
              ],
              [
                'name' => 'Baby & Kids',
                    'children' => [
                        ['name' => 'Baby & Kids Clothing'],
                        ['name' => 'Kids Furniture & Nursery'],
                        ['name' => 'Car Seats & Travel'],
                        ['name' => 'Prams & Strollers'],
                        ['name' => 'Baby Proofing & Home Safety'],
                        ['name' => 'Maternity & Pregnancy'],
                        ['name' => 'Nursery'],
                        ['name' => 'Baby & Kids Toys'],
                        ['name' => 'Baby Activtiy Centres & Walkers'],
                        ['name' => 'Feeding & Accessories'],
                        ['name' => 'Baby Baths & Potties'],
                        ['name' => 'Other'],
                       
                    ],
              ],
              [
                'name' => 'Jobs',
                    'children' => [
                        ['name' => 'Accounting & Finance Jobs'],
                        ['name' => 'Advertising & Marketing Jobs'],
                        ['name' => 'Arts & Entertainment Jobs'],
                        ['name' => 'Au Pair & Babysitting Jobs'],
                        ['name' => 'Admin Jobs'],
                        ['name' => 'IT & Tech Jobs'],
                        ['name' => 'Construction & Trade Jobs'],
                        ['name' => 'Customer Service Jobs'],
                        ['name' => 'Engineering & Architecture Jobs'],
                        ['name' => 'Agriculture & Farm Jobs'],
                        ['name' => 'Gardening & Landscaping Jobs'],
                        ['name' => 'Beauty Jobs'],
                        ['name' => 'Healthcare & Nursing Jobs'],
                        ['name' => 'Housingkeeping & Cleaning Jobs'],
                        ['name' => 'HR Jobs'],
                        ['name' => 'Internship Jobs'],
                        ['name' => 'Legal Jobs'],
                        ['name' => 'Driving & Logistics Jobs'],
                        ['name' => 'Manufacturing Jobs'],
                        ['name' => 'Part-time & Weekend Jobs'],
                        ['name' => 'Retail Jobs'],
                        ['name' => 'Sales Jobs'],
                        ['name' => 'Security Jobs'],
                        ['name' => 'Sports & Coaching Jobs'],
                        ['name' => 'Tutors & Teaching Jobs'],
                        ['name' => 'Tourism Jobs'],
                        ['name' => 'General Worker Jobs'],
                        ['name' => 'Clerical & Data Capturing Jobs'],
                        ['name' => 'Hospitality Jobs'],
                        ['name' => 'FMCG Jobs'],
                        ['name' => 'Government & NGO Jobs'],
                       
                    ],
              ],
              [
                'name' => 'Boats & Watercraft',
                    'children' => [
                        ['name' => 'Boats & Jet Skis'],
                        ['name' => 'Yachts & Sailboats'],
                        ['name' => 'Kayaks & Paddle Boats'],
                        ['name' => 'Boat Parts & Accessories'],
                        ['name' => 'Other Watercraft'],
                       
                    ],
              ],
              [
                'name' => 'Fashion',
                    'children' => [
                        ['name' => 'Clothing'],
                        ['name' => 'Shoes'],
                        ['name' => 'Accessories'],
                        ['name' => 'Wedding Wear'],
                        ['name' => 'Jewellery & Watches'],
                        ['name' => 'Other'],
                    ],
              ],
              [
                'name' => 'Business To Business',
                    'children' => [
                        ['name' => 'Business For Sale'],
                        ['name' => 'Office Equipment & Furniture'],
                        ['name' => 'Store & Catering Equipment'],
                        ['name' => 'Industrial Machinery'],
                        ['name' => 'Other'],
                    ],
              ],
              [
                'name' => 'Property',
                    'children' => [
                        ['name' => 'Roommate & Accommodation Wanted'],
                        ['name' => 'Rooms for Rent'],
                        ['name' => 'Houses for Rent'],
                        ['name' => 'Flats for Rent'],
                        ['name' => 'Houses & Flats For Sale'],
                        ['name' => 'Holiday Homes'],
                        ['name' => 'Land & Plots For Sale'],
                        ['name' => 'Car Parks & Storage'],
                        ['name' => 'Commercial Properties for Rent'],
                        ['name' => 'Commercial Properties for Sale'],
                        ['name' => 'Short Term'],
                        ['name' => 'Other Property'],
                    ],
              ],
              [
                'name' => 'Pets',
                    'children' => [
                        ['name' => 'Birds'],
                        ['name' => 'Dogs & Puppies'],
                        ['name' => 'Cats & Kittens'],
                        ['name' => 'Horses & Ponies'],
                        ['name' => 'Fish'],
                        ['name' => 'Livestock & Poultry'],
                        ['name' => 'Reptiles'],
                        ['name' => 'Pet Accessories'],
                        ['name' => 'Other Pets'],
                       
                    ],
              ],
              [
                'name' => 'Charity',
                    'children' => [
                        ['name' => 'Charity'],
                       
                    ],
              ],
              [
                'name' => 'Job Seekers',
                    'children' => [
                        ['name' => 'Accounting & Finance CVs'],
                        ['name' => 'Advertising & Marketing CVs'],
                        ['name' => 'Arts & Entertainment CVs'],
                        ['name' => 'Au Pair & Babysitting CVs'],
                        ['name' => 'Admin CVs'],
                        ['name' => 'IT & Tech CVs'],
                        ['name' => 'Construction & Trade CVs'],
                        ['name' => 'Customer Service CVs'],
                        ['name' => 'Engineering & Architecture CVs'],
                        ['name' => 'Agriculture & Farm CVs'],
                        ['name' => 'Gardening & Landscaping CVs'],
                        ['name' => 'Beauty CVs'],
                        ['name' => 'Healthcare & Nursing CVs'],
                        ['name' => 'Housingkeeping & Cleaning CVs'],
                        ['name' => 'HR CVs'],
                        ['name' => 'Internship CVs'],
                        ['name' => 'Legal CVs'],
                        ['name' => 'Driving & Logistics CVs'],
                        ['name' => 'Manufacturing CVs'],
                        ['name' => 'Part-time & Weekend CVs'],
                        ['name' => 'Retail CVs'],
                        ['name' => 'Sales CVs'],
                        ['name' => 'Security CVs'],
                        ['name' => 'Sports & Coaching CVs'],
                        ['name' => 'Tutors & Teaching CVs'],
                        ['name' => 'Tourism CVs'],
                        ['name' => 'General Worker CVs'],
                        ['name' => 'Clerical & Data Capturing CVs'],
                        ['name' => 'Hospitality CVs'],
                        ['name' => 'FMCG CVs'],
                        ['name' => 'Government & NGO CVs'],
                       
                    ],
              ],
              
            ];
        foreach($categories as $category)
        {
            \App\Models\Category::create($category);
        }
    }
}
