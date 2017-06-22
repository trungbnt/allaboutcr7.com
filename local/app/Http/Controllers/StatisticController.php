<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Statistic;
use App\TypeStatistic;
use App\TypeLeague;

class StatisticController extends Controller
{
    public function getDanhSach() {
    	$statistic = Statistic::all();
    	return view('admin.statistic.danhsach', ['statistic'=>$statistic]);
    }

    public function getSua($id) {
        $typestatistic = TypeStatistic::all();
        $typeleague = TypeLeague::all();
    	$statistic = Statistic::find($id);
    	return view('admin.statistic.sua', ['statistic'=>$statistic, 'typestatistic'=>$typestatistic, 'typeleague' => $typeleague]);
    }

    public function postSua(Request $request, $id) {
    	$statistic = Statistic::find($id);
    	
    	$statistic->nameTeam = $request->nameTeam;
        $statistic->season = $request->season; 
        $statistic->idTypeStatistic = $request->TypeStatistic;
        $statistic->idTypeLeague = $request->TypeLeague; 
        $statistic->game = $request->game;
        $statistic->goal = $request->goal;      

    	$statistic->save();

    	return redirect('admin/statistic/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
        $typestatistic = TypeStatistic::all();        
        $typeleague = TypeLeague::all();
    	return view('admin.statistic.them', ['typestatistic'=>$typestatistic, 'typeleague' => $typeleague]);
    }

    public function postThem(Request $request) {
    	$statistic = new Statistic;

    	$statistic->nameTeam = $request->nameTeam;
        $statistic->season = $request->season; 
        $statistic->idTypeStatistic = $request->TypeStatistic;
        $statistic->idTypeLeague = $request->TypeLeague; 
        $statistic->game = $request->game;
        $statistic->goal = $request->goal; 

    	$statistic->save();

    	return redirect('admin/statistic/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$statistic = Statistic::find($id);
    	$statistic->delete();

    	return redirect('admin/statistic/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
