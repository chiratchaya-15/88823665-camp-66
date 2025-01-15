<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* พื้นหลังสีฟ้าพาสเทล */
        body {
            background-color: #fcb3cf;
            color: #8a708d;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px #78a3d4; /* เพิ่มเงา */
        }

        .btn-primary {
            background-color: #0e471e; /* ปุ่ม */
            border-color: #85fa81;
        }

        .btn-primary:hover {
            background-color: #206382; /* hover */
            border-color: #234b5e;
        }

        .table-dark {
            background-color:rgb(203, 95, 41); /* หัวตาราง */
            color: rgb(196, 90, 44);
        }


        .alert-danger {
            background-color: #ffccbc;
            color: #d32f2f;
        }
    </style>
</head>
<body class="py-5">

    <div class="container">
        <div class="text-center mb-4">
    <h1 class="text-dark">Controller</h1> <!-- เปลี่ยนจาก text-primary เป็น text-dark -->
</div>

        <!-- แสดงค่า input -->
        <div class="mb-3">
            <h4>กรุณาพิมพ์ตัวเลขที่ต้องการ: <span class="text-info">{{ $myinput }}</span></h4>
            <h4>ผลลัพธ์: <span class="text-success">{{ $myvalue }}</span></h4>
        </div>

        <!-- ฟอร์มรับ input -->
        <form method="post" action="{{ url('/mycontroller') }}" class="mb-4 text-center">
            @csrf
            <div class="mb-3">
                <input type="text" id="myinput" name="myinput" class="form-control" placeholder="Enter a number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- แสดงตารางสูตรคูณ -->
        @if(isset($multiplicationTable) && count($multiplicationTable) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">ตารางสูตรคูณ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($multiplicationTable as $row)
                            <tr>
                                <td class="text-center">{{ $row }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @elseif($myinput)
            <div class="alert alert-danger" role="alert">
                กรุณากรอกตัวเลขให้ถูกต้อง!
            </div>
        @endif
    </div>

    <!-- เพิ่ม Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
