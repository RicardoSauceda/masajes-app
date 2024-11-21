<?php

namespace Database\Seeders;

use App\Models\SubscriptionModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planes = File::get(database_path('data/subscriptions.json'));
        $data = json_decode($planes, true);
        foreach ($data as $item) {
            SubscriptionModel::create($item);
        }
    }
}
