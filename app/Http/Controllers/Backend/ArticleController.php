<?php namespace App\Http\Controllers\Backend;

use App\Article;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {

	/**
	 * 显示文章列表(页面)
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		if($request->ajax() && array_key_exists('HTTP_X_PJAX',$_SERVER) && $_SERVER['HTTP_X_PJAX']){
			return view('backend.article');
		}else if($request->ajax()){
			$search = $request->input('search');
			$sort = $request->input('sort','created_at');
			$order = $request->input('order','desc');
			$limit = $request->input('limit',10);
			$offset = $request->input('offset','0');

			\DB::enableQueryLog();//id,title,content_md,content_html,DATE_FORMAT(created_at,'%Y-%m-%d'),DATE_FORMAT(updated_at,'%Y-%m-%d')
			//'id','title','content_md','content_html','DATE_FORMAT(created_at,\'%Y-%m-%d\') as created_at','DATE_FORMAT(updated_at,\'%Y-%m-%d\') as updated_at'
//			$data = Article::select(\DB::raw('id,title,content_md,content_html,date_format(created_at,\'%Y-%m-%d\') as created_at,date_format(updated_at,\'%Y-%m-%d\') as updated_at'))->whereRaw('concat(title,content_md) like \'%'.$search.'%\'')->skip($offset)->take($limit)->orderBy($sort,$order)->get();
			$data = Article::whereRaw('concat(title,content_md) like \'%'.$search.'%\'')->skip($offset)->take($limit)->orderBy($sort,$order)->get();
			$total = Article::whereRaw('concat(title,content_md) like \'%'.$search.'%\'')->count();

			return [
				'total'=>$total,
				'rows'=>$data,
				'log'=>\DB::connection()->getQueryLog(),
				'ss'=>route('backend.article.edit',[1])
			];


		}

		return '文章列表';
	}

	/**
	 * 显示新建文章(页面)
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Request::ajax() && array_key_exists('HTTP_X_PJAX',$_SERVER) && $_SERVER['HTTP_X_PJAX']){
			return view('backend.article_create');
		}

		return '新建文章';
	}

	/**
	 * 保存一篇新文章
	 *
	 * @return Response
	 */
	public function store()
	{
		// 保存文章
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
	}

	/**
	 * 编辑特定文章(页面)
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		return '修改'.$id.'文章';
	}

	/**
	 * 更新特定文章
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * 删除文章
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
