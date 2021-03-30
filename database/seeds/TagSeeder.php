<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['sport', 'cronoca', 'gossip', 'meteo', 'shopping', 'natura'];
        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->tag_name = $tag;
            $newTag->save();
        }
    }
}
