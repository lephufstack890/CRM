@extends('web')

@section('content')
    <div style="text-align: end;"><button>Xuất Excel</button></div>
    <table class="data-table">
        <thead>
            <tr>
                <th rowspan="3">Ngày</th>
                <th rowspan="3">Zhồ(m)</th>
                <th rowspan="3">Whồ 106m3</th>
                <th colspan="2">Nước đến</th>
                <th colspan="14">Nước đi</th>
                <th colspan="8">Kênh dẫn Phước Hòa - Dầu Tiếng</th>
            </tr>
            <tr>
                <th rowspan="2">Qđến m3/s</th>
                <th rowspan="2">Wđến 106m3</th>
                <th colspan="6">Cống đầu kênh dẫn</th>
                <th colspan="2">Tràn có cửa</th>
                <th colspan="2">Tràn Mỏ vịt</th>
                <th colspan="2">Cống Môi trường</th>
                <th colspan="2">Đường cá đi</th>
                <th colspan="2">K6+238</th>
                <th colspan="2">K16+753</th>
                <th colspan="2">K27+686</th>
                <th colspan="2">K37+501</th>
            </tr>
            <tr>
                <th>HHL42,27 (m)</th>
                <th>a1</th>
                <th>a2</th>
                <th>a3</th>
                <th>Qcống (m3/s)</th>
                <th>Wcống 106m3</th>
                <th>Qtràn (m3/s)</th>
                <th>Wtràn 106m3</th>
                <th>QTMV (m3/s)</th>
                <th>WTMV 106m3</th>
                <th>QMT (m3/s)</th>
                <th>WMT 106m3</th>
                <th>QĐCĐ (m3/s)</th>
                <th>WĐCĐ 106m3</th>
                <th>HTL 41,82 (m)</th>
                <th>HHL 41,76 (m)</th>
                <th>HTL 40,64 (m)</th>
                <th>HHL 40,64 (m)</th>
                <th>HTL 39,75 (m)</th>
                <th>HHL 39,07 (m)</th>
                <th>HTL 38,55 (m)</th>
                <th>HHL 29,48 (m)</th>
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
                <td>Data a1</td>
                <td>Data a2</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a1</td>
                <td>Data a2</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a1</td>
                <td>Data a2</td>
                <td>Data a3</td>
                <td>Data a3</td>
                <td>Data a3</td>
            </tr>
        </tbody>
    </table>
@endsection
