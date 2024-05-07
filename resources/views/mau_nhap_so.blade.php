@extends('web')

@section('content')
    <div style="text-align: end;">
        @can('mau-nhap-so-excel')
            <button onclick="exportToExcel()">Xuất Excel</button>
        @endcan
        @can('mau-nhap-so-create')
            <button onclick="addRow()">Thêm Dòng</button>
        @endcan
    </div>
    <div class="table-responsive">
        <table class="data-table">
            <thead>
                <tr>
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
            <tbody id="table-body">
                @foreach ($maunhapsos as $maunhapso)
                    <tr data-id="{{ $maunhapso->id }}">
                        <td data-name-0="{{ $maunhapso->day }}"> 
                            <span class="data-view">{{ $maunhapso->day }}</span>
                            <input data-name-0="{{ $maunhapso->day }}" type="text" class="data-edit"
                                value="{{ $maunhapso->day }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-1="{{ $maunhapso->hour }}">
                            <span class="data-view">{{ $maunhapso->hour }}</span>
                            <input data-name-1="{{ $maunhapso->hour }}" type="text" class="data-edit"
                                value="{{ $maunhapso->hour }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-2="{{ $maunhapso->zho_DT }}">
                            <span class="data-view">{{ $maunhapso->zho_DT }}</span>
                            <input data-name-2="{{ $maunhapso->zho_DT }}" type="text" class="data-edit"
                                value="{{ $maunhapso->zho_DT }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-3="{{ $maunhapso->Q_den_ho_DT }}">
                            <span class="data-view">{{ $maunhapso->Q_den_ho_DT }}</span>
                            <input data-name-3="{{ $maunhapso->Q_den_ho_DT }}" type="text" class="data-edit"
                                value="{{ $maunhapso->Q_den_ho_DT }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-4="{{ $maunhapso->tong_Q_tran_m3 }}">
                            <span class="data-view">{{ $maunhapso->tong_Q_tran_m3 }}</span>
                            <input data-name-4="{{ $maunhapso->tong_Q_tran_m3 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->tong_Q_tran_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-5="{{ $maunhapso->A_1_tran }}">
                            <span class="data-view">{{ $maunhapso->A_1_tran }}</span>
                            <input data-name-5="{{ $maunhapso->A_1_tran }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_1_tran }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-6="{{ $maunhapso->A_2_tran }}">
                            <span class="data-view">{{ $maunhapso->A_2_tran }}</span>
                            <input data-name-6="{{ $maunhapso->A_2_tran }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_2_tran }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-7="{{ $maunhapso->A_3_tran }}">
                            <span class="data-view">{{ $maunhapso->A_3_tran }}</span>
                            <input data-name-7="{{ $maunhapso->A_3_tran }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_3_tran }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-8="{{ $maunhapso->A_4_tran }}">
                            <span class="data-view">{{ $maunhapso->A_4_tran }}</span>
                            <input data-name-8="{{ $maunhapso->A_4_tran }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_4_tran }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-9="{{ $maunhapso->A_5_tran }}">
                            <span class="data-view">{{ $maunhapso->A_5_tran }}</span>
                            <input data-name-9="{{ $maunhapso->A_5_tran }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_5_tran }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-10="{{ $maunhapso->A_6_tran }}">
                            <span class="data-view">{{ $maunhapso->A_6_tran }}</span>
                            <input data-name-10="{{ $maunhapso->A_6_tran }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_6_tran }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-11="{{ $maunhapso->HHL_cong1 }}">
                            <span class="data-view">{{ $maunhapso->HHL_cong1 }}</span>
                            <input data-name-11="{{ $maunhapso->HHL_cong1 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->HHL_cong1 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-12="{{ $maunhapso->A_1_cong1 }}">
                            <span class="data-view">{{ $maunhapso->A_1_cong1 }}</span>
                            <input data-name-12="{{ $maunhapso->A_1_cong1 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_1_cong1 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-13="{{ $maunhapso->A_2_cong1 }}">
                            <span class="data-view">{{ $maunhapso->A_2_cong1 }}</span>
                            <input data-name-13="{{ $maunhapso->A_2_cong1 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_2_cong1 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-14="{{ $maunhapso->A_3_cong1 }}">
                            <span class="data-view">{{ $maunhapso->A_3_cong1 }}</span>
                            <input data-name-14="{{ $maunhapso->A_3_cong1 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_3_cong1 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-15="{{ $maunhapso->QCS1_m3 }}">
                            <span class="data-view">{{ $maunhapso->QCS1_m3 }}</span>
                            <input data-name-15="{{ $maunhapso->QCS1_m3 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->QCS1_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-16="{{ $maunhapso->HHL_cong2 }}">
                            <span class="data-view">{{ $maunhapso->HHL_cong2 }}</span>
                            <input data-name-16="{{ $maunhapso->HHL_cong2 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->HHL_cong2 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-17="{{ $maunhapso->A_1_cong2 }}">
                            <span class="data-view">{{ $maunhapso->A_1_cong2 }}</span>
                            <input data-name-17="{{ $maunhapso->A_1_cong2 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_1_cong2 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-18="{{ $maunhapso->A_2_cong2 }}">
                            <span class="data-view">{{ $maunhapso->A_2_cong2 }}</span>
                            <input data-name-18="{{ $maunhapso->A_2_cong2 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_2_cong2 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-19="{{ $maunhapso->A_3_cong2 }}">
                            <span class="data-view">{{ $maunhapso->A_3_cong2 }}</span>
                            <input data-name-19="{{ $maunhapso->A_3_cong2 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_3_cong2 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-20="{{ $maunhapso->QCS2_m3 }}">
                            <span class="data-view">{{ $maunhapso->QCS2_m3 }}</span>
                            <input data-name-20="{{ $maunhapso->QCS2_m3 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->QCS2_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-21="{{ $maunhapso->HHL_cong3 }}">
                            <span class="data-view">{{ $maunhapso->HHL_cong3 }}</span>
                            <input data-name-21="{{ $maunhapso->HHL_cong3 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->HHL_cong3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-22="{{ $maunhapso->A_1_cong3 }}">
                            <span class="data-view">{{ $maunhapso->A_1_cong3 }}</span>
                            <input data-name-22="{{ $maunhapso->A_1_cong3 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->A_1_cong3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-23="{{ $maunhapso->QCS3_m3 }}">
                            <span class="data-view">{{ $maunhapso->QCS3_m3 }}</span>
                            <input data-name-23="{{ $maunhapso->QCS3_m3 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->QCS3_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-24="{{ $maunhapso->zho_PH }}">
                            <span class="data-view">{{ $maunhapso->zho_PH }}</span>
                            <input data-name-24="{{ $maunhapso->zho_PH }}" type="text" class="data-edit"
                                value="{{ $maunhapso->zho_PH }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-25="{{ $maunhapso->QPH_DT_m3 }}">
                            <span class="data-view">{{ $maunhapso->QPH_DT_m3 }}</span>
                            <input data-name-25="{{ $maunhapso->QPH_DT_m3 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->QPH_DT_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-26="{{ $maunhapso->QMT_m3 }}">
                            <span class="data-view">{{ $maunhapso->QMT_m3 }}</span>
                            <input data-name-26="{{ $maunhapso->QMT_m3 }}" type="text" class="data-edit"
                                value="{{ $maunhapso->QMT_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td>
                            @can('mau-nhap-so-update')
                                <button class="edit-btn" onclick="toggleEditMode(this)">Chỉnh sửa</button>
                            @endcan
                            <button 
                                class="update-btn" 
                                style="display: none;"
                                onclick="updateRow('{{ $maunhapso->id }}')">
                                    Cập nhật
                            </button>
                        </td>
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
                    'hour': rowData['data-name-1'],
                    'zho_DT': rowData['data-name-2'],
                    'Q_den_ho_DT': rowData['data-name-3'],
                    'tong_Q_tran_m3': rowData['data-name-4'],
                    'A_1_tran': rowData['data-name-5'],
                    'A_2_tran': rowData['data-name-6'],
                    'A_3_tran': rowData['data-name-7'],
                    'A_4_tran': rowData['data-name-8'],
                    'A_5_tran': rowData['data-name-9'],
                    'A_6_tran': rowData['data-name-10'],
                    'HHL_cong1': rowData['data-name-11'],
                    'A_1_cong1': rowData['data-name-12'],
                    'A_2_cong1': rowData['data-name-13'],
                    'A_3_cong1': rowData['data-name-14'],
                    'QCS1_m3': rowData['data-name-15'],
                    'HHL_cong2': rowData['data-name-16'],
                    'A_1_cong2': rowData['data-name-17'],
                    'A_2_cong2': rowData['data-name-18'],
                    'A_3_cong2': rowData['data-name-19'],
                    'QCS2_m3': rowData['data-name-20'],
                    'HHL_cong3': rowData['data-name-21'],
                    'A_1_cong3': rowData['data-name-22'],
                    'QCS3_m3': rowData['data-name-23'],
                    'zho_PH': rowData['data-name-24'],
                    'QPH_DT_m3': rowData['data-name-25'],
                    'QMT_m3': rowData['data-name-26'],
                }

                $.ajax({
                    url: '/mau-nhap-so-lieu-theo-gio/update/' + id,
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
                'hour': rowData['data-name-1'],
                'zho_DT': rowData['data-name-2'],
                'Q_den_ho_DT': rowData['data-name-3'],
                'tong_Q_tran_m3': rowData['data-name-4'],
                'A_1_tran': rowData['data-name-5'],
                'A_2_tran': rowData['data-name-6'],
                'A_3_tran': rowData['data-name-7'],
                'A_4_tran': rowData['data-name-8'],
                'A_5_tran': rowData['data-name-9'],
                'A_6_tran': rowData['data-name-10'],
                'HHL_cong1': rowData['data-name-11'],
                'A_1_cong1': rowData['data-name-12'],
                'A_2_cong1': rowData['data-name-13'],
                'A_3_cong1': rowData['data-name-14'],
                'QCS1_m3': rowData['data-name-15'],
                'HHL_cong2': rowData['data-name-16'],
                'A_1_cong2': rowData['data-name-17'],
                'A_2_cong2': rowData['data-name-18'],
                'A_3_cong2': rowData['data-name-19'],
                'QCS2_m3': rowData['data-name-20'],
                'HHL_cong3': rowData['data-name-21'],
                'A_1_cong3': rowData['data-name-22'],
                'QCS3_m3': rowData['data-name-23'],
                'zho_PH': rowData['data-name-24'],
                'QPH_DT_m3': rowData['data-name-25'],
                'QMT_m3': rowData['data-name-26'],
            }

            $.ajax({
                url: '/mau-nhap-so-lieu-theo-gio/store',
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
