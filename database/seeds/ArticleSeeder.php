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
        DB::table('articles')->delete();

        for ($i=0; $i < 20; $i++) {
            \App\Article::create([
                'title'   => 'Title: olivet news '.$i,
                'body'    => 'Body: this is the body of'.$i.'article',
                'summary'    => 'summary: this is the body of'.$i.'article',
                'publish_date' => date("Y-m-d H:i:s",time()),
                'sections' => "music",
                'image_address' => "http://www.olivetuniversity.edu/images_articles/files/jcm/b111.jpg",
                'editor' => 'Allen',
            ]);
        }
    }
}
