<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Bid::create([
            'address' => 'пр-кт Мира, 20',
            'description' => 'Протечка труб на втором этаже',
            'max_price' => 1000,
            'photo_before_url' => 'some_url',
            'status' => 1,
            'category_id' => 1,
            'user_id' => 1
        ]);

    }
}
