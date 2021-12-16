<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LopModel;
use Redirect;
class LopController extends Controller
{
    public function danh_sach_lop(){
        //Trả về view có tên danh-sach-lop
        $list = LopModel::danh_sach_lop();
        return view('danh-sach-lop',compact('list'));
    }
    public function them_lop(){
        return view('them-lop');
    }
    public function them_lop_xu_ly(Request $request){
        $lop = new LopModel;
        $lop->ten_lop = $request->ten_lop;
        $lop->them_lop_xu_ly();
        return Redirect::route("danh_sach_lop");
    }
}
