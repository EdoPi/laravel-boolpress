<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorDetail;
use App\Post;
use App\Comment;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker->addProvider(new WW\Faker\Provider\Picture($faker));

        for ($i=0; $i < 15 ; $i++) {
            $author = new Author();
            $author->name = $faker->name();
            $author->email = $faker->email();
            $author->save();

            $authorDetail = new AuthorDetail();
            $authorDetail->bio = $faker->text(250);
            $authorDetail->pic = 'https://picsum.photos/seed/'.rand(1,1000).'/200/300 ';
            $authorDetail->website = $faker->url();
            $author->authorDetail()->save($authorDetail);

            for ($x=0; $x < rand(2,6) ; $x++) {
                $post = new Post();
                $post->title = $faker->text(50);
                $post->text = $faker->text(1000);

                $author->posts()->save($post);

                for ($y=0; $y < 5; $y++) {
                    $comment = new Comment();
                    $comment->text = $faker->text(300);
                    $post->comments()->save($comment);
                }
            }





        }
    }
}
