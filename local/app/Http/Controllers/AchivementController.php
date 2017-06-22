<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Achivement;
use App\TypeAchivement;

class AchivementController extends Controller
{
    public function getDanhSach() {
    	$achivement = Achivement::all();
    	return view('admin.achivement.danhsach', ['achivement'=>$achivement]);
    }

    public function getSua($id) {
        $typeachivement = TypeAchivement::all();
    	$achivement = Achivement::find($id);
    	return view('admin.achivement.sua', ['achivement'=>$achivement, 'typeachivement'=>$typeachivement]);
    }

    public function postSua(Request $request, $id) {
    	$achivement = Achivement::find($id);
    	
    	$achivement->nameTeam = $request->nameTeam;
        $achivement->nameLeague = $request->nameLeague;
        $achivement->season = $request->season;       
        $achivement->idTypeAchivement = $request->TypeAchivement;
        if($request->hasFile('hinh'))
        {
            $file = $request->file('hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png')
            {
                return redirect('admin/achivement/them')->with('loi', 'Chỉ chọn file có đuôi: jpg, jpeg, png');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(6)."_".$name;
            while (file_exists("upload/achivement/".$hinh)) {
                $hinh = str_random(6)."_".$name;
            }
            $file->move("upload/achivement", $hinh);
            /*unlink("upload/achivement/".$achivement->hinh);*/
            $achivement->hinh = $hinh;
        }

    	$achivement->save();

    	return redirect('admin/achivement/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
        $typeachivement = TypeAchivement::all();
    	return view('admin.achivement.them', ['typeachivement'=>$typeachivement]);
    }

    public function postThem(Request $request) {
    	$achivement = new Achivement;

    	$achivement->nameTeam = $request->nameTeam;
        $achivement->nameLeague = $request->nameLeague;
        $achivement->season = $request->season;       
        $achivement->idTypeAchivement = $request->TypeAchivement;
        if($request->hasFile('hinh'))
        {
            $file = $request->file('hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png')
            {
                return redirect('admin/achivement/them')->with('loi', 'Chỉ chọn file có đuôi: jpg, jpeg, png');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(6)."_".$name;
            while (file_exists("upload/achivement/".$hinh)) {
                $hinh = str_random(6)."_".$name;
            }
            $file->move("upload/achivement", $hinh);
            $achivement->hinh = $hinh;
        }
        else
        {
            $achivement->hinh = "";
        }

    	$achivement->save();

    	return redirect('admin/achivement/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$achivement = Achivement::find($id);
    	$achivement->delete();

    	return redirect('admin/achivement/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
