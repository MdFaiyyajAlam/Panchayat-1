<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Navigation;

use Illuminate\Http\Request;

class StoriesController extends Controller
{
    //
    public function stories(){
        $data['navigations'] = Navigation::all();
        return view('homepage.stories',$data);
    }
}
