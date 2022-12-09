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
        for ($i=1 ; $i<=70 ; $i++) {
            $user_id = random_int(1, 5);
            $post_id = random_int(1, 15);
            $count = Like::where('user_id', $user_id)->where('post_id', $post_id)->count();
            $this->command->info("user_id ={$user_id}, post_id={$post_id}");
            $this->command->info("{$count}");

            if ($count <= 0) {
                Like::create([
                    'user_id' => $user_id,
                    'post_id' => $post_id,
                ]);
            }
        }
    }
}
