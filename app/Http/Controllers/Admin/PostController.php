<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostFile;
use App\Models\PostImage;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['category', 'subcategory', 'mainImage'])->get();
        return view('admin_dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postFormat()
    {
        return view('admin_dashboard.post.post-format');
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin_dashboard.post.create', compact('categories'));
    }

    public function getSubcategory(Request $request)
    {
        $category = $request->parent_id;
        $subcategory = Subcategory::where('category_id', $category)->get();
        $option = '';
        foreach ($subcategory as $list) {
            $option .= '<option value="'.$list->id.'">'.ucwords($list->name).'</option>';
        }
        return $option;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postImg = $request->input('additional_post_image_id');
        $postfiles = $request->input('post_selected_file_id');

        if (isset($request->scheduled_post)) {
            $scheduled = $request->input('date_published');
        } else {
            $scheduled = null;
        }

        $request->validate([
            'title' => 'required',
            'slug' => 'unique:posts,slug,',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $save = Post::create([
            'post_type' => trim(strtolower($request->input('post_type'))),
            'title' => trim(strtolower($request->input('title'))),
            'slug' => trim(strtolower($request->input('slug'))),
            'description' => trim(strtolower($request->input('description'))),
            'keywords' => trim(strtolower($request->input('keywords'))),
            'visibility' => $request->input('visibility'),
            'show_right_column' => $request->input('show_right_column'),
            'featured' => $request->input('is_featured') ?? 0,
            'breaking' => $request->input('is_breaking') ?? 0,
            'slider' => $request->input('is_slider') ?? 0,
            'recommended' => $request->input('is_recommended') ?? 0,
            'show_auth_user' => $request->input('show_auth') ?? 0,
            'send_subscriber' => $request->input('send_to_subscriber') ?? 0,
            'tags' => trim(strtolower($request->input('tags'))),
            'opt_url' => trim(strtolower($request->input('opt_url'))),
            'content' => trim(strtolower($request->input('content'))),
            'post_image_gallery_id' => $request->input('post_image_id'),
            'opt_image_url' => trim(strtolower($request->input('opt_main_image_url'))),
            'image_desc' => trim(strtolower($request->input('image_desc'))),
            'category_id' => $request->input('category_id'),
            'subcategory_id' => $request->input('subcategory_id'),
            'status' => $request->input('status'),
            'scheduled_post_date' => $scheduled,
        ]);

        return redirect()->route('admin.post.create')->with('success', 'Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $post->load(['category:id,name']);
        if (isset($post->post_image_gallery_id)) {
            $post->load(['mainImage:id,image']);
        }
        return view('admin_dashboard.post.edit', compact('post', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //    
    }

    public function bulkPost()
    {
        return view('admin_dashboard.post/bulk-post');
    }

    public function bulkPostUpload(Request $request)
    {
        return response($request);
    }
}
