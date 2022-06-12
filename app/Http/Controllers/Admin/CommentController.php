<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Comment::all();
        return view('admin.comment.index',[
            'data' => $data
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comment  $comments
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comments, $id)
    {
        $data=Comment::find($id);
        return view('admin.comment.show',[
            'data' => $data,

        ]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comment  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment, $id)
    {
        $data=Comment::find($id);
        $data->delete();
        return redirect('/admin/comment');
    }

    public function approve($comment_id){
        $comment=Comment::find($comment_id);
        $comment->status="Online";
        $comment->save();

        return redirect('/admin/comment');
    }
}
