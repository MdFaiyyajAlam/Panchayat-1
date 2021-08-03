<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Navigation;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(){
        $data['navigations'] = Navigation::get();
        return view('homepage.category',$data);
    }
}
