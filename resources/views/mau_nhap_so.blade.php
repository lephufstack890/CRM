@extends('web')

@section('content')
    <div style="text-align: end;"><button>Xuất Excel</button></div>
    <table class="data-table">
        <thead>
            <tr>
                <th rowspan="3">STT</th>
                <th colspan="2">Thời gian</th>
                <th colspan="22">Hồ chứa nước Dầu Tiếng</th>
                <th colspan="3">Hồ phước hòa</th>
            </tr>
            <tr>
                <th rowspan="2">Ngày</th>
                <th rowspan="2">Giờ</th>
                <th colspan="2">Hồ Dầu Tiếng</th>
                <th colspan="7">Tràn xả lũ</th>
                <th colspan="5">Cống số 1</th>
                <th colspan="5">Cống số 2</th>
                <th colspan="3">Cống số 3</th>
                <th rowspan="2">Zhồ PH (m)</th>
                <th rowspan="2">QPH-DT (m³/s)</th>
                <th rowspan="2">QMT (m3/s)</th>
            </tr>
            <tr>
                <th>Zhồ DT (m)</th>
                <th>Qđến hồ DT (m³/s)</th>
                <th>ΣQxả tràn (m³/s)</th>
                <th>a1 (m)</th>
                <th>a2 (m)</th>
                <th>a3 (m)</th>
                <th>a4 (m)</th>
                <th>a5 (m)</th>
                <th>a6 (m)</th>
                <th>HHL (m)</th>
                <th>a1 (m)</th>
                <th>a2 (m)</th>
                <th>a3 (tổ máy thủy điện)</th>
                <th>ΣQCS1 (m³/s)</th>
                <th>HHL (m)</th>
                <th>a1 (m)</th>
                <th>a2 (m)</th>
                <th>a3 (tổ máy thủy điện)</th>
                <th>ΣQCS2 (m³/s)</th>
                <th>HHL (m)</th>
                <th>a (m)</th>
                <th>ΣQCS3 (m³/s)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ngày 1</td>
                <td>Data Thượng lưu</td>
                <td>Data Hạ lưu</td>
                <td>Chênh lệch ngày 1</td>
                <td>Data a1</td>
                <td>Data a2</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a2</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a2</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a2</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
            </tr>
        </tbody>
    </table>
@endsection
