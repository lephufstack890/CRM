<?php

namespace App\Http\Controllers;

use App\Models\KenhDucHoa;
use Illuminate\Http\Request;

class KenhDucHoaController extends Controller
{
    public function kenh_duc_hoa()
    {
        $kenhduchoas = KenhDucHoa::all();
        return view('kenh_duc_hoa', compact('kenhduchoas'));
    }

    public function store(Request $request)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        $kenhduchoa = new KenhDucHoa();
        $kenhduchoa->day = $data['day'];
        $kenhduchoa->HTL_14_08 = $data['HTL_14_08'];
        $kenhduchoa->HHL_13_72 = $data['HHL_13_72'];
        $kenhduchoa->HTL_13_54 = $data['HTL_13_54'];
        $kenhduchoa->HHL_13_04 = $data['HHL_13_04'];
        $kenhduchoa->HTL_12_85 = $data['HTL_12_85'];
        $kenhduchoa->HHL_12_35 = $data['HHL_12_35'];
        $kenhduchoa->HTL_9_24 = $data['HTL_9_24'];
        $kenhduchoa->HHL_8_89 = $data['HHL_8_89'];
        $kenhduchoa->HTL_7_50 = $data['HTL_7_50'];
        $kenhduchoa->note = $data['note'];
        $kenhduchoa->save();

        // Phản hồi về trạng thái lưu
        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        // Tìm kiếm kênh dòng cần cập nhật
        $kenhduchoa = KenhDucHoa::find($id);

        if (!$kenhduchoa) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy kênh dòng']);
        }

        $kenhduchoa->day = $data['day'];
        $kenhduchoa->HTL_14_08 = $data['HTL_14_08'];
        $kenhduchoa->HHL_13_72 = $data['HHL_13_72'];
        $kenhduchoa->HTL_13_54 = $data['HTL_13_54'];
        $kenhduchoa->HHL_13_04 = $data['HHL_13_04'];
        $kenhduchoa->HTL_12_85 = $data['HTL_12_85'];
        $kenhduchoa->HHL_12_35 = $data['HHL_12_35'];
        $kenhduchoa->HTL_9_24 = $data['HTL_9_24'];
        $kenhduchoa->HHL_8_89 = $data['HHL_8_89'];
        $kenhduchoa->HTL_7_50 = $data['HTL_7_50'];
        $kenhduchoa->note = $data['note'];

        $kenhduchoa->save();

        // Phản hồi về trạng thái cập nhật
        return response()->json(['success' => true, 'message' => 'Dữ liệu đã được cập nhật']);
    }
}
