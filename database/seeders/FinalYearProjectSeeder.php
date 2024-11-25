<?php

namespace Database\Seeders;

use App\Models\FinalYearProject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinalYearProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FinalYearProject::create([
            'title' => 'Development of a Smart Irrigation System Using IoT',
            'author' => 'Emily Carter',
            'publisher' => 'GreenTech University',
            'description' => 'A project focused on designing an IoT-based smart irrigation system to optimize water usage in agriculture. The system utilizes real-time sensors and cloud-based analytics.',
            'stock' => 6,
            'datePublished' => '2024-01-15',
            'onlineLink' => 'https://example.com/project/smart-irrigation-iot',
            'catalogue_type' => 'final year project',
        ]);

        FinalYearProject::create([
            'title' => 'Mobile App for Mental Health Monitoring and Support',
            'author' => 'Michael Johnson',
            'publisher' => 'HealthTech University',
            'description' => 'A mobile application designed to provide mental health support through mood tracking, meditation exercises, and AI-driven suggestions for users.',
            'stock' => 5,
            'datePublished' => '2023-08-25',
            'onlineLink' => 'https://example.com/project/mental-health-app',
            'catalogue_type' => 'final year project',
        ]);

        FinalYearProject::create([
            'title' => 'Autonomous Drone Delivery System',
            'author' => 'Sophia Williams',
            'publisher' => 'TechInnovators University',
            'description' => 'This project involves the design and implementation of an autonomous drone system for delivering packages, integrating GPS, obstacle avoidance, and delivery tracking.',
            'stock' => 3,
            'datePublished' => '2023-12-10',
            'onlineLink' => 'https://example.com/project/autonomous-drone-delivery',
            'catalogue_type' => 'final year project',
        ]);

        FinalYearProject::create([
            'title' => 'Renewable Energy Management System',
            'author' => 'Daniel Brown',
            'publisher' => 'Sustainable Energy Institute',
            'description' => 'A system designed to manage and optimize renewable energy sources like solar and wind, using predictive analytics and energy storage solutions.',
            'stock' => 4,
            'datePublished' => '2023-11-05',
            'onlineLink' => 'https://example.com/project/renewable-energy-management',
            'catalogue_type' => 'final year project',
        ]);

        FinalYearProject::create([
            'title' => 'Virtual Reality for Education: Immersive Learning Environments',
            'author' => 'Olivia Martinez',
            'publisher' => 'FutureEd University',
            'description' => 'This project explores the use of virtual reality technology to create immersive learning environments, enhancing student engagement and knowledge retention.',
            'stock' => 7,
            'datePublished' => '2024-02-10',
            'onlineLink' => 'https://example.com/project/vr-education',
            'catalogue_type' => 'final year project',
        ]);
    }
}
