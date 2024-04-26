<?php

namespace App\Http\Controllers;

use App\Models\KenhTay;
use Illuminate\Http\Request;

class KenhTayController extends Controller
{
    public function kenh_tay()
    {
        $kenhtays = KenhTay::all();
        return view('kenh_tay', compact('kenhtays'));
    }

    public function store(Request $request)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        $kenhtay = new KenhTay();
        $kenhtay->day = $data['day'];
        $kenhtay->HTL = $data['HTL'];
        $kenhtay->HTL_16_77 = $data['HTL_16_77'];
        $kenhtay->m_a1 = $data['m_a1'];
        $kenhtay->m_a2 = $data['m_a2'];
        $kenhtay->m_a3 = $data['m_a3'];
        $kenhtay->HTL_15_99 = $data['HTL_15_99'];
        $kenhtay->HTL_15_49 = $data['HHL_15_49'];
        $kenhtay->CDTK1_a1 = $data['CDTK1_a1'];
        $kenhtay->CDTK1_a2 = $data['CDTK1_a2'];
        $kenhtay->CDTK1_a3 = $data['CDTK1_a3'];
        $kenhtay->Q_m3 = $data['Q_m3'];
        $kenhtay->HTL_15_75 = $data['HTL_15_75'];
        $kenhtay->HHL_15_55 = $data['HHL_15_55'];
        $kenhtay->HTL_14_96 = $data['HTL_14_96'];
        $kenhtay->HHL_14_95 = $data['HHL_14_95'];
        $kenhtay->HTL_14_71 = $data['HTL_14_71'];
        $kenhtay->HHL_14_46 = $data['HHL_14_46'];
        $kenhtay->HTL_14_05 = $data['HTL_14_05'];
        $kenhtay->HHL_14_04 = $data['HHL_14_04'];
        $kenhtay->HTL_13_47 = $data['HTL_13_47'];
        $kenhtay->save();

        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        // Tìm kiếm kênh dòng cần cập nhật
        $kenhtay = KenhTay::find($id);

        if (!$kenhtay) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy kênh dòng']);
        }

        $kenhtay->day = $data['day'];
        $kenhtay->HTL = $data['HTL'];
        $kenhtay->HTL_16_77 = $data['HTL_16_77'];
        $kenhtay->m_a1 = $data['m_a1'];
        $kenhtay->m_a2 = $data['m_a2'];
        $kenhtay->m_a3 = $data['m_a3'];
        $kenhtay->HTL_15_99 = $data['HTL_15_99'];
        $kenhtay->HTL_15_49 = $data['HTL_15_49'];
        $kenhtay->CDTK1_a1 = $data['CDTK1_a1'];
        $kenhtay->CDTK1_a2 = $data['CDTK1_a2'];
        $kenhtay->CDTK1_a3 = $data['CDTK1_a3'];
        $kenhtay->Q_m3 = $data['Q_m3'];
        $kenhtay->HTL_15_75 = $data['HTL_15_75'];
        $kenhtay->HHL_15_55 = $data['HHL_15_55'];
        $kenhtay->HTL_14_96 = $data['HTL_14_96'];
        $kenhtay->HHL_14_95 = $data['HHL_14_95'];
        $kenhtay->HTL_14_71 = $data['HTL_14_71'];
        $kenhtay->HHL_14_46 = $data['HHL_14_46'];
        $kenhtay->HTL_14_05 = $data['HTL_14_05'];
        $kenhtay->HHL_14_04 = $data['HHL_14_04'];
        $kenhtay->HTL_13_47 = $data['HTL_13_47'];

        $kenhtay->save();

        // Phản hồi về trạng thái cập nhật
        return response()->json(['success' => true, 'message' => 'Dữ liệu đã được cập nhật']);
    }
}
