@extends('web')
<style>
    @media (min-width: 768px) {

        .data-table th,
        .data-table td {
            min-width: 133px !important;
        }
    }
</style>
@section('content')
    <div style="text-align: end;">
        @can('kenh-tan-hung-excel')
            <button onclick="exportToExcel()">Xuất Excel</button>
        @endcan
        @can('kenh-tan-hung-create')
            <button onclick="addRow()">Thêm Dòng</button>
        @endcan
    </div>
    <div class="table-responsive">
        <table class="data-table">
            <thead>
                <tr>
                    <th rowspan="2">Ngày</th>
                    <th colspan="2">Z(m)</th>
                    <th rowspan="2">Chênh lệch THL</th>
                    <th colspan="3">Độ mở a(m)</th>
                    <th rowspan="2">Q(m3/s)</th>
                    <th rowspan="2">Khối lượng 24h (m3)</th>
                    <th rowspan="2">Ghi chú</th>
                </tr>
                <tr>
                    <th>Thượng lưu</th>
                    <th>Hạ lưu</th>
                    <th>a1(m)</th>
                    <th>a2(m)</th>
                    <th>a3(m)</th>
                </tr>
            </thead>
            <tbody id="table-body">
                @foreach ($kenhtanhungs as $kenhtanhung)
                    <tr data-id="{{ $kenhtanhung->id }}">
                        <td data-name-0="{{ $kenhtanhung->day }}">
                            <span class="data-view">{{ $kenhtanhung->day }}</span>
                            <input data-name-0="{{ $kenhtanhung->day }}" type="text" class="data-edit"
                                value="{{ $kenhtanhung->day }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-1="{{ $kenhtanhung->thuong_luu }}">
                            <span class="data-view">{{ $kenhtanhung->thuong_luu }}</span>
                            <input data-name-1="{{ $kenhtanhung->thuong_luu }}" type="text" class="data-edit"
                                value="{{ $kenhtanhung->thuong_luu }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-2="{{ $kenhtanhung->ha_luu }}">
                            <span class="data-view">{{ $kenhtanhung->ha_luu }}</span>
                            <input data-name-2="{{ $kenhtanhung->ha_luu }}" type="text" class="data-edit"
                                value="{{ $kenhtanhung->ha_luu }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-3="{{ $kenhtanhung->THL }}">
                            <span class="data-view">{{ $kenhtanhung->THL }}</span>
                            <input data-name-3="{{ $kenhtanhung->THL }}" type="text" class="data-edit"
                                value="{{ $kenhtanhung->THL }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-4="{{ $kenhtanhung->A_1 }}">
                            <span class="data-view">{{ $kenhtanhung->A_1 }}</span>
                            <input data-name-4="{{ $kenhtanhung->A_1 }}" type="text" class="data-edit"
                                value="{{ $kenhtanhung->A_1 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-5="{{ $kenhtanhung->A_2 }}">
                            <span class="data-view">{{ $kenhtanhung->A_2 }}</span>
                            <input data-name-5="{{ $kenhtanhung->A_2 }}" type="text" class="data-edit"
                                value="{{ $kenhtanhung->A_2 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-6="{{ $kenhtanhung->A_3 }}">
                            <span class="data-view">{{ $kenhtanhung->A_3 }}</span>
                            <input data-name-6="{{ $kenhtanhung->A_3 }}" type="text" class="data-edit"
                                value="{{ $kenhtanhung->A_3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-7="{{ $kenhtanhung->Q_m3 }}">
                            <span class="data-view">{{ $kenhtanhung->Q_m3 }}</span>
                            <input data-name-7="{{ $kenhtanhung->Q_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhtanhung->Q_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-8="{{ $kenhtanhung->khoi_luong_m3 }}">
                            <span class="data-view">{{ $kenhtanhung->khoi_luong_m3 }}</span>
                            <input data-name-8="{{ $kenhtanhung->khoi_luong_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhtanhung->khoi_luong_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-9="{{ $kenhtanhung->note }}">
                            <span class="data-view">{{ $kenhtanhung->note }}</span>
                            <input data-name-9="{{ $kenhtanhung->note }}" type="text" class="data-edit"
                                value="{{ $kenhtanhung->note }}" style="display: none;padding: 11px;">
                        </td>
                        @can('kenh-tan-hung-update')
                            <td>
                                <button class="edit-btn" onclick="toggleEditMode(this)">Chỉnh sửa</button>
                                <button class="update-btn" style="display: none;"
                                    onclick="updateRow('{{ $kenhtanhung->id }}')">Cập
                                    nhật</button>
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

                for (var i = 0; i < 10; i++) {
                    var input = row.querySelector('td input[data-name-' + i + ']');
                    if (input) {
                        var columnName = 'data-name-' + i;
                        var cellData = input.value.trim();
                        rowData[columnName] = cellData;
                    }
                }

                let data = {
                    'day': rowData['data-name-0'],
                    'thuong_luu': rowData['data-name-1'],
                    'ha_luu': rowData['data-name-2'],
                    'THL': rowData['data-name-3'],
                    'A_1': rowData['data-name-4'],
                    'A_2': rowData['data-name-5'],
                    'A_3': rowData['data-name-6'],
                    'Q_m3': rowData['data-name-7'],
                    'khoi_luong_m3': rowData['data-name-8'],
                    'note': rowData['data-name-9'],
                }

                $.ajax({
                    url: '/kenh-tan-hung/update/' + id,
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

            for (var i = 0; i < 10; i++) {
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

            for (var i = 0; i < 10; i++) {
                var cell = row.querySelector('td[data-name-' + i + ']');
                var columnName = 'data-name-' + i;
                var cellData = cell.textContent.trim();

                rowData[columnName] = cellData;
            }

            let data = {
                'day': rowData['data-name-0'],
                'thuong_luu': rowData['data-name-1'],
                'ha_luu': rowData['data-name-2'],
                'THL': rowData['data-name-3'],
                'A_1': rowData['data-name-4'],
                'A_2': rowData['data-name-5'],
                'A_3': rowData['data-name-6'],
                'Q_m3': rowData['data-name-7'],
                'khoi_luong_m3': rowData['data-name-8'],
                'note': rowData['data-name-9'],
            }

            $.ajax({
                url: '/kenh-tan-hung/store',
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
