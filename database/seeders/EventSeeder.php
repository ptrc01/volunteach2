<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events =[
            [
                'name' => 'Community Art Workshop',
                'location' => 'Art Studio, Los Angeles',
                'date' => '2025-01-15',
                'time' => '14:00:00',
                'description' => 'A creative workshop to inspire young artists through hands-on activities. Volunteers will help guide participants in painting and crafting.',
                'image' => 'images/events/mengajar1.jpg',
                'terms_and_conditions' => 'All participants must wear aprons and follow safety instructions.',
                'additional_info' => 'Art materials will be provided; bring your own water bottle.',
            ],
            [
                'name' => 'Introduction to Creative Writing',
                'location' => 'Library Hall, Los Angeles',
                'date' => '2025-01-15',
                'time' => '14:00:00',
                'description' => 'A volunteer workshop to guide teenagers in exploring creative writing techniques. Suitable for those passionate about writing and storytelling.',
                'image' => 'images/events/mengajar2.jpeg',
                'terms_and_conditions' => 'Participants must register in advance and bring their own notebooks.',
                'additional_info' => 'Free coffee and refreshments will be available.',
            ],
            [
                'name' => 'Teaching Basics of Coding',
                'location' => 'Community Center, New York',
                'date' => '2024-12-20',
                'time' => '10:00:00',
                'description' => 'A volunteer event to teach the basics of coding to school kids. Suitable for volunteers with a basic knowledge of programming.',
                'image'=>'images/events/mengajar3.jpeg',
                'terms_and_conditions' => 'Participants must arrive on time and follow event guidelines.',
                'additional_info' => 'Snacks and materials will be provided.',
            ],
            [
                'name' => 'English Literacy Workshop',
                'location' => 'Library Hall, Los Angeles',
                'date' => '2024-12-22',
                'time' => '14:00:00',
                'description' => 'This workshop aims to improve English literacy among underprivileged children. Volunteers with excellent English communication skills are welcome.',
                'image'=>'images/events/mengajar4.jpeg',
                'terms_and_conditions' => 'Participants must arrive on time and follow event guidelines.',
                'additional_info' => 'Snacks and materials will be provided.',
            ],
            [
                'name' => 'Mathematics Skill Development',
                'location' => 'City School Auditorium, Chicago',
                'date' => '2024-12-25',
                'time' => '09:00:00',
                'description' => 'A math-focused workshop for middle-school students. Volunteers with strong mathematical skills are encouraged to join.',
                'image'=>'images/events/mengajar5.jpeg',
                'terms_and_conditions' => 'Participants must arrive on time and follow event guidelines.',
                'additional_info' => 'Snacks and materials will be provided.',
            ],
        ];
        DB::table('events')->insert($events);
    }
}
