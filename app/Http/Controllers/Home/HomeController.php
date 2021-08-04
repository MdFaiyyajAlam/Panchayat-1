<?php
namespace App\Http\Controllers\Home;

use App\Models\Post;
use App\Models\Navigation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $data['navigations'] = Navigation::get();
        $data['posts'] = Post::where('slider',1);
        return view('homepage.index',$data);
    }
}
