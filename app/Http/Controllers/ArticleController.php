<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(6);
        $top_articles = Article::where('image', '!=', '')->paginate(3);

        return view('news.main', [
            'articles' => $articles,
            'top_article' => $top_articles,
        ]);
    }

    public function section($sections)
    {
        $articles = Article::where('sections', 'LIKE', "%$sections%")->get();

//        if (empty($articles)){
//            return back()->withInput();
//        }
        $center_articles = Article::where('sections', 'LIKE', "%$sections%")->where('image', '!=', '')->get();

        return view('news.section', [
            'section' => $sections,
            'articles' => $articles,
            'center_article' => $center_articles,
        ]);
    }

    public function loadMore(Request $request)
    {
        $articles = Article::paginate(4);

        foreach ($articles as $item) {
            $image_name = $item->image;
            if ($image_name !== '') {
                $image_path = "http://localhost/olivetnews" . '/public/images/photo/' . $image_name;
            } else {
                $image_path = '';
            }
            $section_show = array();
            $section_array = explode('|', $item->sections);
            $section_full_array = array('otcs' => 'Theology', 'jcm' => 'Music', 'oacd' => 'Arts & Design', 'ocj' => 'Journalism', 'ocit' => 'Engineering/IT', 'lan' => 'Language Education', 'ocb' => 'Business', 'gen' => "University");
            foreach ($section_array as $value) {
                $section_show[$value] = $section_full_array[$value];
            }
            ?>
           <?php $html=<<<HERE
 <div class="col-sm-4 vice_news"> 
                <div class=" topnews_img">
                    <a href="http://localhost/olivetnews/public/news/article/<?php echo $item->id ?>">
                        <img src="<?php echo $image_path == '' ? ($item->image_address) : $image_path ?>"
                             alt="<?php echo $item->image_address ?>" class="img-responsive">
                    </a>
                </div>
                <a class="category category_theology" href="javascript:void(0)">
                    <span><?php echo(implode("|", $section_show)) ?></span>
                </a>
                <div class="">
                    <h3>
                        <a href="http://localhost/olivetnews/public/news/article/<?php echo $item->id ?>"><?php echo $item->title ?></a>
                    </h3>
                    <span class="headline_datetime"><?php echo $item->publish_date ?></span>
                    <p><?php echo $item->summary ?></p>
                </div>
            </div>
HERE;
            ?>
            <?php
        }
        if ($request->ajax()) {
            return $html;
        }
        return view('news.main', compact('articles'));
    }


    public function article($id)
    {
        $article = Article::find($id);
        return view('news.article', [
            'article' => $article,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
?>
