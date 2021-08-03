<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Navigation;

class GalleryController extends Controller
{
    //
    public function gallery(){
        $data['navigations'] = Navigation::all();
        return view('homepage.gallery',$data);
    }
}
