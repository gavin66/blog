<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */

	// 注册登录后重定向链接
	protected $redirectPath = '/backend';

	// 登录的链接(登录失败后重定向)
	protected $loginPath = '/auth/login';

	public function __construct(Guard $auth, Registrar $registrar){
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
	 * 重写登录请求,增加对ajax的支持
	 *
	 * @param Request $request
	 * @return $this|\Illuminate\Http\RedirectResponse
	 */
	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email', 'password' => 'required',
		]);
		$credentials = $request->only('email', 'password');

		if($request->ajax()){
			if ($this->auth->attempt($credentials, $request->has('remember'))) {
				return response()->json(['redirectPath'=>$this->redirectPath()],200);
			}
			return response()->json($this->getFailedLoginDetailMessage($credentials),422);
		}else {
			if ($this->auth->attempt($credentials, $request->has('remember')))
			{
				return redirect()->intended($this->redirectPath());
			}

			return redirect($this->loginPath())
				->withInput($request->only('email', 'remember'))
				->withErrors([
					'email' => '邮箱或密码有误.',
				]);
		}

	}

	/**
	 * 重写注册请求,增加对ajax的支持
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postRegister(Request $request){
		$validator = $this->registrar->validator($request->all());

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}

		$this->auth->login($this->registrar->create($request->all()));

		if($request->ajax()) return response()->json(['redirectPath'=>$this->redirectPath()],200);
		else return redirect($this->redirectPath());
	}

	/**
	 * 获取登录错误详细信息
	 *
	 * @return array
	 */
	protected function getFailedLoginDetailMessage($credentials){
		$re_array = [];

		$user = User::where('email',$credentials['email'])->first();

		if(empty($user)) {$re_array['email'] = '此邮箱未注册'; return $re_array;}

		$re_array['password']  = '密码输入有误'; return $re_array;
	}


}
