<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Navigation;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $data['navigations'] = Navigation::all();
        return view('homepage.about',$data);
    }
}
