<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
//		Model::unguard();

		$this->call('ArticleTableSeeder');

	}

}

class ArticleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('articles')->delete();

		for($i=0;$i<20;$i++){
			Article::create([
				'title'=>'标题'.$i,
				'content_md'=>'md内容'.$i,
				'content_html'=>'html内容'.$i
			]);
		}

		$this->command->info('文章表填充数据完成!');
	}

}
