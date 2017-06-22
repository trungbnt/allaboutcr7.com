<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TypeLeague;

class TypeLeagueController extends Controller
{
    public function getDanhSach() {
    	$typeleague = TypeLeague::all();
    	return view('admin.typeleague.danhsach', ['typeleague'=>$typeleague]);
    }

    public function getSua($id) {
    	$typeleague = TypeLeague::find($id);
    	return view('admin.typeleague.sua', ['typeleague'=>$typeleague]);
    }

    public function postSua(Request $request, $id) {
    	$typeleague = TypeLeague::find($id);

    	$typeleague->nameTypeLeague = $request->nameTypeLeague;

    	$typeleague->save();

    	return redirect('admin/typeleague/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
    	return view('admin.typeleague.them');
    }

    public function postThem(Request $request) {
    	$typeleague = new TypeLeague;

    	$typeleague->nameTypeLeague = $request->nameTypeLeague;

    	$typeleague->save();

    	return redirect('admin/typeleague/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$typeleague = TypeLeague::find($id);
    	$typeleague->delete();

    	return redirect('admin/typeleague/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
