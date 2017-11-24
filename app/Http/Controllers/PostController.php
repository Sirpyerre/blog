<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
Use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        if ($categories->count()== 0 ){
            Session::flash('info', 'Debes crear una categoría para poder crear un post.');

            return redirect()->back();
        }

        return view('admin.post.create')->with('categories', $categories);
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
            'featured' => 'required|image',
            'content' => 'required',
            'category_id' => 'required'
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/post/', $featured_new_name);

        $post = Post::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'featured' => 'uploads/post/'.$featured_new_name,
            'content' => $request->content,
            'slug' => str_slug($request->title)
        ]);

        Session::flash('success', 'Se ha creado el post');

        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success', 'Se ha eliminado el post');

        return redirect()->back();
    }

    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
// dd($posts);
        return view('admin.post.trashed')->with('posts',$posts);
    }

    public function kill($id)
    {
        $posts = Post::onlyTrashed()->where('id',$id)->first();
        $posts->forceDelete();

        Session::flash('success', 'Se ha borrado el post permanentemente');

        return redirect()->back();
    }

    public function restore($id)
    {
        $posts = Post::onlyTrashed()->where('id',$id)->first();
        $posts->restore();

        Session::flash('success', 'Se ha recuperado el post');

        return redirect()->route('post');

    }

}
