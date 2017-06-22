<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Profile;

class ProfileController extends Controller
{
    public function getDanhSach() {
    	$profile = Profile::all();     
    	return view('admin.profile.danhsach', ['profile'=>$profile]);
    }

    public function getSua($id) {
    	$profile = Profile::find($id);
    	return view('admin.profile.sua', ['profile'=>$profile]);
    }

    public function postSua(Request $request, $id) {
    	$profile = Profile::find($id);
        
        $profile->name = $request->name;
        $profile->dob = $request->dob;
        $profile->pob = $request->pob;
        $profile->height = $request->height;
        $profile->weight = $request->weight;
        $profile->position = $request->position;
        $profile->foot = $request->foot;
        $profile->save();

    	return redirect('admin/profile/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }
}
