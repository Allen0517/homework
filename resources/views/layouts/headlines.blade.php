
<div class="col-sm-4 headline_news point_menu">
    <h5 class="head_titt">More headlines</h5>
    <ul>
        @foreach($articles as $key=>$article)
        <li class="m_theology">
            <div class="headline_text">
                <h5><a href="http://localhost/olivetnews/public/news/article/{{$article->id}}">{{$article->title}}</a></h5>
                <span></span>
            </div>
        </li>
        @if($key==7) @break; @endif
        @endforeach
    </ul>
</div>