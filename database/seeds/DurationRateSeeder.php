<?php

use Illuminate\Database\Seeder;

class DurationRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\DurationRate::class, 20)->create();
    }
}
