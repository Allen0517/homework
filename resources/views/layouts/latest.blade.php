<div class="m_contentr3">
    <div class="various_menu">
        <ul class="nav nav-tabs">
            <li class="latest"><a class="current" data-type="latest" href="javascript:void(0);">LATEST </a></li>
            <li class="spotlights"><a data-type="spotlights" href="javascript:void(0);">Spotlights </a></li>
            <li class="slideshow"><a data-type="slideshow" href="javascript:void(0);">Photos/Slideshow </a></li>
            <li class="videos"><a data-type="videos" href="javascript:void(0);"> Video</a></li>
        </ul>
    </div>
    <div class="menu_latest" id="menu_latest" style="min-height:700px;">
        @foreach ($articles as $key=>$article)
            <?php
            $image_name = $article->image;
            if ($image_name!==''){
                $image_path = "http://localhost/olivetnews" . '/public/images/photo/'.$image_name;
            }else{
                $image_path = '';
            }
            $section_show = array();
            $section_array = explode('|', $article->sections);
            $section_full_array = array('otcs' => 'Theology', 'jcm' => 'Music','oacd' => 'Arts & Design', 'ocj' => 'Journalism','ocit' => 'Engineering/IT', 'lan' => 'Language Education','ocb' => 'Business','gen'=>"University");
            foreach($section_array as $value){
                $section_show[$value]= $section_full_array[$value];
            }
            ?>

            <div class="news-list">
                <div class="row">
                    <div class="col-sm-2 col-xs-5 newslist_img">
                        <a href="http://localhost/olivetnews/public/news/article/{{$article->id}}"><img  class="img-responsive" src="{{ $image_path==''?($article->image_address): $image_path}}" alt="{{ $article->image_address }}"></a>
                    </div>
                    <div class="col-sm-8 col-xs-7  newslist_text">
                        <a class="category category_theology" href="javascript:void(0)"><span> {{ implode("|",$section_show) }}</span></a>
                        <div class="">
                            <h3><a href="http://localhost/olivetnews/public/news/article/{{$article->id}}">{{ $article->title }}</a></h3>
                            <span class="news_date">{{ $article->publish_date }}</span>
                            <p>{{ $article->body }}</p>
                        </div>
                    </div>
                    <div class="col-sm-2 lable_tag">
                    </div>
                </div>
            </div>
        @endforeach

        <div class="next load_more"><a href="http://localhost/olivetnews/public/news/loadmore">Load More ...</a></div>

        {{--@yield('content')--}}

    </div>
</div>