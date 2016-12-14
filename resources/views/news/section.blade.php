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
                    <?php $article[0] = $center_article[0];$article[1] = $center_article[1]; $section_full_array = array('otcs' => 'Theology', 'jcm' => 'Music','oacd' => 'Arts & Design', 'ocj' => 'Journalism','ocit' => 'Engineering/IT', 'lan' => 'Language Education','ocb' => 'Business');?>
                    <div class="col-sm-8 clearfix">
                        <h1 class="category_theology">{{$section_full_array[$section]}}</h1>
                        <div clas="=&quot;row&quot;">
                            @foreach($article as $item)
                                <?php
                                $image_name = $item->image;
                                if ($image_name!==''){
                                    $image_path = "http://localhost/olivetnews" . '/public/images/photo/'.$image_name;
                                }else{
                                    $image_path = '';
                                }
                                $section_show = array();
                                $section_array = explode('|', $item->sections);
                                foreach($section_array as $value){
                                    $section_show[$value]= $section_full_array[$value];
                                }
                                ?>
                                    <div class="col-sm-6">
                                        <div class=" topnews_img">
                                            <a href="http://localhost/olivetnews/public/news/article/{{$item->id}}">
                                                <img src="{{ $image_path==''?($item->image_address): $image_path}}" alt="{{ $item->image_address }}" class="img-responsive">
                                            </a>
                                        </div>
                                        <a class="category category_university" href="javascript:void(0)">
                                            <span>{{ implode("|",$section_show) }}</span>
                                        </a>
                                        <div class="">
                                            <h3><a href="http://localhost/olivetnews/public/news/article/{{$item->id}}">
                                                    {{$item->title}}							</a></h3>
                                            <span class="headline_datetime">{{$item->publish_date}}</span>
                                            <p>{{$item->summary}}</p>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                    @include('layouts.headlines')
                    <div class="clearfix"></div>
                        <?php $article[0] = $center_article[2];$article[1] = $center_article[3];?>
                        @foreach($article as $item)
                            <?php
                            $image_name = $item->image;
                            if ($image_name!==''){
                                $image_path = "http://localhost/olivetnews" . '/public/images/photo/'.$image_name;
                            }else{
                                $image_path = '';
                            }
                            $section_show = array();
                            $section_array = explode('|', $item->sections);
                            foreach($section_array as $value){
                                $section_show[$value]= $section_full_array[$value];
                            }
                            ?>
                    <div class="col-sm-4 vice_news">
                        <div class=" topnews_img">
                            <a href="http://localhost/olivetnews/public/news/article/{{$item->id}}">
                                <img src="{{ $image_path==''?($item->image_address): $image_path}}" alt="{{ $item->image_address }}" class="img-responsive">
                            </a>
                        </div>
                        <a class="category category_university" href="javascript:void(0)">
                            <span>{{ implode("|",$section_show) }}</span>
                        </a>
                        <div class="">
                            <h3><a href="http://localhost/olivetnews/public/news/article/{{$item->id}}">
                                    {{$item->title}}							</a></h3>
                            <span class="headline_datetime">{{$item->publish_date}}</span>
                            <p>{{$item->summary}}</p>
                        </div>
                    </div>
                    @endforeach

                    @include('layouts.events')
                </div>
            </div>

            @include('layouts.latest')
        </div>
    </div>
</div>
<!-- Content End -->

</body>
</html>







