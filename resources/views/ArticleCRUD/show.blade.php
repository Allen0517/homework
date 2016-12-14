@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articleCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <?php
    $image_name = $article->image;
    if ($image_name!==''){
        $image_path = "http://localhost/olivetnews" . '/public/images/photo/'.$image_name;
    }else{
        $image_path = '';
    }
    $section_show = array();
    $section_array = explode('|', $article->sections);
    $section_full_array = array('otcs' => 'Theology', 'jcm' => 'Music','oacd' => 'Arts & Design', 'ocj' => 'Journalism','ocit' => 'Engineering/IT', 'lan' => 'Language Education','ocb' => 'Business');
    foreach($section_array as $value){
        $section_show[$value]= $section_full_array[$value];
    }
    ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $article->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Publish Date:</strong>
                {{ $article->publish_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sections:</strong>
                {{ implode("|",$section_show) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Editor:</strong>
                {{ $article->editor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img width="200px" src="{{ $image_path==''?($article->image_address): $image_path}}" alt="{{ $article->image_address }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Summary:</strong>
                {{ $article->summary }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $article->body }}
            </div>
        </div>
    </div>
@endsection