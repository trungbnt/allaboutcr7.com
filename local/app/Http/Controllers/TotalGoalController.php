<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TotalGoal;

class TotalGoalController extends Controller
{
    public function getDanhSach() {
    	$totalgoal = TotalGoal::all();     
    	return view('admin.totalgoal.danhsach', ['totalgoal'=>$totalgoal]);
    }

    public function getSua($id) {
    	$totalgoal = TotalGoal::find($id);
    	return view('admin.totalgoal.sua', ['totalgoal'=>$totalgoal]);
    }

    public function postSua(Request $request, $id) {
    	$totalgoal = TotalGoal::find($id);
        
        $totalgoal->leftFoot = $request->leftFoot;
        $totalgoal->rightFoot = $request->rightFoot;
        $totalgoal->header = $request->header;
        $totalgoal->other = $request->other;
        $totalgoal->inside = $request->inside;
        $totalgoal->outside = $request->outside;
        $totalgoal->freekick = $request->freekick;
        $totalgoal->pen = $request->pen;
        $totalgoal->total = $request->total;
        
        $totalgoal->save();

    	return redirect('admin/totalgoal/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
    	return view('admin.totalgoal.them');
    }

    public function postThem(Request $request) {

    	$totalgoal = new TotalGoal;
    	
        $totalgoal->leftFoot = $request->leftFoot;
        $totalgoal->rightFoot = $request->rightFoot;
        $totalgoal->header = $request->header;
        $totalgoal->other = $request->other;
        $totalgoal->inside = $request->inside;
        $totalgoal->outside = $request->outside;
        $totalgoal->freekick = $request->freekick;
        $totalgoal->pen = $request->pen;
        $totalgoal->total = $request->total;

    	$totalgoal->save();

    	return redirect('admin/totalgoal/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$totalgoal = TotalGoal::find($id);
    	$totalgoal->delete();

    	return redirect('admin/totalgoal/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
