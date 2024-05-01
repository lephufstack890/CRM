<?php

namespace App\Http\Controllers;
use App\Models\MauDieuTiet;
use Illuminate\Http\Request;

class MauDieuTietController extends Controller
{
    public function mau_dieu_tiet()
    {
        $maudieutiets = MauDieuTiet::all();
        return view('mau_dieu_tiet', compact('maudieutiets'));
    }

    public function store(Request $request)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        $maudieutiet = new MauDieuTiet();
        $maudieutiet->day = $data['day'];
        $maudieutiet->zho_N_TRUOC = $data['zho_N_TRUOC'];
        $maudieutiet->zho_N_NAY = $data['zho_N_NAY'];
        $maudieutiet->who_106_m3 = $data['who_106_m3'];
        $maudieutiet->Q_den_m3 = $data['Q_den_m3'];
        $maudieutiet->W_den_106_m3 = $data['W_den_106_m3'];
        $maudieutiet->QPH_m3 = $data['QPH_m3'];
        $maudieutiet->WPH_106_m3 = $data['WPH_106_m3'];
        $maudieutiet->Q_tran_m3 = $data['Q_tran_m3'];
        $maudieutiet->W_tran_106_m3 = $data['W_tran_106_m3'];
        $maudieutiet->Q_cong1_m3 = $data['Q_cong1_m3'];
        $maudieutiet->W_cong1_106_m3 = $data['W_cong1_106_m3'];
        $maudieutiet->Q_cong2_m3 = $data['Q_cong2_m3'];
        $maudieutiet->W_cong2_106_m3 = $data['W_cong2_106_m3'];
        $maudieutiet->Q_cong3_m3 = $data['Q_cong3_m3'];
        $maudieutiet->W_cong3_106_m3 = $data['W_cong3_106_m3'];
        $maudieutiet->Q_ton_that_m3 = $data['Q_ton_that_m3'];
        $maudieutiet->W_ton_that_106_m3 = $data['W_ton_that_106_m3'];
        $maudieutiet->Q_tong_nuoc_di_m3 = $data['Q_tong_nuoc_di_m3'];
        $maudieutiet->W_tong_nuoc_di_106_m3 = $data['W_tong_nuoc_di_106_m3'];
        $maudieutiet->save();

        // Phản hồi về trạng thái lưu
        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        // Tìm kiếm kênh dòng cần cập nhật
        $maudieutiet = MauDieuTiet::find($id);

        if (!$maudieutiet) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy kênh dòng']);
        }

        $maudieutiet->day = $data['day'];
        $maudieutiet->zho_N_TRUOC = $data['zho_N_TRUOC'];
        $maudieutiet->zho_N_NAY = $data['zho_N_NAY'];
        $maudieutiet->who_106_m3 = $data['who_106_m3'];
        $maudieutiet->Q_den_m3 = $data['Q_den_m3'];
        $maudieutiet->W_den_106_m3 = $data['W_den_106_m3'];
        $maudieutiet->QPH_m3 = $data['QPH_m3'];
        $maudieutiet->WPH_106_m3 = $data['WPH_106_m3'];
        $maudieutiet->Q_tran_m3 = $data['Q_tran_m3'];
        $maudieutiet->W_tran_106_m3 = $data['W_tran_106_m3'];
        $maudieutiet->Q_cong1_m3 = $data['Q_cong1_m3'];
        $maudieutiet->W_cong1_106_m3 = $data['W_cong1_106_m3'];
        $maudieutiet->Q_cong2_m3 = $data['Q_cong2_m3'];
        $maudieutiet->W_cong2_106_m3 = $data['W_cong2_106_m3'];
        $maudieutiet->Q_cong3_m3 = $data['Q_cong3_m3'];
        $maudieutiet->W_cong3_106_m3 = $data['W_cong3_106_m3'];
        $maudieutiet->Q_ton_that_m3 = $data['Q_ton_that_m3'];
        $maudieutiet->W_ton_that_106_m3 = $data['W_ton_that_106_m3'];
        $maudieutiet->Q_tong_nuoc_di_m3 = $data['Q_tong_nuoc_di_m3'];
        $maudieutiet->W_tong_nuoc_di_106_m3 = $data['W_tong_nuoc_di_106_m3'];
        $maudieutiet->save();


        // Phản hồi về trạng thái cập nhật
        return response()->json(['success' => true, 'message' => 'Dữ liệu đã được cập nhật']);
    }
}
