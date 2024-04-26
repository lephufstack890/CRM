@extends('web')

@section('content')
    <div style="text-align: end;"><button>Xuất Excel</button></div>
    <table class="data-table">
        <thead>
            <tr>
                <th rowspan="2">Ngày</th>
                <th colspan="2">K0</th>
                <th colspan="2">K2+238</th>
                <th colspan="2">K4+620</th>
                <th colspan="2">K8+149</th>
                <th>K12+770</th>
                <th rowspan="2">Ghi chú</th>
            </tr>
            <tr>
                <th>HTL 14,08 (m)</th>
                <th>HHL 13,72 (m)</th>
                <th>HTL 13,54 (m)</th>
                <th>HHL 13,04 (m)</th>
                <th>HTL 12,85 (m)</th>
                <th>HHL 12,35 (m)</th>
                <th>HTL 9,24 (m)</th>
                <th>HHL 8,89 (m)</th>
                <th>HTL 7,50 (m)</th>
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
                <td>Data a3</td>
            </tr>
        </tbody>
    </table>
@endsection
