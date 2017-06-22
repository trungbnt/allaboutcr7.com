<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{
    public function getDanhSach() {
    	$user = User::all();     
    	return view('admin.user.danhsach', ['user'=>$user]);
    }

    public function getSua($id) {
    	$user = User::find($id);
    	return view('admin.user.sua', ['user'=>$user]);
    }

    public function postSua(Request $request, $id) {
    	$user = User::find($id);
        $this->validate($request, 
            [
                'name' => 'required|min:3'
            ],
            [
                'name.required' => 'Chưa nhập tên',
                'name.min' => 'Tối thiểu 3 ký tự'
            ]);

        $user->name = $request->name;
        $user->quyen = $request->quyen;
        if($request->changePassword == "on")
        {
            $this->validate($request, 
            [
                'password' => 'required|min:6|max:32',
                'passwordAgain' => 'required|same:password'
            ],
            [
                'password.required' => 'Chưa nhập mật khẩu',
                'password.min' => 'Tối thiểu 6 ký tự',
                'password.max' => 'Tối đa 32 ký tự',
                'passwordAgain.required' => 'Chưa nhập lại mật khẩu',
                'passwordAgain.same' => 'Mật khẩu không khớp nhau'
            ]);
            $user->password = bcrypt($request->password);
        }

        $user->save();

    	return redirect('admin/user/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getThem() {
    	return view('admin.user.them');
    }

    public function postThem(Request $request) {
    	$this->validate($request, 
    		[
                'name' => 'required|min:3',
    			'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:32',
                'passwordAgain' => 'required|same:password'
    		],
    		[
                'name.required' => 'Chưa nhập tên',
                'name.min' => 'Tối thiểu 3 ký tự',
    			'email.required' => 'Chưa nhập email',
                'email.email' => 'Email không hợp lệ',
                'email.unique' => 'Email này đã tồn tại',
                'password.required' => 'Chưa nhập mật khẩu',
    			'password.min' => 'Tối thiểu 6 ký tự',
    			'password.max' => 'Tối đa 32 ký tự',
                'passwordAgain.required' => 'Chưa nhập lại mật khẩu',
                'passwordAgain.same' => 'Mật khẩu không khớp nhau'
    		]);

    	$user = new User;
    	$user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->quyen = $request->quyen;
    	$user->save();

    	return redirect('admin/user/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getXoa($id) {
    	$user = User::find($id);
    	$user->delete();

    	return redirect('admin/user/danhsach')->with('thongbao', 'Bạn đã xóa thành công!');
    }

    public function getdangnhapAdmin(){
        return view('admin.login');
    }

    public function postdangnhapAdmin(Request $request){
        $this->validate($request, 
            [
                'email' => 'required',
                'password' => 'required|min:6|max:32'
            ],
            [
                'email.required' => 'Chưa nhập email',
                'password.required' => 'Chưa nhập mật khẩu',
                'password.min' => 'Tối thiểu 6 ký tự',
                'password.max' => 'Tối đa 32 ký tự',
            ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            return redirect('admin/profile/danhsach');
        }
        else
        {
            return redirect('admin/dangnhap')->with('thongbao', 'Đăng nhập không thành công!');
        }
    }

    public function getDangXuatAdmin(){
        Auth::logout();
        return redirect('admin/dangnhap')->with('thongbao', 'Đăng xuất thành công!');
    }
}
