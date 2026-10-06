<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $produkLokal = [
            'Biji Kopi Arabika Gayo 250gr', 'Mesin Espresso Rumahan', 'V60 Coffee Dripper Hario',
            'Timbangan Kopi Digital Timer', 'Saramonic Blink 500 Pro Wireless', 'Microphone Condenser USB', 
            'Monitor Gaming 144Hz 24 Inch', 'Keyboard Mekanikal Switch Biru', 'Mouse Gaming Wireless', 
            'Headset Gaming 7.1 Surround', 'Kabel HDMI 2.1 4K', 'Webcam Full HD 1080p',
            'Laptop Core i7 RAM 16GB', 'Buku Panduan Belajar Laravel', 'Kemeja Flanel Pria Lengan Panjang',
            'Kaos Polos Hitam Cotton Combed', 'Sepatu Sneakers Putih', 'Tas Ransel Laptop Anti Air'
        ];

        // Memilih produk acak dan menambahkan seri/nomor agar lebih realistis
        $title = fake()->randomElement($produkLokal) . ' Seri ' . fake()->bothify('??-###');

        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()->id ?? \App\Models\User::factory(),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id ?? \App\Models\Category::factory(),
            'title' => $title,
            'description' => 'Produk ' . $title . ' dengan kualitas terbaik. Dijamin 100% original, fitur mutakhir, dan siap dikirim dengan aman ke seluruh Indonesia. Cocok untuk melengkapi kebutuhan harian maupun operasional Anda.',
            'price' => fake()->randomElement([55000, 125000, 350000, 890000, 1500000, 3250000, 45000, 75000]),
            'stock' => fake()->numberBetween(10, 150),
        ];
    }
}