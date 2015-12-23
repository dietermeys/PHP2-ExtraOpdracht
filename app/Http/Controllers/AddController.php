<?php

namespace App\Http\Controllers;

use App\Add;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AddController extends Controller
{
    public function getContent(){

        if (!Auth::check())
        {
            return redirect('/login')->with('error','You need to be logged in!');
        }

        $blogs = Add::all();
        $comments = Comment::all();

        return view('blog.content',compact('blogs', 'comments'));


    }

    public function getAddContent(){

        if (!Auth::check()){
            return redirect('/login') ->with('message', 'You need to be logged in!');
        }

        return view('blog.add');

    }

    public function postAddContent(){

        $url = Input::get('url');

        if(strpos($url, 'youtube.com/watch?v=') !== FALSE)
        {

            $type = 'Youtube';
            $pieces = explode("v=", $url);
            $mediaId = $pieces[1];

        }
        else if(strpos($url, 'vimeo.com/channels/') !== FALSE)
        {
            $type = 'Vimeo';
            $pieces = explode("/", $url);
            $mediaId = $pieces[5];

        }
        else if(strpos($url, 'soundcloud.com/') !== FALSE)
        {

            $type = 'Soundcloud';
            $mediaId = 'null';

        }
        else
        {

            return redirect('/add')->with('error','Cant use url!');

        }

        $userId = Auth::id();

        $post = new Add();

        $post->url = $url;
        $post->type = $type;
        $post->userId = $userId;
        $post->mediaId = $mediaId;
        $post->save();

        return redirect('/content')->with('success','Post successfully created!');

    }
    public function postComment()
    {
        $contentComment = Input::get('comment');
        $contentId = Input::get('content');
        $userId = Auth::id();

        $comment = new Comment();

        $comment->comment = $contentComment;
        $comment->userId = $userId;
        $comment->contentId = $contentId;
        $comment->save();

        return redirect('/content')->with('succes', 'Comment posted!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
