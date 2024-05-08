<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
    <title>Bảng Dữ liệu</title>
    <style>
        .table-responsive {
            margin-top: 10px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th,
        .data-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .data-table th {
            background-color: #f2f2f2;
        }

        .data-table tbody td:first-child {
            font-weight: bold;
        }

        ul {
            display: flex;
            justify-content: center;
            list-style: none;


        }

        ul a {
            padding: 20px;
            text-decoration: none;
            color: #333;
            font-size: 20px;
        }

        button {
            padding: 6px 20px;
            font-weight: bold;
            border: none;
            outline: none;
            background: green;
            color: #fff;
            cursor: pointer;
            margin: 10px;
        }

        #actions {
            display: none;
        }

        .active-link {
            color: green;
            text-decoration: underline;
        }


        @media (min-width: 768px) {
            .data-table {
                overflow-x: auto;
                display: block;
            }

            .data-table th,
            .data-table td {
                min-width: 200px;
            }
        }

        /* Responsive CSS */
        @media (max-width: 768px) {
            .data-table {
                overflow-x: auto;
                display: block;
            }

            .data-table th,
            .data-table td {
                min-width: 100px;
            }
        }
    </style>
</head>

<body>
    <div style="display: flex;align-items: center;justify-content: space-between;">
        <ul>
            @can('kenh-tan-hung-list')
            <a href="/" class="<?php echo $_SERVER['REQUEST_URI'] == '/' ? 'active-link' : ''; ?>">
                <li>Kênh Tân Hưng</li>
            </a>
            @endcan
            @can('kenh-dong-list')
            <a href="/kenh-dong" class="<?php echo $_SERVER['REQUEST_URI'] == '/kenh-dong' ? 'active-link' : ''; ?>">
                <li>Kênh Đông</li>
            </a>
            @endcan
            @can('kenh-tay-list')
            <a href="/kenh-tay" class="<?php echo $_SERVER['REQUEST_URI'] == '/kenh-tay' ? 'active-link' : ''; ?>">
                <li>Kênh Tây</li>
            </a>
            @endcan
            @can('kenh-phuoc-hoa-list')
            <a href="/kenh-phuoc-hoa" class="<?php echo $_SERVER['REQUEST_URI'] == '/kenh-phuoc-hoa' ? 'active-link' : ''; ?>">
                <li>Phước Hòa</li>
            </a>
            @endcan
            @can('kenh-duc-hoa-list')
            <a href="/kenh-duc-hoa" class="<?php echo $_SERVER['REQUEST_URI'] == '/kenh-duc-hoa' ? 'active-link' : ''; ?>">
                <li>Đức Hòa</li>
            </a>
            @endcan
            @can('mau-dieu-tiet-list')
            <a href="/mau-dieu-tiet" class="<?php echo $_SERVER['REQUEST_URI'] == '/mau-dieu-tiet' ? 'active-link' : ''; ?>">
                <li>Mẫu Điều Tiết</li>
            </a>
            @endcan
            @can('mau-nhap-so-list')
            <a href="/mau-nhap-so-lieu-theo-gio" class="<?php echo $_SERVER['REQUEST_URI'] == '/mau-nhap-so-lieu-theo-gio' ? 'active-link' : ''; ?>">
                <li>Mẫu Nhập Dữ Liệu Theo Giờ</li>
            </a>
            @endcan
        </ul>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
            Thoát</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <div>
        @yield('content')
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
<script>
    var pathName = window.location.pathname; // "/kenh-tay"
    var parts = pathName.split('/'); // ["", "kenh-tay"]
    var desiredPart = parts[1]; // "kenh-tay"

    function exportToExcel() {
        var table = document.querySelector('.data-table');
        if (desiredPart == "") {
            var filename = "kenh-tan-hung.xlsx";
        } else {
            var filename = desiredPart + ".xlsx";
        }
        var tableClone = table.cloneNode(true);
        var rows = tableClone.querySelectorAll('tr');
        rows.forEach(function(row) {
            var cells = row.querySelectorAll('td:last-child');
            cells.forEach(function(cell) {
                cell.parentNode.removeChild(cell);
            });
        });
        var ws = XLSX.utils.table_to_sheet(tableClone);
        var wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
        XLSX.writeFile(wb, filename);
    }
</script>

</html>
