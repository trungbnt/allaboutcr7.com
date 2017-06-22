<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Card;

class CardController extends Controller
{
    public function getDanhSach() {
    	$card = Card::all();     
    	return view('admin.card.danhsach', ['card'=>$card]);
    }

    public function getSua($id) {
    	$card = Card::find($id);
    	return view('admin.card.sua', ['card'=>$card]);
    }

    public function postSua(Request $request, $id) {
    	$card = Card::find($id);
        
        $card->matchday = $request->matchday;
        $card->nameClub = $request->nameClub;
        $card->nameCompertitor = $request->nameCompertitor;
        $card->nameLeague = $request->nameLeague;
        $card->card = $request->card;
        
        $card->save();

    	return redirect('admin/card/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
    	return view('admin.card.them');
    }

    public function postThem(Request $request) {

    	$card = new Card;
    	
        $card->matchday = $request->matchday;
        $card->nameClub = $request->nameClub;
        $card->nameCompertitor = $request->nameCompertitor;
        $card->nameLeague = $request->nameLeague;
        $card->card = $request->card;

    	$card->save();

    	return redirect('admin/card/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$card = Card::find($id);
    	$card->delete();

    	return redirect('admin/card/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }
}
