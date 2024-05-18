<!DOCTYPE html>
<html lang="en">
<?php require('../config.php') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả chấm thi vovinam</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<style>
    /* Đảm bảo các thẻ <th> không bị ngắt dòng */
    th {
        white-space: nowrap;
    }
</style>


<body>
    <div class="container mt-5" style="max-width: 1300px;">
        <h2>Danh sách chấm thi Vovinam</h2>

        <div class="mb-3">
            <button id="addNew" class="btn btn-primary">Thêm mới</button>
            <input type="text" id="search" class="form-control" placeholder="Tìm kiếm..." style="display: inline-block; width: auto;">
        </div>

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>ID Member</th>
                    <th>ID CapDaiDuThi</th>
                    <th>Đơn Luyện</th>
                    <th>Căn Bản</th>
                    <th>Song Luyện</th>
                    <th>Đối Kháng</th>
                    <th>Lý Thuyết</th>
                    <th>Thể Lực</th>
                    <!-- <th>Tổng Điểm</th> -->
                    <th>Ghi Chú</th>
                    <!-- <th>Ngày Chấm</th> -->
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody id="examResultTable">
                <!-- <th>Hành động</th> -->
                <!-- Data will be dynamically inserted here -->
            </tbody>
        </table>
    </div>

    <!-- Modal for Add/Edit Exam Result -->
    <div id="edit-tableExamResult">
        <!-- <div class="modal fade" id="examResultModal" tabindex="-1" role="dialog" aria-labelledby="examResultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="examResultModalLabel">Thêm/Sửa Kết Quả Thi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="examResultForm">
                        <input type="hidden" id="resultId">
                        <div class="form-group">
                            <label for="idMember">ID Member:</label>
                            <input type="number" class="form-control" id="idMember" required>
                        </div>
                        <div class="form-group">
                            <label for="idCapDaiDuThi">ID CapDaiDuThi:</label>
                            <input type="number" class="form-control" id="idCapDaiDuThi" required>
                        </div>
                        <div class="form-group">
                            <label for="donLuyen">Đơn Luyện:</label>
                            <input type="number" class="form-control" id="donLuyen" required>
                        </div>
                        <div class="form-group">
                            <label for="canBan">Căn Bản:</label>
                            <input type="number" class="form-control" id="canBan" required>
                        </div>
                        <div class="form-group">
                            <label for="songLuyen">Song Luyện:</label>
                            <input type="number" class="form-control" id="songLuyen" required>
                        </div>
                        <div class="form-group">
                            <label for="doiKhang">Đối Kháng:</label>
                            <input type="number" class="form-control" id="doiKhang" required>
                        </div>
                        <div class="form-group">
                            <label for="lyThuyet">Lý Thuyết:</label>
                            <input type="number" class="form-control" id="lyThuyet" required>
                        </div>
                        <div class="form-group">
                            <label for="theLuc">Thể Lực:</label>
                            <input type="number" class="form-control" id="theLuc" required>
                        </div>
                        <div class="form-group">
                            <label for="ghiChu">Ghi Chú:</label>
                            <input type="text" class="form-control" id="ghiChu">
                        </div>

                        <div class="form-group">
                            <label for="tongdiem">Tổng Điểm:</label>
                            <input type="number" class="form-control" id="tongdiem" required>
                        </div>
                        <div class="form-group">
                            <label for="ngayCham">Ngày Chấm:</label>
                            <input type="date" class="form-control" id="ngayCham" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    </div>
    <div id="delete-tableExamResult">

    </div>
    <ul class="pagination pagination-sm justify-content-end" id="Pagination" style="cursor:pointer; margin-right:1rem;">
        <!-- <li class="page-item"><a class="page-link">Previous</a></li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link">Next</a></li> -->
    </ul>

    <!-- <script>
    $(document).ready(function() {
        // Dummy data for demonstration
        var examResults = [{
                id: 1,
                id_exam: 101,
                id_member: 1001,
                id_capdaiduthi: 1,
                ketqua: 'Đạt',
                tinhtrang: 'Hoàn thành',
                donluyen: 8,
                canban: 9,
                songluyen: 10,
                doikhang: 7,
                lythuyet: 8,
                theluc: 9,
                ghichu: 'Tốt',
                id_giamkhao: 1,
                ngaycham: '2024-05-16'
            },
            {
                id: 2,
                id_exam: 102,
                id_member: 1002,
                id_capdaiduthi: 1,
                ketqua: 'Không đạt',
                tinhtrang: 'Không hoàn thành',
                donluyen: 5,
                canban: 6,
                songluyen: 5,
                doikhang: 4,
                lythuyet: 5,
                theluc: 6,
                ghichu: 'Cần cố gắng',
                id_giamkhao: 2,
                ngaycham: '2024-05-16'
            }
        ];

        function renderTable() {
            $('#examResultTable').empty();
            examResults.forEach(function(result) {
                $('#examResultTable').append(`
                        <tr>
                            <td>${result.id}</td>
                            <td>${result.id_exam}</td>
                            <td>${result.id_member}</td>
                            <td>${result.id_capdaiduthi}</td>
                            <td>${result.ketqua}</td>
                            <td>${result.tinhtrang}</td>
                            <td>${result.donluyen}</td>
                            <td>${result.canban}</td>
                            <td>${result.songluyen}</td>
                            <td>${result.doikhang}</td>
                            <td>${result.lythuyet}</td>
                            <td>${result.theluc}</td>
                            <td>${result.ghichu}</td>
                            <td>${result.id_giamkhao}</td>
                            <td>${result.ngaycham}</td>
                            <td>
                                <button class="btn btn-warning btnEdit" data-id="${result.id}">Sửa</button>
                                <button class="btn btn-danger btnDelete" data-id="${result.id}">Xóa</button>
                            </td>
                        </tr>
                    `);
            });
        }

        renderTable();

        $('#addNew').click(function() {
            $('#examResultForm')[0].reset();
            $('#resultId').val('');
            $('#examResultModal').modal('show');
        });

        $('#examResultForm').submit(function(event) {
            event.preventDefault();
            var id = $('#resultId').val();
            var newResult = {
                id: id ? id : examResults.length + 1,
                id_exam: $('#idExam').val(),
                id_member: $('#idMember').val(),
                id_capdaiduthi: $('#idCapDaiDuThi').val(),
                ketqua: $('#ketQua').val(),
                tinhtrang: $('#tinhTrang').val(),
                donluyen: $('#donLuyen').val(),
                canban: $('#canBan').val(),
                songluyen: $('#songLuyen').val(),
                doikhang: $('#doiKhang').val(),
                lythuyet: $('#lyThuyet').val(),
                theluc: $('#theLuc').val(),
                ghichu: $('#ghiChu').val(),
                id_giamkhao: $('#idGiamKhao').val(),
                ngaycham: $('#ngayCham').val()
            };

            if (id) {
                var index = examResults.findIndex(function(result) {
                    return result.id == id;
                });
                examResults[index] = newResult;
            } else {
                examResults.push(newResult);
            }

            $('#examResultModal').modal('hide');
            renderTable();
        });

        $(document).on('click', '.btnEdit', function() {
            var id = $(this).data('id');
            var result = examResults.find(function(result) {
                return result.id == id;
            });

            $('#resultId').val(result.id);
            $('#idExam').val(result.id_exam);
            $('#idMember').val(result.id_member);
            $('#idCapDaiDuThi').val(result.id_capdaiduthi);
            $('#ketQua').val(result.ketqua);
            $('#tinhTrang').val(result.tinhtrang);
            $('#donLuyen').val(result.donluyen);
            $('#canBan').val(result.canban);
            $('#songLuyen').val(result.songluyen);
            $('#doiKhang').val(result.doikhang);
            $('#lyThuyet').val(result.lythuyet);
            $('#theLuc').val(result.theluc);
            $('#ghiChu').val(result.ghichu);
            $('#idGiamKhao').val(result.id_giamkhao);
            $('#ngayCham').val(result.ngaycham);

            $('#examResultModal').modal('show');
        });

        $(document).on('click', '.btnDelete', function() {
            var id = $(this).data('id');
            examResults = examResults.filter(function(result) {
                return result.id != id;
            });
            renderTable();
        });

        $('#search').on('input', function() {
            var query = $(this).val().toLowerCase();
            var filteredResults = examResults.filter(function(result) {
                return Object.values(result).some(function(value) {
                    return String(value).toLowerCase().includes(query);
                });
            });
            $('#examResultTable').empty();
            filteredResults.forEach(function(result) {
                $('#examResultTable').append(`
                        <tr>
                            <td>${result.id}</td>
                            <td>${result.id_exam}</td>
                            <td>${result.id_member}</td>
                            <td>${result.id_capdaiduthi}</td>
                            <td>${result.ketqua}</td>
                            <td>${result.tinhtrang}</td>
                            <td>${result.donluyen}</td>
                            <td>${result.canban}</td>
                            <td>${result.songluyen}</td>
                            <td>${result.doikhang}</td>
                            <td>${result.lythuyet}</td>
                            <td>${result.theluc}</td>
                            <td>${result.ghichu}</td>
                            <td>${result.id_giamkhao}</td>
                            <td>${result.ngaycham}</td>
                            <td>
                                <button class="btn btn-warning btnEdit" data-id="${result.id}">Sửa</button>
                                <button class="btn btn-danger btnDelete" data-id="${result.id}">Xóa</button>
                            </td>
                        </tr>
                    `);
            });
        });
    });
    </script> -->
    <script src="./javascript/DanhSachChamThi.js?v=<?php echo $version ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>