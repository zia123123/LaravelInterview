<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;

class PostController extends Controller
{
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

    // kita gunakan observer

    public function myPost(){
    $post = Post::where(['user_id' => auth()->user()->id
        ])->get();
    }

    public function ContentPost(){

        // // $this->user = factory(User::class,5)->create();
        // $this->comment = factory(Comment::class,5)->create();
         $post = Post::with('user')->get();
         //$users = User::with('post.comment')->get();

         $array = User::all();

         $comments = Comment::all();
    

        return view('home', compact('array','post','comments'));
    }
    //  public function UserListGuest(){
    //     $user = User::all();
    //     foreach($user as $users){
    //     $comments = Comment::with('post.user')->find($users['id']);
    //     if ($comments === null) {
    //        $name = $comments[$name];
    //        $email = $comments[$email];
    //        $website = $comments[$website];
    //        $comment = $comments[$comment];
    //        $post_id = $comments[$post_id];
    //     } 
    //     }
    //     return view('home', compact('name','email','website','comment','post_id'));
    // }



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
