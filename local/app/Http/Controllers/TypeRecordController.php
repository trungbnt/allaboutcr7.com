<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TypeRecord;

class TypeRecordController extends Controller
{
    public function getDanhSach() {
    	$typerecord = TypeRecord::all();
    	return view('admin.typerecord.danhsach', ['typerecord'=>$typerecord]);
    }

    public function getSua($id) {
    	$typerecord = TypeRecord::find($id);
    	return view('admin.typerecord.sua', ['typerecord'=>$typerecord]);
    }

    public function postSua(Request $request, $id) {
    	$typerecord = TypeRecord::find($id);

    	$typerecord->nameTypeRecord = $request->nameTypeRecord;

    	$typerecord->save();

    	return redirect('admin/typerecord/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
    	return view('admin.typerecord.them');
    }

    public function postThem(Request $request) {
    	$typerecord = new TypeRecord;

    	$typerecord->nameTypeRecord = $request->nameTypeRecord;

    	$typerecord->save();

    	return redirect('admin/typerecord/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$typerecord = TypeRecord::find($id);
    	$typerecord->delete();

    	return redirect('admin/typerecord/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
