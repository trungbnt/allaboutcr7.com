<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Goal;

class GoalController extends Controller
{
    public function getDanhSach() {
    	$goal = Goal::all();     
    	return view('admin.goal.danhsach', ['goal'=>$goal]);
    }

    public function getSua($id) {
    	$goal = Goal::find($id);
    	return view('admin.goal.sua', ['goal'=>$goal]);
    }

    public function postSua(Request $request, $id) {
    	$goal = Goal::find($id);
        
        $goal->matchday = $request->matchday;
        $goal->nameLeague = $request->nameLeague;
        $goal->nameClub = $request->nameClub;
        $goal->result = $request->result;
        $goal->nameCompertitor = $request->nameCompertitor;
        $goal->goal = $request->goal;
        $goal->yellow = $request->yellow;
        $goal->red = $request->red;
        $goal->info = $request->info;
        
        $goal->save();

    	return redirect('admin/goal/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
    	return view('admin.goal.them');
    }

    public function postThem(Request $request) {

    	$goal = new Goal;
    	
        $goal->matchday = $request->matchday;
        $goal->nameLeague = $request->nameLeague;
        $goal->nameClub = $request->nameClub;
        $goal->result = $request->result;
        $goal->nameCompertitor = $request->nameCompertitor;
        $goal->goal = $request->goal;
        $goal->yellow = $request->yellow;
        $goal->red = $request->red;
        $goal->info = $request->info;

    	$goal->save();

    	return redirect('admin/goal/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$goal = Goal::find($id);
    	$goal->delete();

    	return redirect('admin/goal/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
