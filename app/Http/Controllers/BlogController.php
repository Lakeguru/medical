<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog()
    {
        return view('Blogs.blog');
    }

    public function blogdetails()
    {
        return view('Blogs.blogdetails');
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
            'image'=> 'required',
        ]);

        dd($request->all());
    }
}
