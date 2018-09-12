<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('frontend.trangchu');
    }

    public function getSanPham(){
        return view('frontend.sanpham');
    }

    public function getChiTietSanPham(){
        return view('frontend.chitietsanpham');
    }

    public function getTimKiem(){
        return view('frontend.timkiem');
    }

    public function getCart(){
        return view('frontend.giohang');
    }

    public function getDatHang(){
        return view('frontend.dathang');
    }

    public function getKhuyenMai(){
        return view('frontend.khuyenmai');
    }

    public function getKhuyenMai2(){
        return view('frontend.khuyenmai2');
    }

    public function getChiTietSanPham2(){
        return view('frontend.chitietsanpham2');
    }
}
