<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post one',
                'excerpt' => 'summary of posts one',
                'body' => 'body of post one',
                'image_path' => 'empty',
                'is_published' => false,
                'min_to_read' => '1',

            ],
            [
                'title' => 'Post two',
                'excerpt' => 'summary of posts two',
                'body' => 'body of post two',
                'image_path' => 'empty',
                'is_published' => true,
                'min_to_read' => '2',

            ],
        ];
        foreach($posts as $key=>$value){
            Post::create($value);
        }
    }
}
