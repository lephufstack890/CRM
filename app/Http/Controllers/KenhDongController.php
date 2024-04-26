<?php

namespace App\Http\Controllers;

use App\Models\KenhDong;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class KenhDongController extends Controller
{

    public function kenh_dong()
    {
        $kenhdongs = KenhDong::all();
        return view('kenh_dong', compact('kenhdongs'));
    }

    public function store(Request $request)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        $kenhdong = new Kenhdong();
        $kenhdong->day = $data['day'];
        $kenhdong->HTL = $data['HTL'];
        $kenhdong->HHL_17_50 = $data['HHL_17_50'];
        $kenhdong->a1 = $data['a1'];
        $kenhdong->a2 = $data['a2'];
        $kenhdong->a3 = $data['a3'];
        $kenhdong->HTL_17_32 = $data['HTL_17_32'];
        $kenhdong->HTL_17_32 = $data['HTL_17_32'];
        $kenhdong->HTL_16_20 = $data['HTL_16_20'];
        $kenhdong->HTL_16_07 = $data['HTL_16_07'];
        $kenhdong->HHL_15_90 = $data['HHL_15_90'];
        $kenhdong->HTL_15_69 = $data['HTL_15_69'];
        $kenhdong->HHL_15_49 = $data['HHL_15_49'];
        $kenhdong->HTL_15_19 = $data['HTL_15_19'];
        $kenhdong->HHL_15_00 = $data['HHL_15_00'];
        $kenhdong->HTL_14_85 = $data['HTL_14_85'];
        $kenhdong->HHL_14_40 = $data['HHL_14_40'];
        $kenhdong->HTL_3_82 = $data['HTL_3_82'];
        $kenhdong->HHL_13_62 = $data['HHL_13_62'];
        $kenhdong->save();

        // Phản hồi về trạng thái lưu
        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        // Lấy dữ liệu được gửi từ AJAX
        $data = $request->all();

        // Tìm kiếm kênh dòng cần cập nhật
        $kenhdong = Kenhdong::find($id);

        if (!$kenhdong) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy kênh dòng']);
        }

        // Cập nhật dữ liệu
        $kenhdong->day = $data['day'];
        $kenhdong->HTL = $data['HTL'];
        $kenhdong->HHL_17_50 = $data['HHL_17_50'];
        $kenhdong->a1 = $data['a1'];
        $kenhdong->a2 = $data['a2'];
        $kenhdong->a3 = $data['a3'];
        $kenhdong->HTL_17_32 = $data['HTL_17_32'];
        $kenhdong->HTL_16_20 = $data['HTL_16_20'];
        $kenhdong->HTL_16_07 = $data['HTL_16_07'];
        $kenhdong->HHL_15_90 = $data['HHL_15_90'];
        $kenhdong->HTL_15_69 = $data['HTL_15_69'];
        $kenhdong->HHL_15_49 = $data['HHL_15_49'];
        $kenhdong->HTL_15_19 = $data['HTL_15_19'];
        $kenhdong->HHL_15_00 = $data['HHL_15_00'];
        $kenhdong->HTL_14_85 = $data['HTL_14_85'];
        $kenhdong->HHL_14_40 = $data['HHL_14_40'];
        $kenhdong->HTL_3_82 = $data['HTL_3_82'];
        $kenhdong->HHL_13_62 = $data['HHL_13_62'];
        $kenhdong->save();

        // Phản hồi về trạng thái cập nhật
        return response()->json(['success' => true, 'message' => 'Dữ liệu đã được cập nhật']);
    }


    public function destroy($id)
    {
        KenhDong::destroy($id);
        return redirect()->back()->with('success', 'Row deleted successfully!');
    }

    //  // Function to export data to Excel
    //  public function export()
    //  {
    //      return Excel::download(new KenhDong, 'kenhdongs.xlsx');
    //  }
}
