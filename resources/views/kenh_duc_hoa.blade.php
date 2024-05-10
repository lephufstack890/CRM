@extends('web')

@section('content')
    <div style="text-align: end;">
        @can('kenh-duc-hoa-excel')
            <button onclick="exportToExcel()">Xuất Excel</button>
        @endcan
        @can('kenh-duc-hoa-create')
            <button onclick="addRow()">Thêm Dòng</button>
        @endcan
    </div>
    <div class="table-responsive">
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
            <tbody id="table-body">
                @foreach ($kenhduchoas as $kenhduchoa)
                    <tr data-id="{{ $kenhduchoa->id }}">
                        <td data-name-0="{{ $kenhduchoa->day }}">
                            <span class="data-view">{{ $kenhduchoa->day }}</span>
                            <input data-name-0="{{ $kenhduchoa->day }}" type="text" class="data-edit"
                                value="{{ $kenhduchoa->day }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-1="{{ $kenhduchoa->HTL_14_08 }}">
                            <span class="data-view">{{ $kenhduchoa->HTL_14_08 }}</span>
                            <input data-name-1="{{ $kenhduchoa->HTL_14_08 }}" type="text" class="data-edit"
                                value="{{ $kenhduchoa->HTL_14_08 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-2="{{ $kenhduchoa->HHL_13_72 }}">
                            <span class="data-view">{{ $kenhduchoa->HHL_13_72 }}</span>
                            <input data-name-2="{{ $kenhduchoa->HHL_13_72 }}" type="text" class="data-edit"
                                value="{{ $kenhduchoa->HHL_13_72 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-3="{{ $kenhduchoa->HTL_13_54 }}">
                            <span class="data-view">{{ $kenhduchoa->HTL_13_54 }}</span>
                            <input data-name-3="{{ $kenhduchoa->HTL_13_54 }}" type="text" class="data-edit"
                                value="{{ $kenhduchoa->HTL_13_54 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-4="{{ $kenhduchoa->HHL_13_04 }}">
                            <span class="data-view">{{ $kenhduchoa->HHL_13_04 }}</span>
                            <input data-name-4="{{ $kenhduchoa->HHL_13_04 }}" type="text" class="data-edit"
                                value="{{ $kenhduchoa->HHL_13_04 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-5="{{ $kenhduchoa->HTL_12_85 }}">
                            <span class="data-view">{{ $kenhduchoa->HTL_12_85 }}</span>
                            <input data-name-5="{{ $kenhduchoa->HTL_12_85 }}" type="text" class="data-edit"
                                value="{{ $kenhduchoa->HTL_12_85 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-6="{{ $kenhduchoa->HHL_12_35 }}">
                            <span class="data-view">{{ $kenhduchoa->HHL_12_35 }}</span>
                            <input data-name-6="{{ $kenhduchoa->HHL_12_35 }}" type="text" class="data-edit"
                                value="{{ $kenhduchoa->HHL_12_35 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-7="{{ $kenhduchoa->HTL_9_24 }}">
                            <span class="data-view">{{ $kenhduchoa->HTL_9_24 }}</span>
                            <input data-name-7="{{ $kenhduchoa->HTL_9_24 }}" type="text" class="data-edit"
                                value="{{ $kenhduchoa->HTL_9_24 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-8="{{ $kenhduchoa->HHL_8_89 }}">
                            <span class="data-view">{{ $kenhduchoa->HHL_8_89 }}</span>
                            <input data-name-8="{{ $kenhduchoa->HHL_8_89 }}" type="text" class="data-edit"
                                value="{{ $kenhduchoa->HHL_8_89 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-9="{{ $kenhduchoa->HTL_7_50 }}">
                            <span class="data-view">{{ $kenhduchoa->HTL_7_50 }}</span>
                            <input data-name-9="{{ $kenhduchoa->HTL_7_50 }}" type="text" class="data-edit"
                                value="{{ $kenhduchoa->HTL_7_50 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-10="{{ $kenhduchoa->note }}">
                            <span class="data-view">{{ $kenhduchoa->note }}</span>
                            <input data-name-10="{{ $kenhduchoa->note }}" type="text" class="data-edit"
                                value="{{ $kenhduchoa->note }}" style="display: none;padding: 11px;">
                        </td>
                        @can('kenh-duc-hoa-update')
                            <td>
                                <button class="edit-btn" onclick="toggleEditMode(this)">Chỉnh sửa</button>
                                <button class="update-btn" style="display: none;" onclick="updateRow('{{ $kenhduchoa->id }}')">
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

                for (var i = 0; i < 11; i++) {
                    var input = row.querySelector('td input[data-name-' + i + ']');
                    if (input) {
                        var columnName = 'data-name-' + i;
                        var cellData = input.value.trim();
                        rowData[columnName] = cellData;
                    }
                }

                let data = {
                    'day': rowData['data-name-0'],
                    'HTL_14_08': rowData['data-name-1'],
                    'HHL_13_72': rowData['data-name-2'],
                    'HTL_13_54': rowData['data-name-3'],
                    'HHL_13_04': rowData['data-name-4'],
                    'HTL_12_85': rowData['data-name-5'],
                    'HHL_12_35': rowData['data-name-6'],
                    'HTL_9_24': rowData['data-name-7'],
                    'HHL_8_89': rowData['data-name-8'],
                    'HTL_7_50': rowData['data-name-9'],
                    'note': rowData['data-name-10'],
                }

                $.ajax({
                    url: '/kenh-duc-hoa/update/' + id,
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

            for (var i = 0; i < 11; i++) {
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

            for (var i = 0; i < 11; i++) {
                var cell = row.querySelector('td[data-name-' + i + ']');
                var columnName = 'data-name-' + i;
                var cellData = cell.textContent.trim();

                rowData[columnName] = cellData;
            }

            let data = {
                'day': rowData['data-name-0'],
                'HTL_14_08': rowData['data-name-1'],
                'HHL_13_72': rowData['data-name-2'],
                'HTL_13_54': rowData['data-name-3'],
                'HHL_13_04': rowData['data-name-4'],
                'HTL_12_85': rowData['data-name-5'],
                'HHL_12_35': rowData['data-name-6'],
                'HTL_9_24': rowData['data-name-7'],
                'HHL_8_89': rowData['data-name-8'],
                'HTL_7_50': rowData['data-name-9'],
                'note': rowData['data-name-10'],
            }

            $.ajax({
                url: '/kenh-duc-hoa/store',
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
