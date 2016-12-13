<?php
define("HOME_DIR",dirname(dirname(dirname(dirname(__FILE__)))));
define("SITE_ADDRESS","http://localhost/olivetnews/");
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Olivet University, where future leaders and scholars are equipped to change the world for Jesus Christ. Olivet University students come from a wide range of age groups, geographical areas, educational backgrounds, and cultural heritages, creating a rich and challenging educational environment." name="description" />
    <meta name="keywords" content="Olivet University, Olivet, News, Campus News" />
    <meta name="keyphrase" content="Olivet University News, Olivet News" />
    <title>Theology | Olivet University News - OlivetNews.com</title>
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
                    <div class="col-sm-8 clearfix">
                        <h1 class="category_theology">Theology</h1>
                        <div clas="=&quot;row&quot;">

                            <div class="col-sm-6">
                                <div class=" topnews_img">
                                    <a href="/article/2016/09/26/1092/olivet-university-olivet-university-holds-fall-convocation-services.htm">
                                        <img src="http://www.olivetuniversity.edu/images_articles/files/gen/convocation20161111111.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <a class="category category_university" href="javascript:void(0)">
                                    <span>University</span>
                                </a>
                                <div class="">
                                    <h3><a href="/article/2016/09/26/1092/olivet-university-olivet-university-holds-fall-convocation-services.htm">
                                            Olivet University Holds Fall Convocation Services							</a></h3>
                                    <span class="headline_datetime">Sep 26, 2016</span>
                                    <p>On September 23, 2016, Olivet University held its Fall Convocation services on campuses nationwide. Riverside, Dover, and San Francisco campuses each welcomed</p>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class=" topnews_img">
                                    <a href="/article/2016/08/04/1089/olivet-university-otcs-reading-program-enriches-campus-life-in-summer.htm">
                                        <img src="http://www.olivetuniversity.edu/images_articles/files/otcs/OTCS-Reading-Program-Enriches-Campus-Life-in-Summer.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <a class="category category_theology" href="javascript:void(0)">
                                    <span>Theology</span>
                                </a>
                                <div class="">
                                    <h3><a href="/article/2016/08/04/1089/olivet-university-otcs-reading-program-enriches-campus-life-in-summer.htm">
                                            OTCS Reading Program Enriches Campus Life in Summer							</a></h3>
                                    <span class="headline_datetime">Aug 04, 2016</span>
                                    <p>Every Thursday evening, book lovers from Olivet Theological College &amp; Seminary gather for sharing as each of them pick up the challenge of reading one book per week this summer.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @include('layouts.headlines')
                    <div class="clearfix"></div>
                    <div class="col-sm-4 vice_news">
                        <div class=" topnews_img">
                            <a href="/article/2016/07/01/1086/olivet-university-olivet-class-of-2016-exhorted-to-be-visionary-leaders-at-commencement-ceremony.htm">
                                <img src="http://www.olivetuniversity.edu/images_articles/files/gen/commencement111.jpg" class="img-responsive">
                            </a>
                        </div>
                        <a class="category category_university" href="javascript:void(0)">
                            <span>University</span>
                        </a>
                        <div class="">
                            <h3><a href="/article/2016/07/01/1086/olivet-university-olivet-class-of-2016-exhorted-to-be-visionary-leaders-at-commencement-ceremony.htm">Olivet Class of 2016 Exhorted to be Visionary Leaders at Commencement Ceremony</a></h3>
                            <span class="headline_datetime">Jul 01, 2016</span>
                            <p>Global evangelical leader Bishop Efraim Tendero challenged Olivet University graduates to have "daring ambitions" as they are about to begin a new chapter in their lives.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 vice_news">
                        <div class=" topnews_img">
                            <a href="/article/2016/05/16/1081/olivet-university-pentecost-sunday-2016-at-olivet-chapel.htm">
                                <img src="http://www.olivetuniversity.edu/images_articles/files/otcs/p1111.jpg" class="img-responsive">
                            </a>
                        </div>
                        <a class="category category_theology" href="javascript:void(0)">
                            <span>Theology</span>
                        </a>
                        <div class="">
                            <h3><a href="/article/2016/05/16/1081/olivet-university-pentecost-sunday-2016-at-olivet-chapel.htm">Pentecost Sunday 2016 at Olivet Chapel</a></h3>
                            <span class="headline_datetime">May 16, 2016</span>
                            <p>Students and staff of Olivet University gathered their hearts at Olivet Chapel, longing to be filled by the Holy Spirit on Pentecost Sunday.</p>
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
                    @foreach ($articles as $article)
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
                    <div class="next load_more"><a href="load_more/latest/2/1097,1096,1095.htm">Load More ...</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->

</body>
</html>







