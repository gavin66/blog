<?php namespace App\Providers;

use App\Facades\Test;
use App\Services\TestService;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('test',function(){
			return new Test();
		});

		$this->app->singleton('testC',function(){
			return new TestService();
		});

		$this->app->bind('App\Contracts\TestContract',function(){
			return new TestService();
		});
	}

}
