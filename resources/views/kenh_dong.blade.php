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
                    <th colspan="5">Cổng số 1</th>
                    <th colspan="2">CĐT-K8+669</th>
                    <th colspan="2">CĐT-K13+877</th>
                    <th colspan="2">CĐT- K20+065</th>
                    <th colspan="2">CĐT-K26+942</th>
                    <th colspan="2">CĐT-K30+300</th>
                    <th colspan="2">CĐT-K34+351</th>
                </tr>
                <tr>
                    <th rowspan="2">HTL(m)</th>
                    <th rowspan="2">HHL (m) 17,50</th>
                    <th colspan="3">Độ mở</th>
                    <th rowspan="2">HTL(m)17,32</th>
                    <th rowspan="2">HTL(m)16.20</th>
                    <th rowspan="2">HTL(m)16,07</th>
                    <th rowspan="2">HHL(m)15,90</th>
                    <th rowspan="2">HTL(m)15,69</th>
                    <th rowspan="2">HHL(m)15,49</th>
                    <th rowspan="2">HTL(m)15,19</th>
                    <th rowspan="2">HHL(m)15,00</th>
                    <th rowspan="2">HTL(m)14,85</th>
                    <th rowspan="2">HHL(m)14,40</th>
                    <th rowspan="2">HTL(m)3,82</th>
                    <th rowspan="2">HHL(m)13,62</th>
                </tr>
                <tr>
                    <th>a1</th>
                    <th>a2</th>
                    <th>a3</th>
                </tr>
            </thead>
            <tbody id="table-body">
                @foreach ($kenhdongs as $kenhdong)
                    <tr data-id="{{ $kenhdong->id }}">
                        <td data-name-0="{{ $kenhdong->day }}">
                            <span class="data-view">{{ $kenhdong->day }}</span>
                            <input data-name-0="{{ $kenhdong->day }}" type="text" class="data-edit"
                                value="{{ $kenhdong->day }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-1="{{ $kenhdong->HTL }}">
                            <span class="data-view">{{ $kenhdong->HTL }}</span>
                            <input data-name-1="{{ $kenhdong->HTL }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HTL }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-2="{{ $kenhdong->HHL_17_50 }}">
                            <span class="data-view">{{ $kenhdong->HHL_17_50 }}</span>
                            <input data-name-2="{{ $kenhdong->HHL_17_50 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HHL_17_50 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-3="{{ $kenhdong->a1 }}">
                            <span class="data-view">{{ $kenhdong->a1 }}</span>
                            <input data-name-3="{{ $kenhdong->a1 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->a1 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-4="{{ $kenhdong->a2 }}">
                            <span class="data-view">{{ $kenhdong->a2 }}</span>
                            <input data-name-4="{{ $kenhdong->a2 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->a2 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-5="{{ $kenhdong->a3 }}">
                            <span class="data-view">{{ $kenhdong->a3 }}</span>
                            <input data-name-5="{{ $kenhdong->a3 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->a3 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-6="{{ $kenhdong->HTL_17_32 }}">
                            <span class="data-view">{{ $kenhdong->HTL_17_32 }}</span>
                            <input data-name-6="{{ $kenhdong->HTL_17_32 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HTL_17_32 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-7="{{ $kenhdong->HTL_16_20 }}">
                            <span class="data-view">{{ $kenhdong->HTL_16_20 }}</span>
                            <input data-name-7="{{ $kenhdong->HTL_16_20 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HTL_16_20 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-8="{{ $kenhdong->HTL_16_07 }}">
                            <span class="data-view">{{ $kenhdong->HTL_16_07 }}</span>
                            <input data-name-8="{{ $kenhdong->HTL_16_07 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HTL_16_07 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-9="{{ $kenhdong->HHL_15_90 }}">
                            <span class="data-view">{{ $kenhdong->HHL_15_90 }}</span>
                            <input data-name-9="{{ $kenhdong->HHL_15_90 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HHL_15_90 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-10="{{ $kenhdong->HTL_15_69 }}">
                            <span class="data-view">{{ $kenhdong->HTL_15_69 }}</span>
                            <input data-name-10="{{ $kenhdong->HTL_15_69 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HTL_15_69 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-11="{{ $kenhdong->HHL_15_49 }}">
                            <span class="data-view">{{ $kenhdong->HHL_15_49 }}</span>
                            <input data-name-11="{{ $kenhdong->HHL_15_49 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HHL_15_49 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-12="{{ $kenhdong->HTL_15_19 }}">
                            <span class="data-view">{{ $kenhdong->HTL_15_19 }}</span>
                            <input data-name-12="{{ $kenhdong->HTL_15_19 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HTL_15_19 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-13="{{ $kenhdong->HHL_15_00 }}">
                            <span class="data-view">{{ $kenhdong->HHL_15_00 }}</span>
                            <input data-name-13="{{ $kenhdong->HHL_15_00 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HHL_15_00 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-14="{{ $kenhdong->HTL_14_85 }}">
                            <span class="data-view">{{ $kenhdong->HTL_14_85 }}</span>
                            <input data-name-14="{{ $kenhdong->HTL_14_85 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HTL_14_85 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-15="{{ $kenhdong->HHL_14_40 }}">
                            <span class="data-view">{{ $kenhdong->HHL_14_40 }}</span>
                            <input data-name-15="{{ $kenhdong->HHL_14_40 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HHL_14_40 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-16="{{ $kenhdong->HTL_3_82 }}">
                            <span class="data-view">{{ $kenhdong->HTL_3_82 }}</span>
                            <input data-name-16="{{ $kenhdong->HTL_3_82 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HTL_3_82 }}" style="display: none;padding: 11px;">
                        </td>
                        <td data-name-17="{{ $kenhdong->HHL_13_62 }}">
                            <span class="data-view">{{ $kenhdong->HHL_13_62 }}</span>
                            <input data-name-17="{{ $kenhdong->HHL_13_62 }}" type="text" class="data-edit"
                                value="{{ $kenhdong->HHL_13_62 }}" style="display: none;padding: 11px;">
                        </td>
                        <td>
                            <button class="edit-btn" onclick="toggleEditMode(this)">Chỉnh sửa</button>
                            <button class="update-btn" style="display: none;"
                                onclick="updateRow('{{ $kenhdong->id }}')">Cập nhật</button>
                            {{-- <button class="delete-btn">Xóa</button> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function exportToExcel() {
            // Function to export table data to Excel
            // You can implement this function using your preferred method
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

            // Kiểm tra xem row có tồn tại hay không
            if (row) {
                var rowData = {}; // Đối tượng chứa dữ liệu của hàng mới

                // Lặp qua từ 0 đến 17 để lấy giá trị của thuộc tính data-name từ mỗi ô td
                for (var i = 0; i < 18; i++) {
                    var input = row.querySelector('td input[data-name-' + i +
                        ']'); // Truy vấn trực tiếp vào input có thuộc tính data-name-0
                    if (input) {
                        var columnName = 'data-name-' + i; // Tên của thuộc tính data-name
                        var cellData = input.value.trim(); // Lấy giá trị từ input
                        rowData[columnName] = cellData; // Thêm cặp key-value vào đối tượng rowData
                    }
                }

                let data = {
                    'day': rowData['data-name-0'],
                    'HTL': rowData['data-name-1'],
                    'HHL_17_50': rowData['data-name-2'],
                    'a1': rowData['data-name-3'],
                    'a2': rowData['data-name-4'],
                    'a3': rowData['data-name-5'],
                    'HTL_17_32': rowData['data-name-6'],
                    'HTL_16_20': rowData['data-name-7'],
                    'HTL_16_07': rowData['data-name-8'],
                    'HHL_15_90': rowData['data-name-9'],
                    'HTL_15_69': rowData['data-name-10'],
                    'HHL_15_49': rowData['data-name-11'],
                    'HTL_15_19': rowData['data-name-12'],
                    'HHL_15_00': rowData['data-name-13'],
                    'HTL_14_85': rowData['data-name-14'],
                    'HHL_14_40': rowData['data-name-15'],
                    'HTL_3_82': rowData['data-name-16'],
                    'HHL_13_62': rowData['data-name-17'],
                }

                // Gửi dữ liệu cập nhật lên server
                $.ajax({
                    url: '/kenh-dong/update/' + id,
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: JSON.stringify(data),
                    dataType: 'json',
                    success: function(response) {
                        alert('Dữ liệu đã được cập nhật thành công!');
                        document.getElementById("actions").style.display = "none";
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

            // Thêm các ô có thể chỉnh sửa cho hàng mới
            for (var i = 0; i < 18; i++) {
                var cell = document.createElement('td');
                cell.setAttribute('contenteditable', 'true');
                cell.setAttribute('data-name-' + i, 'true');
                cell.classList.add('editable');

                // Sử dụng sự kiện blur để cập nhật giá trị cho thuộc tính data-name
                cell.addEventListener('blur', function(event) {
                    var value = event.target.textContent.trim(); // Lấy nội dung của ô td
                    var columnIndex = Array.from(event.target.parentNode.children).indexOf(event
                        .target); // Xác định chỉ số cột của ô td
                    event.target.setAttribute('data-name-' + columnIndex,
                        value); // Gán giá trị của ô td cho thuộc tính data-name tương ứng
                });

                newRow.appendChild(cell);
            }

            // Thêm nút Lưu cho hàng mới
            var saveButton = document.createElement('button');
            saveButton.textContent = 'Lưu';
            saveButton.onclick = function() {
                saveRow(newRow);
            };
            newRow.appendChild(saveButton);

            // Thêm hàng mới vào bảng
            tableBody.appendChild(newRow);
        }

        function saveRow(row) {
            // var rowCells = row.querySelectorAll('.editable');
            var rowData = {}; // Đối tượng chứa dữ liệu của hàng mới

            // Lặp qua từ 0 đến 17 để lấy giá trị của thuộc tính data-name từ mỗi ô td
            for (var i = 0; i < 18; i++) {
                var cell = row.querySelector('td[data-name-' + i + ']'); // Chọn ô td có thuộc tính data-name tương ứng
                var columnName = 'data-name-' + i; // Tên của thuộc tính data-name
                var cellData = cell.textContent.trim(); // Nội dung của ô td

                rowData[columnName] = cellData; // Thêm cặp key-value vào đối tượng rowData
            }

            let data = {
                'day': rowData['data-name-0'],
                'HTL': rowData['data-name-1'],
                'HHL_17_50': rowData['data-name-2'],
                'a1': rowData['data-name-3'],
                'a2': rowData['data-name-4'],
                'a3': rowData['data-name-5'],
                'HTL_17_32': rowData['data-name-6'],
                'HTL_16_20': rowData['data-name-7'],
                'HTL_16_07': rowData['data-name-8'],
                'HHL_15_90': rowData['data-name-9'],
                'HTL_15_69': rowData['data-name-10'],
                'HHL_15_49': rowData['data-name-11'],
                'HTL_15_19': rowData['data-name-12'],
                'HHL_15_00': rowData['data-name-13'],
                'HTL_14_85': rowData['data-name-14'],
                'HHL_14_40': rowData['data-name-15'],
                'HTL_3_82': rowData['data-name-16'],
                'HHL_13_62': rowData['data-name-17'],
            }

            $.ajax({
                url: '/kenh-dong/store', // Update the URL to your server endpoint
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: JSON.stringify(data), // Chuyển đổi đối tượng thành chuỗi JSON
                dataType: 'json', // Change the dataType to 'json' if your server returns JSON
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

        function showEditButtons(button) {
            document.getElementById("actions").style.display = "block";
        }

        // Function to make table cells editable
        function makeEditable() {
            var cells = document.querySelectorAll('.editable');
            cells.forEach(function(cell) {
                cell.setAttribute('contenteditable', 'true');
            });
        }

        // Call the function to make table cells editable
        makeEditable();
    </script>
@endsection
