<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\National;

class NationalController extends Controller
{
    public function getDanhSach() {
    	$national = National::all();     
    	return view('admin.national.danhsach', ['national'=>$national]);
    }

    public function getSua($id) {
    	$national = National::find($id);
    	return view('admin.national.sua', ['national'=>$national]);
    }

    public function postSua(Request $request, $id) {
    	$national = National::find($id);
        
        $national->nameNational = $request->nameNational;
        $national->season = $request->season;
        $national->clotherNumber = $request->clotherNumber;
        
        $national->save();

    	return redirect('admin/national/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
    	return view('admin.national.them');
    }

    public function postThem(Request $request) {

    	$national = new National;
    	$national->nameNational = $request->nameNational;
        $national->season = $request->season;
        $national->clotherNumber = $request->clotherNumber;
        
    	$national->save();

    	return redirect('admin/national/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$national = National::find($id);
    	$national->delete();

    	return redirect('admin/national/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
