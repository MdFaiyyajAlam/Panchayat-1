<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Navigation;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donate(){
        $data['navigations'] = Navigation::all();
        return view('homepage.donate', $data);
    }
}
