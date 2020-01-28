<?php

use Illuminate\Database\Seeder;
use App\Model\About;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(About::class,1)->create();
    }
}
