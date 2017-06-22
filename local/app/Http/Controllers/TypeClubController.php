<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TypeClub;

class TypeClubController extends Controller
{
    public function getDanhSach() {
    	$typeclub = TypeClub::all();
    	return view('admin.typeclub.danhsach', ['typeclub'=>$typeclub]);
    }

    public function getSua($id) {
    	$typeclub = TypeClub::find($id);
    	return view('admin.typeclub.sua', ['typeclub'=>$typeclub]);
    }

    public function postSua(Request $request, $id) {
    	$typeclub = TypeClub::find($id);

    	$typeclub->nameTypeClub = $request->nameTypeClub;

    	$typeclub->save();

    	return redirect('admin/typeclub/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
    	return view('admin.typeclub.them');
    }

    public function postThem(Request $request) {
    	$typeclub = new TypeClub;

    	$typeclub->nameTypeClub = $request->nameTypeClub;

    	$typeclub->save();

    	return redirect('admin/typeclub/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$typeclub = TypeClub::find($id);
    	$typeclub->delete();

    	return redirect('admin/typeclub/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
