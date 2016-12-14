@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Articles CRUD</h2>
            </div>
            <div class="pull-right">
                @permission('article-create')
                <a class="btn btn-success" href="{{ route('articleCRUD.create') }}"> Create New Article</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Body</th>
            <th>Summary</th>
            <th>Publish Date</th>
            <th>Sections</th>
            <th>Image</th>
            <th>Editor</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($articles as $key => $item)
            <?php
                $image_name = $item->image;
                if ($image_name!==''){
                    $image_path = "http://localhost/olivetnews" . '/public/images/photo/'.$image_name;
                }else{
                    $image_path = '';
                }
            $section_show = array();
            $section_array = explode('|', $item->sections);
            $section_full_array = array('otcs' => 'Theology', 'jcm' => 'Music','oacd' => 'Arts & Design', 'ocj' => 'Journalism','ocit' => 'Engineering/IT', 'lan' => 'Language Education','ocb' => 'Business');
                foreach($section_array as $value){
                    $section_show[$value]= $section_full_array[$value];
                }
            ?>
                @if (Auth::user()->name == "super_admin")
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->body }}</td>
                        <td>{{ $item->summary }}</td>
                        <td>{{ $item->publish_date }}</td>
                        <td>{{ $item->sections }}</td>
                        <td><img width="150px" src="{{ $item->image_address }}" alt="{{ $item->image_address }}"></td>
                        <td>{{ ($item->editor) }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('articleCRUD.show',$item->id) }}">Show</a>
                            @permission('article-edit')
                            <a class="btn btn-primary" href="{{ route('articleCRUD.edit',$item->id) }}">Edit</a>
                            @endpermission
                            @permission('article-delete')
                            {!! Form::open(['method' => 'DELETE','route' => ['articleCRUD.destroy', $item->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            @endpermission
                        </td>
                    </tr>
                @elseif ($item->editor == Auth::user()->name)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->body }}</td>
                <td>{{ $item->summary }}</td>
                <td>{{ $item->publish_date }}</td>
                <td>{{ implode("|",$section_show) }}</td>
                {{--<td>{{ $item->sections }}</td>--}}
                <td><img width="150px" src="{{ $image_path==''?($item->image_address): $image_path}}" alt="{{ $item->image_address }}"></td>
                <td>{{ $item->editor }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('articleCRUD.show',$item->id) }}">Show</a>
                    @permission('article-edit')
                    <a class="btn btn-primary" href="{{ route('articleCRUD.edit',$item->id) }}">Edit</a>
                    @endpermission
                    @permission('article-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['articleCRUD.destroy', $item->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
            </tr>
            @endif
        @endforeach
    </table>
    {!! $articles->render() !!}
@endsection