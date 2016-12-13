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
        @endforeach
    </table>
    {!! $articles->render() !!}
@endsection