@extends('web')

@section('content')
    <div style="text-align: end;">
        <button onclick="exportToExcel()">Xuất Excel</button>
        <button onclick="addRow()">Thêm Dòng</button>
    </div>
    <div class="table-responsive">
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
            <tbody id="table-body">
                @foreach ($maudieutiets as $maudieutiet)
                    <tr data-id="{{ $maudieutiet->id }}">
                        <td data-name-0="{{ $maudieutiet->day }}">
                            <span class="data-view">{{ $maudieutiet->day }}</span>
                            <input data-name-0="{{ $maudieutiet->day }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->day }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-1="{{ $maudieutiet->zho_N_TRUOC }}">
                            <span class="data-view">{{ $maudieutiet->zho_N_TRUOC }}</span>
                            <input data-name-1="{{ $maudieutiet->zho_N_TRUOC }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->zho_N_TRUOC }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-2="{{ $maudieutiet->zho_N_NAY }}">
                            <span class="data-view">{{ $maudieutiet->zho_N_NAY }}</span>
                            <input data-name-2="{{ $maudieutiet->zho_N_NAY }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->zho_N_NAY }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-3="{{ $maudieutiet->who_106_m3 }}">
                            <span class="data-view">{{ $maudieutiet->who_106_m3 }}</span>
                            <input data-name-3="{{ $maudieutiet->who_106_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->who_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-4="{{ $maudieutiet->Q_den_m3 }}">
                            <span class="data-view">{{ $maudieutiet->Q_den_m3 }}</span>
                            <input data-name-4="{{ $maudieutiet->Q_den_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->Q_den_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-5="{{ $maudieutiet->W_den_106_m3 }}">
                            <span class="data-view">{{ $maudieutiet->W_den_106_m3 }}</span>
                            <input data-name-5="{{ $maudieutiet->W_den_106_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->W_den_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-6="{{ $maudieutiet->QPH_m3 }}">
                            <span class="data-view">{{ $maudieutiet->QPH_m3 }}</span>
                            <input data-name-6="{{ $maudieutiet->QPH_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->QPH_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-7="{{ $maudieutiet->WPH_106_m3 }}">
                            <span class="data-view">{{ $maudieutiet->WPH_106_m3 }}</span>
                            <input data-name-7="{{ $maudieutiet->WPH_106_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->WPH_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-8="{{ $maudieutiet->Q_tran_m3 }}">
                            <span class="data-view">{{ $maudieutiet->Q_tran_m3 }}</span>
                            <input data-name-8="{{ $maudieutiet->Q_tran_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->Q_tran_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-9="{{ $maudieutiet->W_tran_106_m3 }}">
                            <span class="data-view">{{ $maudieutiet->W_tran_106_m3 }}</span>
                            <input data-name-9="{{ $maudieutiet->W_tran_106_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->W_tran_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-10="{{ $maudieutiet->Q_cong1_m3 }}">
                            <span class="data-view">{{ $maudieutiet->Q_cong1_m3 }}</span>
                            <input data-name-10="{{ $maudieutiet->Q_cong1_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->Q_cong1_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-11="{{ $maudieutiet->W_cong1_106_m3 }}">
                            <span class="data-view">{{ $maudieutiet->W_cong1_106_m3 }}</span>
                            <input data-name-11="{{ $maudieutiet->W_cong1_106_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->W_cong1_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-12="{{ $maudieutiet->Q_cong2_m3 }}">
                            <span class="data-view">{{ $maudieutiet->Q_cong2_m3 }}</span>
                            <input data-name-12="{{ $maudieutiet->Q_cong2_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->Q_cong2_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-13="{{ $maudieutiet->W_cong2_106_m3 }}">
                            <span class="data-view">{{ $maudieutiet->W_cong2_106_m3 }}</span>
                            <input data-name-13="{{ $maudieutiet->W_cong2_106_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->W_cong2_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-14="{{ $maudieutiet->Q_cong3_m3 }}">
                            <span class="data-view">{{ $maudieutiet->Q_cong3_m3 }}</span>
                            <input data-name-14="{{ $maudieutiet->Q_cong3_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->Q_cong3_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-15="{{ $maudieutiet->W_cong3_106_m3 }}">
                            <span class="data-view">{{ $maudieutiet->W_cong3_106_m3 }}</span>
                            <input data-name-15="{{ $maudieutiet->W_cong3_106_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->W_cong3_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-16="{{ $maudieutiet->Q_ton_that_m3 }}">
                            <span class="data-view">{{ $maudieutiet->Q_ton_that_m3 }}</span>
                            <input data-name-16="{{ $maudieutiet->Q_ton_that_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->Q_ton_that_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-17="{{ $maudieutiet->W_ton_that_106_m3 }}">
                            <span class="data-view">{{ $maudieutiet->W_ton_that_106_m3 }}</span>
                            <input data-name-17="{{ $maudieutiet->W_ton_that_106_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->W_ton_that_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-18="{{ $maudieutiet->Q_tong_nuoc_di_m3 }}">
                            <span class="data-view">{{ $maudieutiet->Q_tong_nuoc_di_m3 }}</span>
                            <input data-name-18="{{ $maudieutiet->Q_tong_nuoc_di_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->Q_tong_nuoc_di_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-19="{{ $maudieutiet->W_tong_nuoc_di_106_m3 }}">
                            <span class="data-view">{{ $maudieutiet->W_tong_nuoc_di_106_m3 }}</span>
                            <input data-name-19="{{ $maudieutiet->W_tong_nuoc_di_106_m3 }}" type="text" class="data-edit"
                                value="{{ $maudieutiet->W_tong_nuoc_di_106_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td>
                            <button class="edit-btn" onclick="toggleEditMode(this)">Chỉnh sửa</button>
                            <button 
                                class="update-btn" 
                                style="display: none;"
                                onclick="updateRow('{{ $maudieutiet->id }}')">
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

                for (var i = 0; i < 20; i++) {
                    var input = row.querySelector('td input[data-name-' + i + ']');
                    if (input) {
                        var columnName = 'data-name-' + i;
                        var cellData = input.value.trim();
                        rowData[columnName] = cellData;
                    }
                }

                let data = {
                    'day': rowData['data-name-0'],
                    'zho_N_TRUOC': rowData['data-name-1'],
                    'zho_N_NAY': rowData['data-name-2'],
                    'who_106_m3': rowData['data-name-3'],
                    'Q_den_m3': rowData['data-name-4'],
                    'W_den_106_m3': rowData['data-name-5'],
                    'QPH_m3': rowData['data-name-6'],
                    'WPH_106_m3': rowData['data-name-7'],
                    'Q_tran_m3': rowData['data-name-8'],
                    'W_tran_106_m3': rowData['data-name-9'],
                    'Q_cong1_m3': rowData['data-name-10'],
                    'W_cong1_106_m3': rowData['data-name-11'],
                    'Q_cong2_m3': rowData['data-name-12'],
                    'W_cong2_106_m3': rowData['data-name-13'],
                    'Q_cong3_m3': rowData['data-name-14'],
                    'W_cong3_106_m3': rowData['data-name-15'],
                    'Q_ton_that_m3': rowData['data-name-16'],
                    'W_ton_that_106_m3': rowData['data-name-17'],
                    'Q_tong_nuoc_di_m3': rowData['data-name-18'],
                    'W_tong_nuoc_di_106_m3': rowData['data-name-19'],
                }

                $.ajax({
                    url: '/mau-dieu-tiet/update/' + id,
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

            for (var i = 0; i < 20; i++) {
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

            for (var i = 0; i < 20; i++) {
                var cell = row.querySelector('td[data-name-' + i + ']');
                var columnName = 'data-name-' + i;
                var cellData = cell.textContent.trim();

                rowData[columnName] = cellData;
            }

            let data = {
                'day': rowData['data-name-0'],
                'zho_N_TRUOC': rowData['data-name-1'],
                'zho_N_NAY': rowData['data-name-2'],
                'who_106_m3': rowData['data-name-3'],
                'Q_den_m3': rowData['data-name-4'],
                'W_den_106_m3': rowData['data-name-5'],
                'QPH_m3': rowData['data-name-6'],
                'WPH_106_m3': rowData['data-name-7'],
                'Q_tran_m3': rowData['data-name-8'],
                'W_tran_106_m3': rowData['data-name-9'],
                'Q_cong1_m3': rowData['data-name-10'],
                'W_cong1_106_m3': rowData['data-name-11'],
                'Q_cong2_m3': rowData['data-name-12'],
                'W_cong2_106_m3': rowData['data-name-13'],
                'Q_cong3_m3': rowData['data-name-14'],
                'W_cong3_106_m3': rowData['data-name-15'],
                'Q_ton_that_m3': rowData['data-name-16'],
                'W_ton_that_106_m3': rowData['data-name-17'],
                'Q_tong_nuoc_di_m3': rowData['data-name-18'],
                'W_tong_nuoc_di_106_m3': rowData['data-name-19'],
            }

            $.ajax({
                url: '/mau-dieu-tiet/store',
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
