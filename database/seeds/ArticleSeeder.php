<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 5; $i++) {
            \App\Article::create([
                'title'   => 'Title: olivet news '.$i,
                'body'    => 'Body: this is the body of'.$i.'article',
                'summary'    => 'summary: this is the body of'.$i.'article',
                'publish_date' => date("Y-m-d H:i:s",time()),
                'sections' => "ocb",
                'image_address' => "http://www.olivetuniversity.edu/images_articles/files/jcm/b111.jpg",
                'editor' => 'Allen',
            ]);
        }
    }
}
