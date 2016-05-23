<?php namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Response;
use RedisGo;
use App\Model\Article;

class FrontendController extends Controller {

    public function __construct() {

    }

    public function index() {
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

    public function article($id) {

        return response()->view('frontend.article',Article::find($id));

    }

    public function about() {

        return response()->view('frontend.about',Article::find(1));

    }

    public function category() {

        return response()->view('frontend.category',[]);

    }

    public function archive() {

        return response()->view('frontend.archive',[]);

    }

    public function thumbsUp(){

        $count = RedisGo::incr('watermelon_thumbs_up_count');

        return ['count'=>$count];
    }

}
