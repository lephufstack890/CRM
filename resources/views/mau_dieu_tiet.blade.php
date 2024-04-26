@extends('web')

@section('content')
    <div style="text-align: end;"><button>Xuất Excel</button></div>
    <table class="data-table">
        <thead>
            <tr>
                <th rowspan="3">Ngày</th>
                <th rowspan="3">Zhồ N.TRƯỚC (m)</th>
                <th rowspan="3">Zhồ N.NAY (m)</th>
                <th rowspan="3">Whồ 10<sup>6</sup>m<sup>3</sup></th>
                <th colspan="2">Nước đến</th>
                <th rowspan="3">QPH m<sup>3</sup>/s</th>
                <th rowspan="3">WPH 10<sup>6</sup>m<sup>3</sup></th>
                <th colspan="10">Nước đi ( WTRÀN + WCS1 + WCS2 +WCS3 + WTỔN THẤT )</th>
                <th colspan="2">Tổng nước đi</th>
            </tr>
            <tr>
                <th rowspan="2">Q(m<sup>3</sup>/s)</th>
                <th rowspan="2">W 10<sup>6</sup>m<sup>3</sup></th>
                <th colspan="2">Tràn</th>
                <th colspan="2">Cống số 1</th>
                <th colspan="2">Cống số 2</th>
                <th colspan="2">Cống số 3</th>
                <th colspan="2">Tổn thất</th>
                <th rowspan="2">Qm<sup>3</sup>/s</th>
                <th rowspan="2">Q10<sup>6</sup>m<sup>3</sup></th>
            </tr>
            <tr>
                <th>Qm<sup>3</sup>/s</th>
                <th>W10<sup>6</sup>m<sup>3</sup></th>
                <th>Qm<sup>3</sup>/s</th>
                <th>W10<sup>6</sup>m<sup>3</sup></th>
                <th>Qm<sup>3</sup>/s</th>
                <th>W10<sup>6</sup>m<sup>3</sup></th>
                <th>Qm<sup>3</sup>/s</th>
                <th>W10<sup>6</sup>m<sup>3</sup></th>
                <th>Qm<sup>3</sup>/s</th>
                <th>W10<sup>6</sup>m<sup>3</sup></th>
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
            </tr>
        </tbody>
    </table>
@endsection
