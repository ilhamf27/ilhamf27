<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        About::truncate();

        User::factory(10)->create();

        $ilham = About::create([
            'name' => 'ilham fatahillah ridwan',
            'email' => 'ilhamfatahillahr@gmail.com'
        ]);

        Skill::create([
            'about_id' => $ilham->id,
            'name' => 'php',
            'tingkat_kemampuan' => 5
        ]);
    }
}
