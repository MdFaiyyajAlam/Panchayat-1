<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PostImageGallery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostImageGalleryController extends Controller
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
     * @param  \App\Models\PostImageGallery  $postImageGallery
     * @return \Illuminate\Http\Response
     */
    public function show(PostImageGallery $postImageGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostImageGallery  $postImageGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(PostImageGallery $postImageGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostImageGallery  $postImageGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostImageGallery $postImageGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostImageGallery  $postImageGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostImageGallery $postImageGallery)
    {
        // 
    }
}
