<?php
namespace App\Http\Controllers\Home;

use App\Models\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Navigation;

class PostController extends Controller
{
    public function show($slug){
        $post = Post::whereSlug($slug)->first();
        $navigations = Navigation::get();
        return view('homepage.view', compact(['post', 'navigations']));
    }
}
