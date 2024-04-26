<?php

namespace App\Http\Controllers;

use App\Models\KenhTanHung;
use Illuminate\Http\Request;

class KenhTanHungController extends Controller
{
    public function kenh_tan_hung()
    {
        $kenhtanhungs = KenhTanHung::all();
        return view('kenh_tan_hung', compact('kenhtanhungs'));
    }

    public function store(Request $request)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        $kenhtanhung = new KenhTanHung();
        $kenhtanhung->day = $data['day'];
        $kenhtanhung->thuong_luu = $data['thuong_luu'];
        $kenhtanhung->ha_luu = $data['ha_luu'];
        $kenhtanhung->THL = $data['THL'];
        $kenhtanhung->A_1 = $data['A_1'];
        $kenhtanhung->A_2 = $data['A_2'];
        $kenhtanhung->A_3 = $data['A_3'];
        $kenhtanhung->Q_m3 = $data['Q_m3'];
        $kenhtanhung->khoi_luong_m3 = $data['khoi_luong_m3'];
        $kenhtanhung->note = $data['note'];
        $kenhtanhung->save();

        // Phản hồi về trạng thái lưu
        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        // Tìm kiếm kênh dòng cần cập nhật
        $kenhtanhung = KenhTanHung::find($id);

        if (!$kenhtanhung) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy kênh dòng']);
        }

        $kenhtanhung->day = $data['day'];
        $kenhtanhung->thuong_luu = $data['thuong_luu'];
        $kenhtanhung->ha_luu = $data['ha_luu'];
        $kenhtanhung->THL = $data['THL'];
        $kenhtanhung->A_1 = $data['A_1'];
        $kenhtanhung->A_2 = $data['A_2'];
        $kenhtanhung->A_3 = $data['A_3'];
        $kenhtanhung->Q_m3 = $data['Q_m3'];
        $kenhtanhung->khoi_luong_m3 = $data['khoi_luong_m3'];
        $kenhtanhung->note = $data['note'];

        $kenhtanhung->save();

        // Phản hồi về trạng thái cập nhật
        return response()->json(['success' => true, 'message' => 'Dữ liệu đã được cập nhật']);
    }
}
