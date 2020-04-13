<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Support\Facades\Session;
use App\Post;
use App\User;
use App\Photo;
use App\Category;
use App\Tag;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(6);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::pluck('name','id')->all();
       $tags = Tag::pluck('name','id')->all();
       return view('admin.posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
       // return $request->all();
        $user            = Auth::user();
        $data            = [];
        $data_categories = [];
        $data_tags       = [];
        $photo_id;


        if ($file = $request->file('photo_id')) {

          $name = time().$file->getClientOriginalName();   
          $file->move('images',$name);
          $photo = Photo::create(['file' => $name]);
          $photo_id = $photo->id;
       }

        $data = [
            'user_id'    => $user->id,
            'title'      => $request['title'],
            'body'       => $request['body'],
            'photo_id'   => $photo_id
        ];

        $data_categories = $request['category_id'];
        if($request['tag_id'])
            $data_tags = $request['tag_id'];

       $post = $user->posts()->create($data);
       $post->categories()->attach($data_categories);
       $post->tags()->attach($data_tags);
       return redirect('/admin/posts');

   
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
        $post = Post::findOrFail($id);
        $categories = Category::pluck('name','id')->all();
        $tags = Tag::pluck('name','id')->all();
        return view('admin.posts.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
      
        $data            = [];
        $photo_id        = Post::findOrFail($id)->photo_id;


        if ($file = $request->file('photo_id')) {
          $name = time().$file->getClientOriginalName();   
          $file->move('images',$name);
          $photo = Photo::create(['file' => $name]);
          $photo_id = $photo->id;
        }

        $data = [
            'title'      =>  $request['title'],
            'body'       =>  $request['body'],
            'photo_id'   =>  $photo_id,
        ];

       $post = Post::findOrFail($id)->update($data);
       
       if ($request['category_id']) {
            $new_categories = $request['category_id'];
            $old_categories = [];        
            $post_update    = Post::findOrFail($id); 
            for ($i=0; $i < count($post_update->categories); $i++) { 
                $old_categories[$i] = $post_update->categories[$i]->id;      
            }       
            $post_update->categories()->detach($old_categories);
            $post_update->categories()->attach($new_categories);
       }

       if($request['tag_id']){
            $new_tags    = $request['tag_id'];
            $old_tags    = [];        
            $post_update = Post::findOrFail($id); 
            for ($i=0; $i < count($post_update->tags); $i++) { 
                $old_tags[$i] = $post_update->tags[$i]->id;      
            }       
            $post_update->tags()->detach($old_tags);
            $post_update->tags()->attach($new_tags);
        }
        
        Session::flash('updated_post','Ártigo actualizado.');
        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if ($post->photo != null) {
            unlink(public_path().$post->photo->file);
        }

        $post->delete();

        Session::flash('deleted_post','Ártigo removido.');
        return redirect('/admin/posts');
    }

    public function post($slug){
        $post       = Post::findBySlugOrFail($slug);
        $comments   = $post->comments()->whereIsActive(1)->get();
        $categories = Category::orderBy('created_at', 'desc')->take(4)->get();
        $tags       = Tag::orderBy('created_at', 'desc')->take(6)->get();;
        $posts      = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('blog.single', compact('post','comments','categories','tags','posts'));
    }
}

