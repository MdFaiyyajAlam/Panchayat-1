<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Navigation;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['navigations'] = Navigation::get();
        return view('homepage.index',$data);
    }
}
