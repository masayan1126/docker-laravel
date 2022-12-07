<?php

use Illuminate\Database\Seeder;

use App\Like;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1 ; $i<=150 ; $i++) {
            Like::create([
                'user_id' => random_int(1, 5),
                'post_id' => random_int(1, 15),
            ]);
        }
    }
}
