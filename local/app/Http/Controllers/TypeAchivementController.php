<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TypeAchivement;

class TypeAchivementController extends Controller
{
    public function getDanhSach() {
    	$typeachivement = TypeAchivement::all();
    	return view('admin.typeachivement.danhsach', ['typeachivement'=>$typeachivement]);
    }

    public function getSua($id) {
    	$typeachivement = TypeAchivement::find($id);
    	return view('admin.typeachivement.sua', ['typeachivement'=>$typeachivement]);
    }

    public function postSua(Request $request, $id) {
    	$typeachivement = TypeAchivement::find($id);

    	$typeachivement->nameTypeAchivement = $request->nameTypeAchivement;

    	$typeachivement->save();

    	return redirect('admin/typeachivement/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
    	return view('admin.typeachivement.them');
    }

    public function postThem(Request $request) {
    	$typeachivement = new TypeAchivement;

    	$typeachivement->nameTypeAchivement = $request->nameTypeAchivement;

    	$typeachivement->save();

    	return redirect('admin/typeachivement/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$typeachivement = TypeAchivement::find($id);
    	$typeachivement->delete();

    	return redirect('admin/typeachivement/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
