<?php

namespace App\Http\Controllers;

use App\Models\KenhPhuocHoa;
use Illuminate\Http\Request;

class KenhPhuocHoaController extends Controller
{
    public function kenh_phuoc_hoa()
    {
        $kenhphuochoas = KenhPhuocHoa::all();
        return view('kenh_phuoc_hoa', compact('kenhphuochoas'));
    }

    public function store(Request $request)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        $kenhphuochoa = new KenhPhuocHoa();
        $kenhphuochoa->day = $data['day'];
        $kenhphuochoa->zho = $data['zho'];
        $kenhphuochoa->who106_m3 = $data['who106_m3'];
        $kenhphuochoa->Q_den_m3 = $data['Q_den_m3'];
        $kenhphuochoa->W_den_106_m3 = $data['W_den_106_m3'];
        $kenhphuochoa->HHL_42_27 = $data['HHL_42_27'];
        $kenhphuochoa->A_1 = $data['A_1'];
        $kenhphuochoa->A_2 = $data['A_2'];
        $kenhphuochoa->A_3 = $data['A_3'];
        $kenhphuochoa->Q_cong_m3 = $data['Q_cong_m3'];
        $kenhphuochoa->W_cong_106_m3 = $data['W_cong_106_m3'];
        $kenhphuochoa->Q_tran_m3 = $data['Q_tran_m3'];
        $kenhphuochoa->W_tran_106_m3 = $data['W_tran_106_m3'];
        $kenhphuochoa->QTMV_m3 = $data['QTMV_m3'];
        $kenhphuochoa->WTMV_106_m3 = $data['WTMV_106_m3'];
        $kenhphuochoa->QMT_m3 = $data['QMT_m3'];
        $kenhphuochoa->WMT_106_m3 = $data['WMT_106_m3'];
        $kenhphuochoa->QĐCĐ_m3 = $data['QĐCĐ_m3'];
        $kenhphuochoa->WĐCĐ_106_m3 = $data['WĐCĐ_106_m3'];
        $kenhphuochoa->HTL_41_82 = $data['HTL_41_82'];
        $kenhphuochoa->HHL_41_76 = $data['HHL_41_76'];
        $kenhphuochoa->HTL_40_64 = $data['HTL_40_64'];
        $kenhphuochoa->HHL_40_64 = $data['HHL_40_64'];
        $kenhphuochoa->HTL_39_75 = $data['HTL_39_75'];
        $kenhphuochoa->HHL_39_07 = $data['HHL_39_07'];
        $kenhphuochoa->HTL_38_55 = $data['HTL_38_55'];
        $kenhphuochoa->HHL_29_48 = $data['HHL_29_48'];
        $kenhphuochoa->save();

        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        // Tìm kiếm kênh dòng cần cập nhật
        $kenhphuochoa = KenhPhuocHoa::find($id);

        if (!$kenhphuochoa) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy kênh dòng']);
        }

        $kenhphuochoa->day = $data['day'];
        $kenhphuochoa->zho = $data['zho'];
        $kenhphuochoa->who106_m3 = $data['who106_m3'];
        $kenhphuochoa->Q_den_m3 = $data['Q_den_m3'];
        $kenhphuochoa->W_den_106_m3 = $data['W_den_106_m3'];
        $kenhphuochoa->HHL_42_27 = $data['HHL_42_27'];
        $kenhphuochoa->A_1 = $data['A_1'];
        $kenhphuochoa->A_2 = $data['A_2'];
        $kenhphuochoa->A_3 = $data['A_3'];
        $kenhphuochoa->Q_cong_m3 = $data['Q_cong_m3'];
        $kenhphuochoa->W_cong_106_m3 = $data['W_cong_106_m3'];
        $kenhphuochoa->Q_tran_m3 = $data['Q_tran_m3'];
        $kenhphuochoa->W_tran_106_m3 = $data['W_tran_106_m3'];
        $kenhphuochoa->QTMV_m3 = $data['QTMV_m3'];
        $kenhphuochoa->WTMV_106_m3 = $data['WTMV_106_m3'];
        $kenhphuochoa->QMT_m3 = $data['QMT_m3'];
        $kenhphuochoa->WMT_106_m3 = $data['WMT_106_m3'];
        $kenhphuochoa->QĐCĐ_m3 = $data['QĐCĐ_m3'];
        $kenhphuochoa->WĐCĐ_106_m3 = $data['WĐCĐ_106_m3'];
        $kenhphuochoa->HTL_41_82 = $data['HTL_41_82'];
        $kenhphuochoa->HHL_41_76 = $data['HHL_41_76'];
        $kenhphuochoa->HTL_40_64 = $data['HTL_40_64'];
        $kenhphuochoa->HHL_40_64 = $data['HHL_40_64'];
        $kenhphuochoa->HTL_39_75 = $data['HTL_39_75'];
        $kenhphuochoa->HHL_39_07 = $data['HHL_39_07'];
        $kenhphuochoa->HTL_38_55 = $data['HTL_38_55'];
        $kenhphuochoa->HHL_29_48 = $data['HHL_29_48'];

        $kenhphuochoa->save();

        // Phản hồi về trạng thái cập nhật
        return response()->json(['success' => true, 'message' => 'Dữ liệu đã được cập nhật']);
    }
}
