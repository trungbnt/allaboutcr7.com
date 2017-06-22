<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Record;
use App\TypeRecord;

class RecordController extends Controller
{
    public function getDanhSach() {
    	$record = Record::all();
    	return view('admin.record.danhsach', ['record'=>$record]);
    }

    public function getSua($id) {
        $typerecord = TypeRecord::all();
    	$record = Record::find($id);
    	return view('admin.record.sua', ['record'=>$record, 'typerecord'=>$typerecord]);
    }

    public function postSua(Request $request, $id) {
    	$record = Record::find($id);
    	
    	$record->nameRecord = $request->nameRecord;
        $record->season = $request->season;       
        $record->idTypeRecord = $request->TypeRecord;

    	$record->save();

    	return redirect('admin/record/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
        $typerecord = TypeRecord::all();
    	return view('admin.record.them', ['typerecord'=>$typerecord]);
    }

    public function postThem(Request $request) {
    	$record = new Record;

    	$record->nameRecord = $request->nameRecord;
        $record->season = $request->season;       
        $record->idTypeRecord = $request->TypeRecord;

    	$record->save();

    	return redirect('admin/record/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$record = Record::find($id);
    	$record->delete();

    	return redirect('admin/record/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
