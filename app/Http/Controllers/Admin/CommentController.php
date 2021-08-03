<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pending()
    {
        $comments = Comment::whereStatus(0)->get();
        return view('admin_dashboard.comment.pending', compact('comments'));
    }

    public function approved()
    {
        $comments = Comment::whereStatus(1)->get();
        return view('admin_dashboard.comment.approved', compact('comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('admin_dashboard.comment.edit-pending', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'status' => 'required',
        ]);
        
        $comment->status = $request->input('status');
        if ($comment->save()) {
            return redirect()->route('admin.comment.pending')->with('success', 'Comment successfully approved');
        } else {
            return redirect()->route('admin.comment.pending')->with('error', 'Comment not approved');
        }
        
    }

    public function destroyPending(Comment $comment)
    {
        $deleted = $comment->delete();
        if ($deleted) {
            return redirect()->route('admin.comment.pending')->with('success', 'Comment successfully deleted');
        } else {
            return redirect()->route('admin.comment.pending')->with('error', 'Comment not deleted');
        }
    }

    public function destroyApproved(Comment $comment)
    {
        $deleted = $comment->delete();
        if ($deleted) {
            return redirect()->route('admin.comment.approved')->with('success', 'Comment successfully deleted');
        } else {
            return redirect()->route('admin.comment.approved')->with('error', 'Comment not deleted');
        }
    }
}
