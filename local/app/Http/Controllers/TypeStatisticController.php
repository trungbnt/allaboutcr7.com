<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TypeStatistic;

class TypeStatisticController extends Controller
{
    public function getDanhSach() {
    	$typestatistic = TypeStatistic::all();
    	return view('admin.typestatistic.danhsach', ['typestatistic'=>$typestatistic]);
    }

    public function getSua($id) {
    	$typestatistic = TypeStatistic::find($id);
    	return view('admin.typestatistic.sua', ['typestatistic'=>$typestatistic]);
    }

    public function postSua(Request $request, $id) {
    	$typestatistic = TypeStatistic::find($id);

    	$typestatistic->nameTypeStatistics = $request->nameTypeStatistics;

    	$typestatistic->save();

    	return redirect('admin/typestatistic/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
    	return view('admin.typestatistic.them');
    }

    public function postThem(Request $request) {
    	$typestatistic = new TypeStatistic;

    	$typestatistic->nameTypeStatistics = $request->nameTypeStatistics;

    	$typestatistic->save();

    	return redirect('admin/typestatistic/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$typestatistic = TypeStatistic::find($id);
    	$typestatistic->delete();

    	return redirect('admin/typestatistic/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
