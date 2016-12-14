<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Olivet University, where future leaders and scholars are equipped to change the world for Jesus Christ. Olivet University students come from a wide range of age groups, geographical areas, educational backgrounds, and cultural heritages, creating a rich and challenging educational environment." name="description" />
    <meta name="keywords" content="Olivet University, Olivet, News, Campus News" />
    <meta name="keyphrase" content="Olivet University News, Olivet News" />
    <title>Olivet University News - OlivetNews.com</title>
    <meta name="msvalidate.01" content="1041215C1BB846E107FFF683F2966CCD" />
    <meta name="p:domain_verify" content="0d63b3d3525a4ce3df924cbb2a20d05c" />
    @include('layouts.header_script')
</head>

<body>

@include('layouts.header')

<!-- Content Start -->
<div class="m_content">
    <div class="container">
        @include('layouts.siderbar')
        <div class="m_contentr sub_contentr">
            <div class="m_contentr1">
                <div class="row">
                    <div class="col-sm-8">
                        <div class=" topnews_img">
                            <a href="/article/2016/12/09/1097/olivet-university-olivet-winter-art-show-2016-to-share-grace-&amp;-joy-in-christmas-season.htm">
                                <img src="http://www.olivetuniversity.edu/images_articles/files/ocad/IMG_osad.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <a class="category category_artd" href="javascript:void(0)">
                            <span>Arts &amp; Design</span>
                        </a>
                        <div class="">
                            <h3><a href="/article/2016/12/09/1097/olivet-university-olivet-winter-art-show-2016-to-share-grace-&amp;-joy-in-christmas-season.htm">
                                    Olivet Winter Art Show 2016 to Share Grace & Joy in Christmas Season              		</a></h3>
                            <span class="headline_datetime">Dec 09, 2016</span>
                            <p>Christmas is the season to remember and share God&#039;s love, Olivet School of Art and Design is going to reach out to friends and neighbors in a special way through the Winter Art Show.</p>
                        </div>
                    </div>
                    @include('layouts.headlines')
                    <div class="clearfix"></div>
                    <div class="col-sm-4 vice_news">
                        <div class=" topnews_img">
                            <a href="/article/2016/11/29/1096/olivet-university-mdiv-students-engage-in-dialogue-on-cross-cultural-mission.htm">
                                <img src="http://www.olivetuniversity.edu/images_articles/files/otcs/Cross-Cultural-Mission.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <a class="category category_theology" href="javascript:void(0)">
                            <span>Theology</span>
                        </a>
                        <div class="">
                            <h3><a href="/article/2016/11/29/1096/olivet-university-mdiv-students-engage-in-dialogue-on-cross-cultural-mission.htm">MDiv Students Engage in Dialogue on Cross-Cultural Mission</a></h3>
                            <span class="headline_datetime">Nov 29, 2016</span>
                            <p>Cross-cultural mission is an area of great interest especially to Olivet University students around the world. During the doctoral colloquium of the Zinzendorf School of Doctoral Studies at its Riverside</p>
                        </div>
                    </div>
                    <div class="col-sm-4 vice_news">
                        <div class=" topnews_img">
                            <a href="/article/2016/11/28/1095/olivet-university-ny-mba-students-present-projects-on-strategy-formulation.htm">
                                <img src="http://www.olivetuniversity.edu/images_articles/files/ocb/NY_MBA_Students.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <a class="category category_bussiness" href="javascript:void(0)">
                            <span>Business</span>
                        </a>
                        <div class="">
                            <h3><a href="/article/2016/11/28/1095/olivet-university-ny-mba-students-present-projects-on-strategy-formulation.htm">NY MBA Students Present Projects on Strategy Formulation</a></h3>
                            <span class="headline_datetime">Nov 28, 2016</span>
                            <p>MBA students at Olivet Business School (OBS) New York Extension present recent projects on strategy formulation covering situation analysis, business strategy and corporate strategy.</p>
                        </div>
                    </div>
                    @include('layouts.events')
                </div>
            </div>

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
                        <div class="news-list">
                            <div class="row">
                                <div class="col-sm-2 col-xs-5 newslist_img">
                                    <a href="/article/2016/11/04/1094/olivet-university-zsds-annual-doctoral-colloquium-kicks-off-in-riverside.htm"><img  class="img-responsive" src="{{ $article->image_address }}" alt=""></a>
                                </div>
                                <div class="col-sm-8 col-xs-7  newslist_text">
                                    <a class="category category_theology" href="javascript:void(0)"><span> {{ $article->sections }} </span></a>
                                    <div class="">
                                        <h3><a href="/article/2016/11/04/1094/olivet-university-zsds-annual-doctoral-colloquium-kicks-off-in-riverside.htm">{{ $article->title }}</a></h3>
                                        <span class="news_date">{{ $article->publish_date }}</span>
                                        <p>{{ $article->body }}</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 lable_tag">
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="next load_more"><a href="/jquery-loadmore">Load More ...</a></div>

                        {{--@yield('content')--}}

            </div>
        </div>
    </div>
</div>
<!-- Content End -->

</body>
</html>



