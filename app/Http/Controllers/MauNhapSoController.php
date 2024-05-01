<?php

namespace App\Http\Controllers;
use App\Models\MauNhapSo;
use Illuminate\Http\Request;

class MauNhapSoController extends Controller
{
    public function mau_nhap_so()
    {
        $maunhapsos = MauNhapSo::all();
        return view('mau_nhap_so', compact('maunhapsos'));
    }

    public function store(Request $request)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        $maunhapso = new MauNhapSo();
        $maunhapso->day = $data['day'];
        $maunhapso->hour = $data['hour'];
        $maunhapso->zho_DT = $data['zho_DT'];
        $maunhapso->Q_den_ho_DT = $data['Q_den_ho_DT'];
        $maunhapso->tong_Q_tran_m3 = $data['tong_Q_tran_m3'];
        $maunhapso->A_1_tran = $data['A_1_tran'];
        $maunhapso->A_2_tran = $data['A_2_tran'];
        $maunhapso->A_3_tran = $data['A_3_tran'];
        $maunhapso->A_4_tran = $data['A_4_tran'];
        $maunhapso->A_5_tran = $data['A_5_tran'];
        $maunhapso->A_6_tran = $data['A_6_tran'];
        $maunhapso->HHL_cong1 = $data['HHL_cong1'];
        $maunhapso->A_1_cong1 = $data['A_1_cong1'];
        $maunhapso->A_2_cong1 = $data['A_2_cong1'];
        $maunhapso->A_3_cong1 = $data['A_3_cong1'];
        $maunhapso->QCS1_m3 = $data['QCS1_m3'];
        $maunhapso->HHL_cong2 = $data['HHL_cong2'];
        $maunhapso->A_1_cong2 = $data['A_1_cong2'];
        $maunhapso->A_2_cong2 = $data['A_2_cong2'];
        $maunhapso->A_3_cong2 = $data['A_3_cong2'];
        $maunhapso->QCS2_m3 = $data['QCS2_m3'];
        $maunhapso->HHL_cong3 = $data['HHL_cong3'];
        $maunhapso->A_1_cong3 = $data['A_1_cong3'];
        $maunhapso->QCS3_m3 = $data['QCS3_m3'];
        $maunhapso->zho_PH = $data['zho_PH'];
        $maunhapso->QPH_DT_m3 = $data['QPH_DT_m3'];
        $maunhapso->QMT_m3 = $data['QMT_m3'];
        $maunhapso->save();

        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        // Tìm kiếm kênh dòng cần cập nhật
        $maunhapso = MauNhapSo::find($id);

        if (!$maunhapso) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy kênh dòng']);
        }

        $maunhapso->day = $data['day'];
        $maunhapso->hour = $data['hour'];
        $maunhapso->zho_DT = $data['zho_DT'];
        $maunhapso->Q_den_ho_DT = $data['Q_den_ho_DT'];
        $maunhapso->tong_Q_tran_m3 = $data['tong_Q_tran_m3'];
        $maunhapso->A_1_tran = $data['A_1_tran'];
        $maunhapso->A_2_tran = $data['A_2_tran'];
        $maunhapso->A_3_tran = $data['A_3_tran'];
        $maunhapso->A_4_tran = $data['A_4_tran'];
        $maunhapso->A_5_tran = $data['A_5_tran'];
        $maunhapso->A_6_tran = $data['A_6_tran'];
        $maunhapso->HHL_cong1 = $data['HHL_cong1'];
        $maunhapso->A_1_cong1 = $data['A_1_cong1'];
        $maunhapso->A_2_cong1 = $data['A_2_cong1'];
        $maunhapso->A_3_cong1 = $data['A_3_cong1'];
        $maunhapso->QCS1_m3 = $data['QCS1_m3'];
        $maunhapso->HHL_cong2 = $data['HHL_cong2'];
        $maunhapso->A_1_cong2 = $data['A_1_cong2'];
        $maunhapso->A_2_cong2 = $data['A_2_cong2'];
        $maunhapso->A_3_cong2 = $data['A_3_cong2'];
        $maunhapso->QCS2_m3 = $data['QCS2_m3'];
        $maunhapso->HHL_cong3 = $data['HHL_cong3'];
        $maunhapso->A_1_cong3 = $data['A_1_cong3'];
        $maunhapso->QCS3_m3 = $data['QCS3_m3'];
        $maunhapso->zho_PH = $data['zho_PH'];
        $maunhapso->QPH_DT_m3 = $data['QPH_DT_m3'];
        $maunhapso->QMT_m3 = $data['QMT_m3'];

        $maunhapso->save();

        // Phản hồi về trạng thái cập nhật
        return response()->json(['success' => true, 'message' => 'Dữ liệu đã được cập nhật']);
    }
}
