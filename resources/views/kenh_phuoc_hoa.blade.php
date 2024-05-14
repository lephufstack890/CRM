@extends('web')
<style>
    @media (min-width: 768px) {

        .data-table th,
        .data-table td {
            min-width: 60px !important;
        }
    }
</style>
@section('content')
    <div style="text-align: end;">
        @can('kenh-phuoc-hoa-excel')
            <button onclick="exportToExcel()">Xuất Excel</button>
        @endcan
        @can('kenh-phuoc-hoa-create')
            <button onclick="addRow()">Thêm Dòng</button>
        @endcan
    </div>
    <div class="table-responsive">
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
            <tbody id="table-body">
                @foreach ($kenhphuochoas as $kenhphuochoa)
                    <tr data-id="{{ $kenhphuochoa->id }}">
                        <td data-name-0="{{ $kenhphuochoa->day }}">
                            <span class="data-view">{{ $kenhphuochoa->day }}</span>
                            <input data-name-0="{{ $kenhphuochoa->day }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->day }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-1="{{ $kenhphuochoa->zho }}">
                            <span class="data-view">{{ $kenhphuochoa->zho }}</span>
                            <input data-name-1="{{ $kenhphuochoa->zho }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->zho }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-2="{{ $kenhphuochoa->who106_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->who106_m3 }}</span>
                            <input data-name-2="{{ $kenhphuochoa->who106_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->who106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-3="{{ $kenhphuochoa->Q_den_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->Q_den_m3 }}</span>
                            <input data-name-3="{{ $kenhphuochoa->Q_den_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->Q_den_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-4="{{ $kenhphuochoa->W_den_106_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->W_den_106_m3 }}</span>
                            <input data-name-4="{{ $kenhphuochoa->W_den_106_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->W_den_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-5="{{ $kenhphuochoa->HHL_42_27 }}">
                            <span class="data-view">{{ $kenhphuochoa->HHL_42_27 }}</span>
                            <input data-name-5="{{ $kenhphuochoa->HHL_42_27 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->HHL_42_27 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-6="{{ $kenhphuochoa->A_1 }}">
                            <span class="data-view">{{ $kenhphuochoa->A_1 }}</span>
                            <input data-name-6="{{ $kenhphuochoa->A_1 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->A_1 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-7="{{ $kenhphuochoa->A_2 }}">
                            <span class="data-view">{{ $kenhphuochoa->A_2 }}</span>
                            <input data-name-7="{{ $kenhphuochoa->A_2 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->A_2 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-8="{{ $kenhphuochoa->A_3 }}">
                            <span class="data-view">{{ $kenhphuochoa->A_3 }}</span>
                            <input data-name-8="{{ $kenhphuochoa->A_3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->A_3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-9="{{ $kenhphuochoa->Q_cong_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->Q_cong_m3 }}</span>
                            <input data-name-9="{{ $kenhphuochoa->Q_cong_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->Q_cong_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-10="{{ $kenhphuochoa->W_cong_106_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->W_cong_106_m3 }}</span>
                            <input data-name-10="{{ $kenhphuochoa->W_cong_106_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->W_cong_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-11="{{ $kenhphuochoa->Q_tran_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->Q_tran_m3 }}</span>
                            <input data-name-11="{{ $kenhphuochoa->Q_tran_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->Q_tran_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-12="{{ $kenhphuochoa->W_tran_106_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->W_tran_106_m3 }}</span>
                            <input data-name-12="{{ $kenhphuochoa->W_tran_106_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->W_tran_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-13="{{ $kenhphuochoa->QTMV_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->QTMV_m3 }}</span>
                            <input data-name-13="{{ $kenhphuochoa->QTMV_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->QTMV_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-14="{{ $kenhphuochoa->WTMV_106_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->WTMV_106_m3 }}</span>
                            <input data-name-14="{{ $kenhphuochoa->WTMV_106_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->WTMV_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-15="{{ $kenhphuochoa->QMT_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->QMT_m3 }}</span>
                            <input data-name-15="{{ $kenhphuochoa->QMT_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->QMT_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-16="{{ $kenhphuochoa->WMT_106_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->WMT_106_m3 }}</span>
                            <input data-name-16="{{ $kenhphuochoa->WMT_106_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->WMT_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-17="{{ $kenhphuochoa->QĐCĐ_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->QĐCĐ_m3 }}</span>
                            <input data-name-17="{{ $kenhphuochoa->QĐCĐ_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->QĐCĐ_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-18="{{ $kenhphuochoa->WĐCĐ_106_m3 }}">
                            <span class="data-view">{{ $kenhphuochoa->WĐCĐ_106_m3 }}</span>
                            <input data-name-18="{{ $kenhphuochoa->WĐCĐ_106_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->WĐCĐ_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-19="{{ $kenhphuochoa->HTL_41_82 }}">
                            <span class="data-view">{{ $kenhphuochoa->HTL_41_82 }}</span>
                            <input data-name-19="{{ $kenhphuochoa->HTL_41_82 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->HTL_41_82 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-20="{{ $kenhphuochoa->HHL_41_76 }}">
                            <span class="data-view">{{ $kenhphuochoa->HHL_41_76 }}</span>
                            <input data-name-20="{{ $kenhphuochoa->HHL_41_76 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->HHL_41_76 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-21="{{ $kenhphuochoa->HTL_40_64 }}">
                            <span class="data-view">{{ $kenhphuochoa->HTL_40_64 }}</span>
                            <input data-name-21="{{ $kenhphuochoa->HTL_40_64 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->HTL_40_64 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-22="{{ $kenhphuochoa->HHL_40_64 }}">
                            <span class="data-view">{{ $kenhphuochoa->HHL_40_64 }}</span>
                            <input data-name-22="{{ $kenhphuochoa->HHL_40_64 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->HHL_40_64 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-23="{{ $kenhphuochoa->HTL_39_75 }}">
                            <span class="data-view">{{ $kenhphuochoa->HTL_39_75 }}</span>
                            <input data-name-23="{{ $kenhphuochoa->HTL_39_75 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->HTL_39_75 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-24="{{ $kenhphuochoa->HHL_39_07 }}">
                            <span class="data-view">{{ $kenhphuochoa->HHL_39_07 }}</span>
                            <input data-name-24="{{ $kenhphuochoa->HHL_39_07 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->HHL_39_07 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-25="{{ $kenhphuochoa->HTL_38_55 }}">
                            <span class="data-view">{{ $kenhphuochoa->HTL_38_55 }}</span>
                            <input data-name-25="{{ $kenhphuochoa->HTL_38_55 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->HTL_38_55 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-26="{{ $kenhphuochoa->HHL_29_48 }}">
                            <span class="data-view">{{ $kenhphuochoa->HHL_29_48 }}</span>
                            <input data-name-26="{{ $kenhphuochoa->HHL_29_48 }}" type="text" class="data-edit"
                                value="{{ $kenhphuochoa->HHL_29_48 }}" style="display: none;padding: 11px;">
                        </td>
                        @can('kenh-phuoc-hoa-update')
                            <td>
                                <button class="edit-btn" onclick="toggleEditMode(this)">Chỉnh sửa</button>
                                <button class="update-btn" style="display: none;"
                                    onclick="updateRow('{{ $kenhphuochoa->id }}')">
                                    Cập nhật
                                </button>
                            </td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function toggleEditMode(button) {
            var row = button.parentNode.parentNode;
            var cells = row.querySelectorAll('td');
            var editButton = row.querySelector('.edit-btn');
            var updateButton = row.querySelector('.update-btn');

            cells.forEach(function(cell) {
                var viewElement = cell.querySelector('.data-view');
                var editElement = cell.querySelector('.data-edit');

                if (viewElement && editElement) {
                    if (editElement.style.display === 'none') {
                        viewElement.style.display = 'none';
                        editElement.style.display = 'inline-block';
                    } else {
                        viewElement.style.display = 'inline-block';
                        editElement.style.display = 'none';
                    }
                }
            });

            editButton.style.display = editButton.style.display === 'none' ? 'inline-block' : 'none';
            updateButton.style.display = updateButton.style.display === 'none' ? 'inline-block' : 'none';
        }

        function updateRow(id) {
            var row = document.querySelector('tr[data-id="' + id + '"]');
            if (row) {
                var rowData = {};

                for (var i = 0; i < 27; i++) {
                    var input = row.querySelector('td input[data-name-' + i + ']');
                    if (input) {
                        var columnName = 'data-name-' + i;
                        var cellData = input.value.trim();
                        rowData[columnName] = cellData;
                    }
                }

                let data = {
                    'day': rowData['data-name-0'],
                    'zho': rowData['data-name-1'],
                    'who106_m3': rowData['data-name-2'],
                    'Q_den_m3': rowData['data-name-3'],
                    'W_den_106_m3': rowData['data-name-4'],
                    'HHL_42_27': rowData['data-name-5'],
                    'A_1': rowData['data-name-6'],
                    'A_2': rowData['data-name-7'],
                    'A_3': rowData['data-name-8'],
                    'Q_cong_m3': rowData['data-name-9'],
                    'W_cong_106_m3': rowData['data-name-10'],
                    'Q_tran_m3': rowData['data-name-11'],
                    'W_tran_106_m3': rowData['data-name-12'],
                    'QTMV_m3': rowData['data-name-13'],
                    'WTMV_106_m3': rowData['data-name-14'],
                    'QMT_m3': rowData['data-name-15'],
                    'WMT_106_m3': rowData['data-name-16'],
                    'QĐCĐ_m3': rowData['data-name-17'],
                    'WĐCĐ_106_m3': rowData['data-name-18'],
                    'HTL_41_82': rowData['data-name-19'],
                    'HHL_41_76': rowData['data-name-20'],
                    'HTL_40_64': rowData['data-name-21'],
                    'HHL_40_64': rowData['data-name-22'],
                    'HTL_39_75': rowData['data-name-23'],
                    'HHL_39_07': rowData['data-name-24'],
                    'HTL_38_55': rowData['data-name-25'],
                    'HHL_29_48': rowData['data-name-26'],
                }

                $.ajax({
                    url: '/kenh-phuoc-hoa/update/' + id,
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: JSON.stringify(data),
                    dataType: 'json',
                    success: function(response) {
                        alert('Dữ liệu đã được cập nhật thành công!');
                        location.reload();
                    },
                    error: function(xhr, ajaxOption, thrownError) {
                        alert('Đã xảy ra lỗi khi cập nhật dữ liệu!');
                        console.error(xhr, thrownError);
                    }
                });
            } else {
                console.error('Không tìm thấy dòng với id:', id);
            }
        }


        function addRow() {
            var tableBody = document.getElementById('table-body');
            var newRow = document.createElement('tr');

            for (var i = 0; i < 27; i++) {
                var cell = document.createElement('td');
                cell.setAttribute('contenteditable', 'true');
                cell.setAttribute('data-name-' + i, 'true');
                cell.classList.add('editable');

                cell.addEventListener('blur', function(event) {
                    var value = event.target.textContent.trim();
                    var columnIndex = Array.from(event.target.parentNode.children).indexOf(event.target);
                    event.target.setAttribute('data-name-' + columnIndex, value);
                });

                newRow.appendChild(cell);
            }

            var saveButton = document.createElement('button');
            saveButton.textContent = 'Lưu';
            saveButton.onclick = function() {
                saveRow(newRow);
            };
            newRow.appendChild(saveButton);

            tableBody.appendChild(newRow);
        }

        function saveRow(row) {
            var rowData = {};

            for (var i = 0; i < 27; i++) {
                var cell = row.querySelector('td[data-name-' + i + ']');
                var columnName = 'data-name-' + i;
                var cellData = cell.textContent.trim();

                rowData[columnName] = cellData;
            }

            let data = {
                'day': rowData['data-name-0'],
                'zho': rowData['data-name-1'],
                'who106_m3': rowData['data-name-2'],
                'Q_den_m3': rowData['data-name-3'],
                'W_den_106_m3': rowData['data-name-4'],
                'HHL_42_27': rowData['data-name-5'],
                'A_1': rowData['data-name-6'],
                'A_2': rowData['data-name-7'],
                'A_3': rowData['data-name-8'],
                'Q_cong_m3': rowData['data-name-9'],
                'W_cong_106_m3': rowData['data-name-10'],
                'Q_tran_m3': rowData['data-name-11'],
                'W_tran_106_m3': rowData['data-name-12'],
                'QTMV_m3': rowData['data-name-13'],
                'WTMV_106_m3': rowData['data-name-14'],
                'QMT_m3': rowData['data-name-15'],
                'WMT_106_m3': rowData['data-name-16'],
                'QĐCĐ_m3': rowData['data-name-17'],
                'WĐCĐ_106_m3': rowData['data-name-18'],
                'HTL_41_82': rowData['data-name-19'],
                'HHL_41_76': rowData['data-name-20'],
                'HTL_40_64': rowData['data-name-21'],
                'HHL_40_64': rowData['data-name-22'],
                'HTL_39_75': rowData['data-name-23'],
                'HHL_39_07': rowData['data-name-24'],
                'HTL_38_55': rowData['data-name-25'],
                'HHL_29_48': rowData['data-name-26'],
            }

            $.ajax({
                url: '/kenh-phuoc-hoa/store',
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: JSON.stringify(data),
                dataType: 'json',
                success: function(response) {
                    alert('Dữ liệu đã được lưu thành công!');
                    location.reload();
                },
                error: function(xhr, ajaxOption, thrownError) {
                    alert('Đã xảy ra lỗi khi lưu dữ liệu!');
                    console.error(xhr, thrownError);
                }
            });
        }

        function showEditButtons() {
            document.getElementById("actions").style.display = "block";
        }

        function makeEditable() {
            var cells = document.querySelectorAll('.editable');
            cells.forEach(function(cell) {
                cell.setAttribute('contenteditable', 'true');
            });
        }

        makeEditable();
    </script>
@endsection
