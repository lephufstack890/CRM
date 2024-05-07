@extends('web')

@section('content')
    <div style="text-align: end;">
        @can('kenh-tay-excel')
            <button onclick="exportToExcel()">Xuất Excel</button>
        @endcan
        @can('kenh-tay-create')
            <button onclick="addRow()">Thêm Dòng</button>
        @endcan
    </div>
    <div class="table-responsive">
        <table class="data-table">
            <thead>
                <tr>
                    <th rowspan="3">Ngày</th>
                    <th colspan="5">Cổng số II</th>
                    <th colspan="6">CĐTK1+500</th>
                    <th colspan="2">CĐTK13+072</th>
                    <th colspan="2">CĐTK21+643</th>
                    <th colspan="2">CĐTK25+275</th>
                    <th colspan="2">CĐTK32+721</th>
                    <th>CĐTK39+055</th>
                </tr>
                <tr>
                    <th rowspan="2">HTL(m)</th>
                    <th rowspan="2">HTL(m) 16.77</th>
                    <th colspan="3">Độ mở</th>
                    <th rowspan="2">HTL(m) 15.99</th>
                    <th rowspan="2">HHL(m) 15.49</th>
                    <th rowspan="2">a1</th>
                    <th rowspan="2">a2</th>
                    <th rowspan="2">a3</th>
                    <th rowspan="2">Q (m3/s)</th>
                    <th rowspan="2">HTL(m) 15,75</th>
                    <th rowspan="2">HHL(m) 15,55</th>
                    <th rowspan="2">HTL(m) 14,96</th>
                    <th rowspan="2">HHL(m) 14,95</th>
                    <th rowspan="2">HTL(m) 14,71</th>
                    <th rowspan="2">HHL(m) 14,46</th>
                    <th rowspan="2">HTL(m) 14,05</th>
                    <th rowspan="2">HHL(m) 14,04</th>
                    <th rowspan="2">HTL(m) 13,47</th>
                </tr>
                <tr>
                    <th>a1</th>
                    <th>a2</th>
                    <th>a3</th>
                </tr>
            </thead>
            <tbody id="table-body">
                @foreach ($kenhtays as $kenhtay)
                    <tr data-id="{{ $kenhtay->id }}">
                        <td data-name-0="{{ $kenhtay->day }}">
                            <span class="data-view">{{ $kenhtay->day }}</span>
                            <input data-name-0="{{ $kenhtay->day }}" type="text" class="data-edit"
                                value="{{ $kenhtay->day }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-1="{{ $kenhtay->HTL }}">
                            <span class="data-view">{{ $kenhtay->HTL }}</span>
                            <input data-name-1="{{ $kenhtay->HTL }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HTL }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-2="{{ $kenhtay->HTL_16_77 }}">
                            <span class="data-view">{{ $kenhtay->HTL_16_77 }}</span>
                            <input data-name-2="{{ $kenhtay->HTL_16_77 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HTL_16_77 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-3="{{ $kenhtay->m_a1 }}">
                            <span class="data-view">{{ $kenhtay->m_a1 }}</span>
                            <input data-name-3="{{ $kenhtay->m_a1 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->m_a1 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-4="{{ $kenhtay->m_a2 }}">
                            <span class="data-view">{{ $kenhtay->m_a2 }}</span>
                            <input data-name-4="{{ $kenhtay->m_a2 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->m_a2 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-5="{{ $kenhtay->m_a3 }}">
                            <span class="data-view">{{ $kenhtay->m_a3 }}</span>
                            <input data-name-5="{{ $kenhtay->m_a3 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->m_a3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-6="{{ $kenhtay->HTL_15_99 }}">
                            <span class="data-view">{{ $kenhtay->HTL_15_99 }}</span>
                            <input data-name-6="{{ $kenhtay->HTL_15_99 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HTL_15_99 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-7="{{ $kenhtay->HHL_15_49 }}">
                            <span class="data-view">{{ $kenhtay->HHL_15_49 }}</span>
                            <input data-name-7="{{ $kenhtay->HHL_15_49 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HHL_15_49 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-8="{{ $kenhtay->CDTK1_a1 }}">
                            <span class="data-view">{{ $kenhtay->CDTK1_a1 }}</span>
                            <input data-name-8="{{ $kenhtay->CDTK1_a1 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->CDTK1_a1 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-9="{{ $kenhtay->CDTK1_a2 }}">
                            <span class="data-view">{{ $kenhtay->CDTK1_a2 }}</span>
                            <input data-name-9="{{ $kenhtay->CDTK1_a2 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->CDTK1_a2 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-10="{{ $kenhtay->CDTK1_a3 }}">
                            <span class="data-view">{{ $kenhtay->CDTK1_a3 }}</span>
                            <input data-name-9="{{ $kenhtay->CDTK1_a3 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->CDTK1_a3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-11="{{ $kenhtay->Q_m3 }}">
                            <span class="data-view">{{ $kenhtay->Q_m3 }}</span>
                            <input data-name-9="{{ $kenhtay->Q_m3 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->Q_m3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-12="{{ $kenhtay->HTL_15_75 }}">
                            <span class="data-view">{{ $kenhtay->HTL_15_75 }}</span>
                            <input data-name-9="{{ $kenhtay->HTL_15_75 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HTL_15_75 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-13="{{ $kenhtay->HHL_15_55 }}">
                            <span class="data-view">{{ $kenhtay->HHL_15_55 }}</span>
                            <input data-name-9="{{ $kenhtay->HHL_15_55 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HHL_15_55 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-14="{{ $kenhtay->HTL_14_96 }}">
                            <span class="data-view">{{ $kenhtay->HTL_14_96 }}</span>
                            <input data-name-9="{{ $kenhtay->HTL_14_96 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HTL_14_96 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-15="{{ $kenhtay->HHL_14_95 }}">
                            <span class="data-view">{{ $kenhtay->HHL_14_95 }}</span>
                            <input data-name-9="{{ $kenhtay->HHL_14_95 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HHL_14_95 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-16="{{ $kenhtay->HTL_14_71 }}">
                            <span class="data-view">{{ $kenhtay->HTL_14_71 }}</span>
                            <input data-name-9="{{ $kenhtay->HTL_14_71 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HTL_14_71 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-17="{{ $kenhtay->HHL_14_46 }}">
                            <span class="data-view">{{ $kenhtay->HHL_14_46 }}</span>
                            <input data-name-9="{{ $kenhtay->HHL_14_46 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HHL_14_46 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-18="{{ $kenhtay->HTL_14_05 }}">
                            <span class="data-view">{{ $kenhtay->HTL_14_05 }}</span>
                            <input data-name-9="{{ $kenhtay->HTL_14_05 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HTL_14_05 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-19="{{ $kenhtay->HHL_14_04 }}">
                            <span class="data-view">{{ $kenhtay->HHL_14_04 }}</span>
                            <input data-name-9="{{ $kenhtay->HHL_14_04 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HHL_14_04 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-20="{{ $kenhtay->HTL_13_47 }}">
                            <span class="data-view">{{ $kenhtay->HTL_13_47 }}</span>
                            <input data-name-9="{{ $kenhtay->HTL_13_47 }}" type="text" class="data-edit"
                                value="{{ $kenhtay->HTL_13_47 }}" style="display: none;padding: 11px;">
                        </td>
                        <td>
                            @can('kenh-tay-update')
                                <button class="edit-btn" onclick="toggleEditMode(this)">Chỉnh sửa</button>
                            @endcan
                            <button class="update-btn" style="display: none;"
                                onclick="updateRow('{{ $kenhtay->id }}')">Cập
                                nhật</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function exportToExcel() {
            alert('Exporting to Excel...');
        }

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

                for (var i = 0; i < 21; i++) {
                    var input = row.querySelector('td[data-name-' + i + '] input'); // Corrected selector
                    if (input) {
                        var columnName = 'data-name-' + i;
                        var cellData = input.value.trim(); // Retrieve input value instead of textContent
                        rowData[columnName] = cellData;
                    }
                }
                let data = {
                    'day': rowData['data-name-0'],
                    'HTL': rowData['data-name-1'],
                    'HTL_16_77': rowData['data-name-2'],
                    'm_a1': rowData['data-name-3'],
                    'm_a2': rowData['data-name-4'],
                    'm_a3': rowData['data-name-5'],
                    'HTL_15_99': rowData['data-name-6'],
                    'HTL_15_49': rowData['data-name-7'],
                    'CDTK1_a1': rowData['data-name-8'],
                    'CDTK1_a2': rowData['data-name-9'],
                    'CDTK1_a3': rowData['data-name-10'],
                    'Q_m3': rowData['data-name-11'],
                    'HTL_15_75': rowData['data-name-12'],
                    'HHL_15_55': rowData['data-name-13'],
                    'HTL_14_96': rowData['data-name-14'],
                    'HHL_14_95': rowData['data-name-15'],
                    'HTL_14_71': rowData['data-name-16'],
                    'HHL_14_46': rowData['data-name-17'],
                    'HTL_14_05': rowData['data-name-18'],
                    'HHL_14_04': rowData['data-name-19'],
                    'HTL_13_47': rowData['data-name-20'],
                }
                $.ajax({
                    url: '/kenh-tay/update/' + id,
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: JSON.stringify(data), // Send rowData directly
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

            for (var i = 0; i < 21; i++) {
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

            for (var i = 0; i < 21; i++) {
                var cell = row.querySelector('td[data-name-' + i + ']');
                var columnName = 'data-name-' + i;
                var cellData = cell.textContent.trim();

                rowData[columnName] = cellData;
            }

            let data = {
                'day': rowData['data-name-0'],
                'HTL': rowData['data-name-1'],
                'HTL_16_77': rowData['data-name-2'],
                'm_a1': rowData['data-name-3'],
                'm_a2': rowData['data-name-4'],
                'm_a3': rowData['data-name-5'],
                'HTL_15_99': rowData['data-name-6'],
                'HTL_15_49': rowData['data-name-7'],
                'CDTK1_a1': rowData['data-name-8'],
                'CDTK1_a2': rowData['data-name-9'],
                'CDTK1_a3': rowData['data-name-10'],
                'Q_m3': rowData['data-name-11'],
                'HTL_15_75': rowData['data-name-12'],
                'HHL_15_55': rowData['data-name-13'],
                'HTL_14_96': rowData['data-name-14'],
                'HHL_14_95': rowData['data-name-15'],
                'HTL_14_71': rowData['data-name-16'],
                'HHL_14_46': rowData['data-name-17'],
                'HTL_14_05': rowData['data-name-18'],
                'HHL_14_04': rowData['data-name-19'],
                'HTL_13_47': rowData['data-name-20'],
            }

            $.ajax({
                url: '/kenh-tay/store',
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
