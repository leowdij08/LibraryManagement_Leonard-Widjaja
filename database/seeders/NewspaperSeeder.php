<?php

namespace Database\Seeders;

use App\Models\Newspaper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewspaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Newspaper::create([
            'title' => 'The Daily Insight',
            'author' => 'Emma Richardson',
            'publisher' => 'Insight Media Group',
            'description' => 'A daily newspaper delivering key updates on global politics, business, and culture in a concise format.',
            'price' => 8000,
            'stock' => 200,
            'datePublished' => '2024-01-10',
            'onlineLink' => 'https://example.com/newspaper/daily-insight',
            'catalogue_type' => 'newspaper',
        ]);

        Newspaper::create([
            'title' => 'Green Earth Weekly',
            'author' => 'David Thompson',
            'publisher' => 'EcoMedia Publications',
            'description' => 'A weekly publication dedicated to environmental news, climate change updates, and sustainable living tips.',
            'price' => 10000,
            'stock' => 75,
            'datePublished' => '2023-12-05',
            'onlineLink' => 'https://example.com/newspaper/green-earth-weekly',
            'catalogue_type' => 'newspaper',
        ]);

        Newspaper::create([
            'title' => 'Innovation Times',
            'author' => 'Sophia Lee',
            'publisher' => 'FutureTech Media',
            'description' => 'A technology-focused newspaper providing insights into the latest innovations, emerging startups, and research breakthroughs.',
            'price' => 7000,
            'stock' => 100,
            'datePublished' => '2024-02-15',
            'onlineLink' => 'https://example.com/newspaper/innovation-times',
            'catalogue_type' => 'newspaper',
        ]);

        Newspaper::create([
            'title' => 'Cultural Lens',
            'author' => 'Oliver Bennett',
            'publisher' => 'Cultural Media Co.',
            'description' => 'A bi-weekly newspaper that delves into global cultural trends, arts, and the latest in entertainment.',
            'price' => 5000,
            'stock' => 60,
            'datePublished' => '2023-11-25',
            'onlineLink' => 'https://example.com/newspaper/cultural-lens',
            'catalogue_type' => 'newspaper',
        ]);

        Newspaper::create([
            'title' => 'World of Sports',
            'author' => 'Liam Wilson',
            'publisher' => 'ProSports Media',
            'description' => 'A daily sports newspaper featuring the latest updates from international leagues, player profiles, and match analyses.',
            'price' => 4500,
            'stock' => 150,
            'datePublished' => '2024-01-01',
            'onlineLink' => 'https://example.com/newspaper/world-of-sports',
            'catalogue_type' => 'newspaper',
        ]);
    }
}
