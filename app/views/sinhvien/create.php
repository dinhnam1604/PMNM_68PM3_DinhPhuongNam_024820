<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo sinh viên mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="sinhvien-container">
    <h1>Tạo sinh viên mới</h1>
    <form class="form-sv" action="?url=sinhvien/store" method="POST">
        <div class="form-row">
            <label for="MSSV">MSSV:</label>
            <input type="text" id="MSSV" name="MSSV" class="form-control">
        </div>
        <div class="form-row">
            <label for="HoTen">Họ tên:</label>
            <input type="text" id="HoTen" name="HoTen" class="form-control">
        </div>
        <div class="form-row">
            <label for="GioiTinh">Giới tính:</label>
            <select id="GioiTinh" name="GioiTinh" class="form-control">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option>
            </select>
        </div>
        <div class="form-row">
            <input type="submit" class="btn-primary-custom" value="Tạo">
            <a href="?url=sinhvien/index" class="btn btn-secondary">Hủy</a>
        </div>
    </form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>