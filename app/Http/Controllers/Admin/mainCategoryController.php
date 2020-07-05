<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\main_categories;
use Illuminate\Support\Facades\Config;
class mainCategoryController extends Controller
{
    public function index(){
        return $default_lang =getDefaultLang();
        // $categories = main_categories::where('translation_lang',default_lang)->Selection()->get();
        // return view('admin.categories.index',compact('categories'));
    }
}
