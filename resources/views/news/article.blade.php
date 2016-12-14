<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Olivet University, Olivet, News, Campus News, Every Thursday evening, book lovers from Olivet Theological College & Seminary gather for sharing as each of them pick up the challenge of reading one book per week this summer." name="keywords">
    <meta name="description" content="{{$article->summary}}" />
    <meta name="keyphrase" content="Olivet University News, Olivet News" />
    <title>{{$article->title}}</title>
    <meta name="msvalidate.01" content="1041215C1BB846E107FFF683F2966CCD" />
    <meta name="p:domain_verify" content="0d63b3d3525a4ce3df924cbb2a20d05c" />
@include('layouts.header_script')
</head>
<body>

<!-- Header Start -->
<head>
    @include('layouts.header')
</head>
<!-- Header End -->
<?php
$image_name = $article->image;
$section_full_array = array('otcs' => 'Theology', 'jcm' => 'Music','oacd' => 'Arts & Design', 'ocj' => 'Journalism','ocit' => 'Engineering/IT', 'lan' => 'Language Education','ocb' => 'Business');
if ($image_name!==''){
    $image_path = "http://localhost/olivetnews" . '/public/images/photo/'.$image_name;
}else{
    $image_path = '';
}
$section_show = array();
$section_array = explode('|', $article->sections);
foreach($section_array as $value){
    $section_show[$value]= $section_full_array[$value];
}
?>
<!-- Content Start -->
<div class="m_content">
    <div class="container">
        @include('layouts.siderbar')
        <div class="m_contentr article_r">
            <div class="m_contentr1 article_r1">
                <div class="row">
                    <div class="col-sm-4">
                        <a class="category  category_university" href="javascript:void(0)">
                            <span>{{ implode("|",$section_show) }}</span>
                        </a>
                        <h3>{{$article->title}}</h3>
                        <!--h6></h6-->
                    </div>
                    <div class="col-sm-8 article_imgs">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->

                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{ $image_path==''?($article->image_address): $image_path}}" alt="{{ $article->image_address }}" class="img-responsive">
                                </div>
                            </div>

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li><li data-target="#myCarousel" data-slide-to="1" ></li><li data-target="#myCarousel" data-slide-to="2" ></li>			  	</ol>


                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="m_contentr2">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="text_time">{{$article->publish_date}}</div>
                            <div class="text">{{$article->body}}</div>
                        </div>
                        @include('layouts.events')
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- Content End -->

</body>
</html>







