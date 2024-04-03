<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnoucementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Announcement::firstOrCreate([
            'id'=>1,
        ],[
            'id'=>1,
            'title'=>'HOLY GRAIL SALE ENDS 18TH FEB!'
        ]);
    }
}
