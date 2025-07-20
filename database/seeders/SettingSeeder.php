<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create(['key' => 'app.name', 'value' => 'Laravel SDK']);
        Setting::create(['key' => 'app.description', 'value' => 'A Laravel SDK']);
        Setting::create(['key' => 'app.logo', 'value' => 'logo.svg']);
        Setting::create(['key' => 'app.favicon', 'value' => 'favicon.ico']);
    }
}