<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddAdminRequest;
use App\Http\Requests\EditAdminRequest;
use App\UserModel\users;
use Auth;
use Session;

class AdminController extends Controller
{
    public function getIndex(){
        return view('backend.trangchu');
    }

    public function getAdmin(){
        $user=users::paginate(5);
        return view('backend.listadmin',compact('user'));
    }

    public function getAddAdmin(){
        return view('backend.addadmin');
    }
    public function postAddAdmin(AddAdminRequest $request){

		$user = new users;
		$user->user_name = $request->input('user_name');
		$user->password = bcrypt($request->input('password'));
        $user->user_email = $request->input('user_email');
        $user->user_phone = $request->input('user_phone');
		$user->user_level = $request->input('user_level');

		if($request->hasFile('user_avatar')){

			$file = $request->user_avatar;
			$name = $file->getClientOriginalName();
			$duoi = $file->getClientOriginalExtension();
			$dd = $name.".".$duoi;
			$file->move('images/avatar',$dd);
			$user->user_avatar = $dd;
		}else {
			$user->user_avatar = "";
		}

		$user->save();
		Session::flash('addStatus','Thêm thông tin thành công');
		return redirect('admin/list');

    }

    public function getEditAdmin($id){
        $user = users::find($id);
        return view('backend.editadmin',compact('user'));
    }
    public function postEditAdmin(EditAdminRequest $request,$id){

        $user = users::find($id);
		$user->user_name = $request->input('user_name');
		$user->password = bcrypt($request->input('password'));
        $user->user_email = $request->input('user_email');
        $user->user_phone = $request->input('user_phone');
		$user->user_level = $request->input('user_level');

		if($request->hasFile('user_avatar')){

			$file = $request->user_avatar;
			$name = $file->getClientOriginalName();
			$duoi = $file->getClientOriginalExtension();
			$dd = $name.".".$duoi;
			$file->move('images/avatar',$dd);
			$user->user_avatar = $dd;
		}

		$user->save();
		Session::flash('EditStatus','Sửa thông tin thành công');
		return redirect('admin/list');

    }

    public function getDelete($id){

		users::where('id',$id)->delete();
		Session::flash('deleteStatus','Xóa thông tin thành công');
		return redirect('admin/list');

	}

    public function getListCate(){
        return view('backend.listcate');
    }

    public function getAddCate(){
        return view('backend.addcate');
    }

    public function getListCateChild(){
        return view('backend.listcatechild');
    }

    public function getAddCateChild(){
        return view('backend.addcatechild');
    }

    public function getListPro(){
        return view('backend.listproduct');
    }
    public function getAddPro(){
        return view('backend.addproduct');
    }

    public function getDetailPro(){
        return view('backend.detailproduct');
    }

    public function getAddColor(){
        return view('backend.addcolorpro');
    }

    public function getOrder(){
        return view('backend.order');
    }
    public function getDetailOrder(){
        return view('backend.detailorder');
    }


    public function getComment(){
        return view('backend.comment');
    }
    public function logOut(){

		Auth::logout(); //Bản chất là xóa rememberToken
		return redirect('login');}
}
