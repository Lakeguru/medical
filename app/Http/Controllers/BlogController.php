<?php

namespace App\Http\Controllers;

// use Auth;
use App\Blog;
use Image;
use Validator;
use Storage;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function blog()
    {
        return view('Blogs.blog');
    }

    public function blogdetails()
    {
        return view('Blogs.blogdetails');
    }

    public function index()
    {
        return view('Blogs.index');

    }

    public function comment()
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required',
        ]);

            $comment = new Comment();
            $comment->body = $request->body;
            $comment->save();

            return back()->with('success','Comment created successfully');
    }

    public function postdetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required',
            'image'=> 'required|image',
            'blog_tag'=> 'required',
            'title'=> 'required',
            
        ]);

            //save image
            $filenamewithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            // RETURN $filename;
            $extension = $request->file('image')->getClientOriginalExtension();
            //create new filename

            $filenametostore = $filename .'_'.time().'.'.$extension;
            //upload image

            $path= $request->file('image')->storeAs('public/images',$filenametostore);

            $blog = new Blog();
            $blog->title = $request->title;
            $blog->blog_tag = $request->blog_tag;
            $blog->content = $request->content;
            $blog->image = '/images'.$request->$filename;
            // $blog->image = '/images/'.$request['image'];
             $blog->save();
             Toastr::success('Post successfully Created.','Success',["positionClass" => "toast-top-right"]);
             return redirect()->route('dashboard')->with('success','Welcome to Lake Hospital Dashboard');
                
    }
}
