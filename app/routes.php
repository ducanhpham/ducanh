<?php

	/*
	|--------------------------------------------------------------------------
	| Application Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register all of the routes for an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the Closure to execute when that URI is requested.
	|
	*/

	Route::get('/', function()
		{
			echo "wawa";
			//return View::make('landing');
	});

	Route::get('check', function()
		{
			return View::make('check_email');
	});

	Route::get('list_code', function()
		{
			$rs = DB::table('info')->where('status',1)->get();
			return View::make('code_use',array('data'=>$rs));
	});

	Route::get('check_email', function()
		{
			$rs =DB::table('info')->where('email',Input::get('email'))->get();
			if(count($rs) >=1)
				return 'false';
			else
				return 'true';
	});

	Route::get('update', function()
		{
			$rs = DB::table('info')->where('code',Input::get('code'))
			->update(array('status'=> '1','time_use'=> date('H:i d/m/Y')));

			return Redirect::to('check');

	});

	Route::get('check_code', function()
		{
			$stt ="";
			$rs =DB::table('info')->where('code',Input::get('code'))->get();
			if(count($rs) >=1){
				if($rs[0]->status == 0)
					$stt ="chua" ;
				else
					$stt = "roi";
			}
			else
				$stt= 'sai';

			return $stt;
	});


	Route::post('send_email', function()
		{
			//generate code
			$code = "KS".substr(number_format(time() * mt_rand(),0,'',''),0,8);

			//luu du lieu vao db
			$input = Input::all();

			$arr = array(
				'email' =>$input['email'],
				'phone' =>$input['phone'],
				'visit' =>$input['visit'],
				'service' =>$input['service'],
				'code' =>$code,
				'status' =>0,
			);

			$rs = DB::table('info')->insert($arr);
			if($rs){
				$data['code'] = $code;
				Mail::send('emails', $data, function($message) {
					$message->to(Input::get('email'))->subject('Nhận Voucher 100k khi nghỉ đêm tại HoneyHouse Hotel !');
				});

				return Redirect::to('/')->with('message', 'ok');
			}
	});

