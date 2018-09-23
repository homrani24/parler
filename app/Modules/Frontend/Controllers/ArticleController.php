<?php

namespace App\Modules\Backend\Controllers;

use Illuminate\Http\Request;
// use Yajra\Datatables\Facades\Datatables;
use App\Http\Controllers\Controller;
use App\Modules\backend\models\Article;
// use View;
class ArticleController extends Controller
{
    public function index()
    {
        // $art=Article::all();
        // Add view path
        // View::addLocation(app_path('Modules\Backend').'\Views');
    
        return view("table");

    }

    public function get_datatable()
    {
		// Using Eloquent
        // return Datatables::eloquent(Article::query())->make(true);
        return datatables()->eloquent(Article::query())->toJson();

    //    return Datatables::of(Article::all())->make();

    }

}
