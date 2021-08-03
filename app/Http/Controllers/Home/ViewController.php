<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Navigation;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view(){
        $data['navigations']= Navigation::all();
        return View('homepage.view',$data);
    }
}
