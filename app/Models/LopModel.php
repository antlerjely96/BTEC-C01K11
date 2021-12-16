<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class LopModel extends Model
{
    use HasFactory;
    public $id;
    public $ten_lop = "123";
    static public function danh_sach_lop(){
        $list = DB::select("SELECT * FROM lop");
        return $list;
    }
    public function them_lop_xu_ly(){
        DB::insert("INSERT INTO lop(ten_lop) VALUES ('$this->ten_lop') ");
    }
}
