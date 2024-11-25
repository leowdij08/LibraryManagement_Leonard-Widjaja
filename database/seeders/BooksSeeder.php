<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Books::create([
            'title' => 'Sapiens: A Brief History of Humankind',
            'author' => 'Yuval Noah Harari',
            'publisher' => 'Harper',
            'description' => 'An exploration of humanity\'s creation and evolution, spanning the cognitive revolution to modern technological advancements.',
            'datePublished' => '2014-09-04',
            'genre' => 'history',
            'price' => 180000,
            'stock' => 10,
            'onlineLink' => 'https://www.amazon.com/Sapiens-Brief-History-Humankind/dp/0062316095'
        ]);

        Books::create([
            'title' => 'Atomic Habits',
            'author' => 'James Clear',
            'publisher' => 'Avery',
            'description' => 'A comprehensive guide on how small changes in habits can lead to remarkable results in personal and professional life.',
            'datePublished' => '2018-10-16',
            'genre' => 'self-help',
            'price' => 150000,
            'stock' => 12,
            'onlineLink' => 'https://www.amazon.com/Atomic-Habits-Proven-Build-Break/dp/0735211299'
        ]);

        Books::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'publisher' => 'Scribner',
            'description' => 'A classic novel of the Jazz Age, capturing the decadence and excess of 1920s America through the eyes of Nick Carraway.',
            'datePublished' => '1925-04-10',
            'genre' => 'fiction',
            'price' => 100000,
            'stock' => 8,
            'onlineLink' => 'https://www.amazon.com/Great-Gatsby-F-Scott-Fitzgerald/dp/0743273567'
        ]);

        Books::create([
            'title' => 'Educated',
            'author' => 'Tara Westover',
            'publisher' => 'Random House',
            'description' => 'A memoir about a young woman who, kept out of school, leaves her survivalist family and goes on to earn a PhD from Cambridge University.',
            'datePublished' => '2018-02-20',
            'genre' => 'memoir',
            'price' => 170000,
            'stock' => 6,
            'onlineLink' => 'https://www.amazon.com/Educated-Memoir-Tara-Westover/dp/0399590501'
        ]);

        Books::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'publisher' => 'Secker & Warburg',
            'description' => 'A dystopian social science fiction novel that explores themes of government surveillance and totalitarianism.',
            'datePublished' => '1949-06-08',
            'genre' => 'fiction',
            'price' => 120000,
            'stock' => 15,
            'onlineLink' => 'https://www.amazon.com/1984-Signet-Classics-George-Orwell/dp/0451524934'
        ]);
    }
}
