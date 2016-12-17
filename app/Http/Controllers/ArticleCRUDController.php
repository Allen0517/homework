<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use Illuminate\Support\Facades\Input;

class ArticleCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::orderBy('id','DESC')->paginate(10);

        return view('ArticleCRUD.index',compact('articles'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ArticleCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'summary' => 'required',
        ]);
        $article = new Article;
        $image = $request->file('image');
        if($request->allFiles()){
            $imageName = $image->getClientOriginalName();
            $path = base_path() . '/public/images/photo/'.$imageName;
            if(!file_exists($path)){
                $request->file('image')->move(base_path() . '/public/images/photo/', $imageName);
            }
        }
        $article->image = $imageName;
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->summary = $request->input('summary');
        $article->publish_date = $request->input('publish_date');
        $section = $request->input('sections');
        $article->sections = implode('|',$section);
        $article->image_address = $request->input('image_address');
        $article->editor = $request->input('editor');
        $article->save();
        return redirect()->route('articleCRUD.index')
            ->with('success','Article created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('ArticleCRUD.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('ArticleCRUD.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'summary' => 'required',
        ]);
        $article = Article::find($id);
        $image = $request->file('image');
        if($request->allFiles()){
            $imageName = $image->getClientOriginalName();
            $path = base_path() . '/public/images/photo/'.$imageName;
           if(!file_exists($path)){
               $request->file('image')->move(base_path() . '/public/images/photo/', $imageName);
               }
            }
        $article->image = $imageName;
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->summary = $request->input('summary');
        $article->publish_date = $request->input('publish_date');
        $section = $request->input('sections');
        $article->sections = implode('|',$section);
        $article->image_address = $request->input('image_address');
        $article->editor = $request->input('editor');
        $article->save();
        return redirect()->route('articleCRUD.index')
            ->with('success','Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect()->route('articleCRUD.index')
            ->with('success','Article deleted successfully');
    }
}
