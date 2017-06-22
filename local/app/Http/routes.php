<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'PageController@statistic');

Route::get('admin', 'UserController@getdangnhapAdmin');
Route::post('admin', 'UserController@postdangnhapAdmin');
Route::get('admin/dangnhap', 'UserController@getdangnhapAdmin');
Route::post('admin/dangnhap', 'UserController@postdangnhapAdmin');
Route::get('admin/logout', 'UserController@getdangxuatAdmin');

Route::group(['prefix'=>'admin', 'middleware' => 'adminLogin'], function(){
	Route::group(['prefix'=>'profile'], function(){
		Route::get('danhsach', 'ProfileController@getDanhSach');

		Route::get('sua/{id}', 'ProfileController@getSua');

		Route::post('sua/{id}', 'ProfileController@postSua');
	});

	Route::group(['prefix'=>'typeclub'], function(){
		Route::get('danhsach', 'TypeClubController@getDanhSach');

		Route::get('sua/{id}', 'TypeClubController@getSua');

		Route::post('sua/{id}', 'TypeClubController@postSua');

		Route::get('them', 'TypeClubController@getThem');

		Route::post('them', 'TypeClubController@postThem');

		Route::get('xoa/{id}', 'TypeClubController@getXoa');
	});

	Route::group(['prefix'=>'club'], function(){
		Route::get('danhsach', 'ClubController@getDanhSach');

		Route::get('sua/{id}', 'ClubController@getSua');

		Route::post('sua/{id}', 'ClubController@postSua');

		Route::get('them', 'ClubController@getThem');

		Route::post('them', 'ClubController@postThem');

		Route::get('xoa/{id}', 'ClubController@getXoa');
	});

	Route::group(['prefix'=>'national'], function(){
		Route::get('danhsach', 'NationalController@getDanhSach');

		Route::get('sua/{id}', 'NationalController@getSua');

		Route::post('sua/{id}', 'NationalController@postSua');

		Route::get('them', 'NationalController@getThem');

		Route::post('them', 'NationalController@postThem');

		Route::get('xoa/{id}', 'NationalController@getXoa');
	});

	Route::group(['prefix'=>'goal'], function(){
		Route::get('danhsach', 'GoalController@getDanhSach');

		Route::get('sua/{id}', 'GoalController@getSua');

		Route::post('sua/{id}', 'GoalController@postSua');

		Route::get('them', 'GoalController@getThem');

		Route::post('them', 'GoalController@postThem');

		Route::get('xoa/{id}', 'GoalController@getXoa');
	});

	Route::group(['prefix'=>'card'], function(){
		Route::get('danhsach', 'CardController@getDanhSach');

		Route::get('sua/{id}', 'CardController@getSua');

		Route::post('sua/{id}', 'CardController@postSua');

		Route::get('them', 'CardController@getThem');

		Route::post('them', 'CardController@postThem');

		Route::get('xoa/{id}', 'CardController@getXoa');
	});

	Route::group(['prefix'=>'totalgoal'], function(){
		Route::get('danhsach', 'TotalGoalController@getDanhSach');

		Route::get('sua/{id}', 'TotalGoalController@getSua');

		Route::post('sua/{id}', 'TotalGoalController@postSua');

		Route::get('them', 'TotalGoalController@getThem');

		Route::post('them', 'TotalGoalController@postThem');

		Route::get('xoa/{id}', 'TotalGoalController@getXoa');
	});

	Route::group(['prefix'=>'typeachivement'], function(){
		Route::get('danhsach', 'TypeAchivementController@getDanhSach');

		Route::get('sua/{id}', 'TypeAchivementController@getSua');

		Route::post('sua/{id}', 'TypeAchivementController@postSua');

		Route::get('them', 'TypeAchivementController@getThem');

		Route::post('them', 'TypeAchivementController@postThem');

		Route::get('xoa/{id}', 'TypeAchivementController@getXoa');
	});

	Route::group(['prefix'=>'achivement'], function(){
		Route::get('danhsach', 'AchivementController@getDanhSach');

		Route::get('sua/{id}', 'AchivementController@getSua');

		Route::post('sua/{id}', 'AchivementController@postSua');

		Route::get('them', 'AchivementController@getThem');

		Route::post('them', 'AchivementController@postThem');

		Route::get('xoa/{id}', 'AchivementController@getXoa');
	});

	Route::group(['prefix'=>'typerecord'], function(){
		Route::get('danhsach', 'TypeRecordController@getDanhSach');

		Route::get('sua/{id}', 'TypeRecordController@getSua');

		Route::post('sua/{id}', 'TypeRecordController@postSua');

		Route::get('them', 'TypeRecordController@getThem');

		Route::post('them', 'TypeRecordController@postThem');

		Route::get('xoa/{id}', 'TypeRecordController@getXoa');
	});

	Route::group(['prefix'=>'record'], function(){
		Route::get('danhsach', 'RecordController@getDanhSach');

		Route::get('sua/{id}', 'RecordController@getSua');

		Route::post('sua/{id}', 'RecordController@postSua');

		Route::get('them', 'RecordController@getThem');

		Route::post('them', 'RecordController@postThem');

		Route::get('xoa/{id}', 'RecordController@getXoa');
	});

	Route::group(['prefix'=>'typeleague'], function(){
		Route::get('danhsach', 'TypeLeagueController@getDanhSach');

		Route::get('sua/{id}', 'TypeLeagueController@getSua');

		Route::post('sua/{id}', 'TypeLeagueController@postSua');

		Route::get('them', 'TypeLeagueController@getThem');

		Route::post('them', 'TypeLeagueController@postThem');

		Route::get('xoa/{id}', 'TypeLeagueController@getXoa');
	});

	Route::group(['prefix'=>'typestatistic'], function(){
		Route::get('danhsach', 'TypeStatisticController@getDanhSach');

		Route::get('sua/{id}', 'TypeStatisticController@getSua');

		Route::post('sua/{id}', 'TypeStatisticController@postSua');

		Route::get('them', 'TypeStatisticController@getThem');

		Route::post('them', 'TypeStatisticController@postThem');

		Route::get('xoa/{id}', 'TypeStatisticController@getXoa');
	});

	Route::group(['prefix'=>'statistic'], function(){
		Route::get('danhsach', 'StatisticController@getDanhSach');

		Route::get('sua/{id}', 'StatisticController@getSua');

		Route::post('sua/{id}', 'StatisticController@postSua');

		Route::get('them', 'StatisticController@getThem');

		Route::post('them', 'StatisticController@postThem');

		Route::get('xoa/{id}', 'StatisticController@getXoa');
	});

	Route::group(['prefix'=>'user'], function(){
		Route::get('danhsach', 'UserController@getDanhSach');

		Route::get('sua/{id}', 'UserController@getSua');

		Route::post('sua/{id}', 'UserController@postSua');

		Route::get('them', 'UserController@getThem');

		Route::post('them', 'UserController@postThem');

		Route::get('xoa/{id}', 'UserController@getXoa');
	});
});

Route::get('home', 'PageController@trangchu');
Route::get('home', 'PageController@profile');
Route::get('home', 'PageController@statistic');
Route::get('social', 'PageController@twitter');
Route::get('carrers', 'PageController@carrers');

Route::post('timkiem', 'PageController@timkiem');
