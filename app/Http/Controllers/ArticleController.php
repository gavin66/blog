<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {

	public function lists(Request $request){
        return 'lists';
    }

    public function edit(Request $request){

        return 'edit';
    }



}
