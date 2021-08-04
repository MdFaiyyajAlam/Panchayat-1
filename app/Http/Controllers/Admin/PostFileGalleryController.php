<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PostFileGallery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostFileGalleryController extends Controller
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
     * @param  \App\Models\PostFileGallery  $postFileGallery
     * @return \Illuminate\Http\Response
     */
    public function show(PostFileGallery $postFileGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostFileGallery  $postFileGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(PostFileGallery $postFileGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostFileGallery  $postFileGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostFileGallery $postFileGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostFileGallery  $postFileGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostFileGallery $postFileGallery)
    {
        // 
    }
}
