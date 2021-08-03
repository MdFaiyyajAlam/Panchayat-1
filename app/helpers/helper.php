<?php

use App\Models\Navigation;
use App\Models\Category;

if(!function_exists('navigations')){
    function navigations(){
       return $url  =  Navigation::get();;
    }
}

if(!function_exists('category')){
    function category($id){
       return $url  =  Category::where(['id' => $id])->first();
    }
}

?>
