<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Journal::create([
            'title' => 'Journal of Artificial Intelligence Research',
            'author' => 'Dr. Susan Carter',
            'publisher' => 'AI Research Society',
            'description' => 'A peer-reviewed journal covering advancements, applications, and ethical considerations in artificial intelligence.',
            'price' => 150000,
            'stock' => 10,
            'datePublished' => '2024-02-15',
            'volume' => 12,
            'series' => 3,
            'number' => 1,
            'onlineLink' => 'https://example.com/journal/ai-research',
        ]);

        Journal::create([
            'title' => 'Sustainability and Climate Change Journal',
            'author' => 'Dr. Jonathan Green',
            'publisher' => 'Earth Matters Press',
            'description' => 'A journal focused on global sustainability efforts, climate science, and renewable energy innovations.',
            'price' => 180000,
            'stock' => 12,
            'datePublished' => '2023-11-01',
            'volume' => 22,
            'series' => 5,
            'number' => 3,
            'onlineLink' => 'https://example.com/journal/sustainability-climate',
        ]);

        Journal::create([
            'title' => 'Global Economics and Policy Journal',
            'author' => 'Prof. Mark Taylor',
            'publisher' => 'Economics Press International',
            'description' => 'A journal examining economic policies, global markets, and emerging trends in financial systems.',
            'price' => 200000,
            'stock' => 8,
            'datePublished' => '2024-01-10',
            'volume' => 30,
            'series' => 4,
            'number' => 5,
            'onlineLink' => 'https://example.com/journal/global-economics',
        ]);

        Journal::create([
            'title' => 'Journal of Advanced Robotics',
            'author' => 'Dr. Alice Wang',
            'publisher' => 'TechFuture Publishing',
            'description' => 'An in-depth journal on robotics advancements, automation technologies, and real-world applications.',
            'price' => 160000,
            'stock' => 15,
            'datePublished' => '2024-03-20',
            'volume' => 9,
            'series' => 2,
            'number' => 7,
            'onlineLink' => 'https://example.com/journal/advanced-robotics',
        ]);

        Journal::create([
            'title' => 'Health and Wellness Journal',
            'author' => 'Dr. Clara Bennett',
            'publisher' => 'Wellness Publications',
            'description' => 'A journal promoting new research in health, nutrition, mental well-being, and fitness.',
            'price' => 140000,
            'stock' => 18,
            'datePublished' => '2023-12-05',
            'volume' => 7,
            'series' => 1,
            'number' => 8,
            'onlineLink' => 'https://example.com/journal/health-wellness',
        ]);
    }
}
