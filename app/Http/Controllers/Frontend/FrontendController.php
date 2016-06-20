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
        $tags = Request::input('tags');
        $categories = Request::input('categories');

        $sort = Request::input('sort','created_at');
        $order = Request::input('order','desc');

        $searcher = Article::whereRaw('1=1');
        trim($tags) != '' && $searcher->whereRaw('tags like \'%"'.$tags.'"%\'');
        trim($categories) != '' && $searcher->whereRaw('categories like \'%"'.$categories.'"%\'');
        isset($sort) && isset($order) && $searcher->orderBy($sort,$order);
        $articles = $searcher->paginate(10);

        return Response::view('frontend.index',['articles'=>$articles]);
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
