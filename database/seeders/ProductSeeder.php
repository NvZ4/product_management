<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => '86 -Eighty Six- Vol. 1',
            'description' => 'Kisah para prajurit Eighty-Six yang berjuang di medan perang tanpa nama.',
            'price' => 150000.00,
            'stock' => 75
        ]);

        Product::create([
            'name' => 'Mushoku Tensei: Jobless Reincarnation Vol. 1',
            'description' => 'Seorang NEET bereinkarnasi di dunia sihir dan memulai hidup baru.',
            'price' => 145000.00,
            'stock' => 110
        ]);

        Product::create([
            'name' => 'Overlord, Vol. 1: The Undead King',
            'description' => 'Terjebak dalam game sebagai raja lich yang maha kuasa, Momonga.',
            'price' => 160000.00,
            'stock' => 90
        ]);

        Product::create([
            'name' => 'Classroom of the Elite Vol. 1',
            'description' => 'Persaingan ketat di sekolah menengah elit yang penuh misteri.',
            'price' => 140000.00,
            'stock' => 150
        ]);

        Product::create([
            'name' => 'Rascal Does Not Dream of Bunny Girl Senpai Vol. 1',
            'description' => 'Fenomena aneh "Sindrom Pubertas" yang dialami oleh para remaja.',
            'price' => 135000.00,
            'stock' => 130
        ]);
    }
}
