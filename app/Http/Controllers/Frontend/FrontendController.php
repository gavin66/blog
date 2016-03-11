<?php namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Response;
use App\Article;

class FrontendController extends Controller {


    public function __construct(){

    }

    public function index(){
        $search = Request::input('search');
        $sort = Request::input('sort','created_at');
        $order = Request::input('order','desc');
        $limit = Request::input('limit',10);
        $offset = Request::input('offset','0');

        $data =  [
            'total'=> Article::whereRaw('concat(title,content_md) like \'%'.$search.'%\'')->count(),
            'rows'=> Article::whereRaw('concat(title,content_md) like \'%'.$search.'%\'')->skip($offset)->take($limit)->orderBy($sort,$order)->get(),
        ];

        return Response::view('frontend.index',$data);
    }

}
