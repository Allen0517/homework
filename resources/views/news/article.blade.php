<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Olivet University, Olivet, News, Campus News, Every Thursday evening, book lovers from Olivet Theological College & Seminary gather for sharing as each of them pick up the challenge of reading one book per week this summer." name="keywords">
    <meta name="description" content="Olivet University, where future leaders and scholars are equipped to change the world for Jesus Christ. Olivet University students come from a wide range of age groups, geographical areas, educational backgrounds, and cultural heritages, creating a rich and challenging educational environment. Every Thursday evening, book lovers from Olivet Theological College & Seminary gather for sharing as each of them pick up the challenge of reading one book per week this summer." />
    <meta name="keyphrase" content="Olivet University News, Olivet News" />
    <title>OTCS Reading Program Enriches Campus Life in Summer - Olivet University News</title>
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
<!-- Content Start -->
<div class="m_content">
    <div class="container">
        @include('layouts.siderbar')
        <div class="m_contentr article_r">
            <div class="m_contentr1 article_r1">
                <div class="row">
                    <div class="col-sm-4">
                        <a class="category  category_university" href="javascript:void(0)">
                            <span>{{$article->sections}}</span>
                        </a>
                        <h3>{{$article->title}}</h3>
                        <!--h6></h6-->
                    </div>
                    <div class="col-sm-8 article_imgs">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->

                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{$article->image_address}}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{$article->image_address}}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{$article->image_address}}" alt="">
                                </div>
                            </div>

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li><li data-target="#myCarousel" data-slide-to="1" ></li><li data-target="#myCarousel" data-slide-to="2" ></li>			  	</ol>

                            <!--div class="discription">
                              <p class="discript1">Credit :  Olivet University</p>
                              <p class="discript2">Description if it is needed.</p>
                            </div-->

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







