<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Club;
use App\TypeClub;

class ClubController extends Controller
{
    public function getDanhSach() {
    	$club = Club::all();
    	return view('admin.club.danhsach', ['club'=>$club]);
    }

    public function getSua($id) {
        $typeclub = TypeClub::all();
    	$club = Club::find($id);
    	return view('admin.club.sua', ['club'=>$club, 'typeclub'=>$typeclub]);
    }

    public function postSua(Request $request, $id) {
    	$club = Club::find($id);
    	
    	$club->nameClub = $request->nameClub;
        $club->season = $request->season; 
        $club->clotherNumber = $request->clotherNumber;       
        $club->idTypeClub = $request->TypeClub;

    	$club->save();

    	return redirect('admin/club/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
        $typeclub = TypeClub::all();
    	return view('admin.club.them', ['typeclub'=>$typeclub]);
    }

    public function postThem(Request $request) {
    	$club = new Club;

    	$club->nameClub = $request->nameClub;
        $club->season = $request->season; 
        $club->clotherNumber = $request->clotherNumber;       
        $club->idTypeClub = $request->TypeClub;

    	$club->save();

    	return redirect('admin/club/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$club = Club::find($id);
    	$club->delete();

    	return redirect('admin/club/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
