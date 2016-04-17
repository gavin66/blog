<?php namespace App\Http\Controllers\Backend;

use App\Model\Article;
use App\Http\Controllers\Controller;

use Request;

class ArticleController extends Controller {

	/**
	 * 显示文章列表(页面)
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Request::ajax() && array_key_exists('HTTP_X_PJAX',$_SERVER) && $_SERVER['HTTP_X_PJAX']){
			return response()->view('backend.article.index');
		}else if(Request::ajax()){
			$search = Request::input('search');
			$sort = Request::input('sort','created_at');
			$order = Request::input('order','desc');
			$limit = Request::input('limit',10);
			$offset = Request::input('offset','0');

//			\DB::enableQueryLog();
			//id,title,content_md,content_html,DATE_FORMAT(created_at,'%Y-%m-%d'),DATE_FORMAT(updated_at,'%Y-%m-%d')
			//'id','title','content_md','content_html','DATE_FORMAT(created_at,\'%Y-%m-%d\') as created_at','DATE_FORMAT(updated_at,\'%Y-%m-%d\') as updated_at'
//			$data = Article::select(\DB::raw('id,title,content_md,content_html,date_format(created_at,\'%Y-%m-%d\') as created_at,date_format(updated_at,\'%Y-%m-%d\') as updated_at'))->whereRaw('concat(title,content_md) like \'%'.$search.'%\'')->skip($offset)->take($limit)->orderBy($sort,$order)->get();
			$data = Article::whereRaw('concat(title,content_md) like \'%'.$search.'%\'')->skip($offset)->take($limit)->orderBy($sort,$order)->get();
			$total = Article::whereRaw('concat(title,content_md) like \'%'.$search.'%\'')->count();

			return [
				'total'=>$total,
				'rows'=>$data,
//				'log'=>\DB::connection()->getQueryLog(),
//				'ss'=>route('backend.article.edit',[1])
			];


		}

		return response('错误的列表',404);
	}

	/**
	 * 显示新建文章(页面)
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Request::ajax() && array_key_exists('HTTP_X_PJAX',$_SERVER) && $_SERVER['HTTP_X_PJAX']){
			return view('backend.article.create');
		}

		return response('错误的页面',404);
	}

	/**
	 * 保存一篇新文章
	 *
	 * @return Response
	 */
	public function store()
	{
        $article = Article::create(Request::all());
	}

	/**
	 * 显示特定文章详细(页面)
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//

		return response()->view('frontend.article',Article::find($id));

//		return Article::find($id);
	}

	/**
	 * 编辑特定文章(页面)
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return response()->view('backend.article.create',Article::findOrFail($id));
	}

	/**
	 * 更新特定文章
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$up_data = Request::all();

		Article::find($id)->fill($up_data)->save();
	}

	/**
	 * 删除文章
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Article::destroy($id);
	}

}
