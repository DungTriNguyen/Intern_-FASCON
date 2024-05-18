// Function to fetch data from the server
// async function fetchData(page, limit) {
//   try {
//     const response = await fetch(
//       `get_exam_results.php?page=${page}&limit=${limit}`
//     );
//     const data = await response.json();
//     return data;
//   } catch (error) {
//     console.error("Error fetching data:", error);
//     return null;
//   }
// }
//Lấy danh sách đối tượng

// async function getListObj() {
//   try {
//     // Gọi AJAX để xóa payment

//     let response = await fetch("../CONTROLLER/ExamResultController.php", {
//       method: "POST",
//       headers: {
//         "Content-Type": "application/x-www-form-urlencoded",
//       },
//       body: "function=" + encodeURIComponent("getArrObj"),
//     });

//     // Try to parse the response as JSON
//     let data = await response.json();
//     console.log(data);
//     await loadData(data);
//     loadPage();
//   } catch (error) {
//     console.error(error);
//   }
// }

async function getArr() {
  try {
    // gọi AJAX để kiểm tra

    let response = await fetch("../CONTROLLER/ExamResultController.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "function=" + encodeURIComponent("getListObj"),
    });

    let data = await response.json();
    console.log(data);
    await loadData(data);
    loadPage();
  } catch (error) {
    console.error(error);
  }
}

// Function to render table rows
async function loadData(data) {
  let container = document.getElementById("examResultTable");
  let container1 = document.getElementById("edit-tableExamResult");
  let container2 = document.getElementById("delete-tableExamResult");
  // tableBody.innerHTML = "";
  let result = ``;
  let result1 = ``;
  let result2 = ``;
  for (let item of data) {
    let String = `
      <tr>
        <td>${item.id}</td>
        <td>${item.id_member}</td>
        <td>${item.id_capdaiduthi}</td>
        <td>${item.donluyen}</td>
        <td>${item.canban}</td>
        <td>${item.songluyen}</td>
        <td>${item.doikhang}</td>
        <td>${item.lythuyet}</td>
        <td>${item.theluc}</td>
        <td>${item.ghichu}</td>
        <td>
        <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPayment-${item.id}"><i class="fa fa-edit"></i> Sửa</a>
        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletePayment-${item.id}"><i class="fa fa-trash"></i> Xóa</a>
        </td>
      </tr>
    `;
    let String1 = `
    <div class="modal fade" id="editPayment-${item.id}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="editModalLabel">Cập nhật thông tin hình thức thanh toán</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                                <form id="editForm">
                                    <div class="form-group">
                                    <label for="id">ID:</label>
                                    <input type="number" class="form-control" id="${item.id}" value="${item.id}"  name="id" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="idMember">ID Member:</label>
                                    <input type="number" class="form-control" id="${item.id}-${item.id_member}" value="${item.id_member}"  name="id_member" >
                                </div>
                                <div class="form-group">
                                    <label for="idCapDaiDuThi">ID CapDaiDuThi:</label>
                                    <input type="number" class="form-control" id="${item.id}-${item.id_capdaiduthi}" value="${item.id_capdaiduthi}"  name="id_capdaiduthi" >
                                </div>
                                <div class="form-group">
                                    <label for="donLuyen">Đơn Luyện:</label>
                                    <input type="number" class="form-control" id="${item.id}-${item.donluyen}" value="${item.donluyen}"  name="donluyen" >
                                </div>
                                <div class="form-group">
                                    <label for="canBan">Căn Bản:</label>
                                    <input type="number" class="form-control" id="${item.id}-${item.canban}" value="${item.canban}"  name="canban" >
                                </div>
                                <div class="form-group">
                                    <label for="songLuyen">Song Luyện:</label>
                                    <input type="number" class="form-control" id="${item.id}-${item.songluyen}" value="${item.songluyen}"  name="songluyen" >
                                </div>
                                <div class="form-group">
                                    <label for="doiKhang">Đối Kháng:</label>
                                    <input type="number" class="form-control" id="${item.id}-${item.doikhang}" value="${item.doikhang}" name="doikhang" >
                                </div>
                                <div class="form-group">
                                    <label for="lyThuyet">Lý Thuyết:</label>
                                    <input type="number" class="form-control" id="${item.id}-${item.lythuyet}" value="${item.lythuyet}"  name="lythuyet" >
                                </div>
                                <div class="form-group">
                                    <label for="theLuc">Thể Lực:</label>
                                    <input type="number" class="form-control" id="${item.id}-${item.theluc}" value="${item.theluc}"  name="theluc" >
                                </div>
                                <div class="form-group">
                                    <label for="ghiChu">Ghi Chú:</label>
                                    <input type="text" class="form-control" id="${item.id}-${item.ghichu}" value="${item.ghichu}"  name="ghichu" disabled>
                                </div>
                                 <div style="text-align:right;">
                                     <button type="submit" data-bs-dismiss="modal" class="btn btn-primary" onclick="update_ExamResultObj('${item.id}','${item.id}-${item.id_member}','${item.id}-${item.id_capdaiduthi}','${item.id}-${item.donluyen}','${item.id}-${item.canban}','${item.id}-${item.songluyen}','${item.id}-${item.doikhang}','${item.id}-${item.lythuyet}','${item.id}-${item.theluc}','${item.id}-${item.ghichu}', event)">Cập nhật hình thức thanh toán</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
    
    
    `;
    let String2 = `
    <div class="modal fade" id="deletePayment-${item.id}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="deleteModalLabel">Xóa hình thức thanh toán</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     Bạn có chắc muốn xóa hình thức thanh toán này?
                     <br>
                     Mã hình thức thanh toán: ${item.id}
     
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                     <button type="button" data-bs-dismiss="modal" class="btn btn-danger btn-confirm-delete" onclick="delete_PaymentsById('${item.id}')">Xóa</button>
                 </div>
             </div>
         </div>
     </div>
    `;

    result += String;
    result1 += String1;
    result2 += String2;
  }
  container.innerHTML = result;
  container1.innerHTML = result1;
  container2.innerHTML = result2;
  // console.log(result1);
  // tableBody.innerHTML("beforeend", row);
}
// function dinhdangDate(currentDate) {
//   var year = currentDate.getFullYear();
//   var month = currentDate.getMonth() + 1; // Tháng bắt đầu từ 0 nên phải cộng thêm 1
//   var day = currentDate.getDate();

//   return year + "-" + month + "-" + day;
// }

/* <input type="date" class="form-control" id="${item.id}-${item.ngaycham}" value="${item.ngaycham}"  name="ngaycham" disabled></input> */

// function dinhdangDate(currentDate) {
//   var year = currentDate.getFullYear();
//   var month = ("0" + (currentDate.getMonth() + 1)).slice(-2); // Tháng bắt đầu từ 0 nên phải cộng thêm 1 và định dạng thành chuỗi có 2 chữ số
//   var day = ("0" + currentDate.getDate()).slice(-2); // Định dạng thành chuỗi có 2 chữ số

//   var hour = ("0" + currentDate.getHours()).slice(-2); // Định dạng thành chuỗi có 2 chữ số
//   var minute = ("0" + currentDate.getMinutes()).slice(-2); // Định dạng thành chuỗi có 2 chữ số
//   var second = ("0" + currentDate.getSeconds()).slice(-2); // Định dạng thành chuỗi có 2 chữ số

//   return (
//     year + "-" + month + "-" + day + " " + hour + ":" + minute + ":" + second
//   );
// }

// var currentDate = new Date(); // Lấy ngày giờ hiện tại
// var formattedDate = dinhdangDate(currentDate);
// console.log(formattedDate); // Kết quả: "2024-05-12 12:17:12"
async function update_ExamResultObj(
  id,
  id_member,
  id_capdaiduthi,
  donluyen,
  canban,
  songluyen,
  doikhang,
  lythuyet,
  theluc,
  ghichu,
  // ngaycham,
  event
) {
  event.preventDefault();
  let idValue = document.getElementById(id).value;
  let id_memberValue = document.getElementById(id_member).value;
  let id_capdaiduthiValue = document.getElementById(id_capdaiduthi).value;
  let donluyenValue = document.getElementById(donluyen).value;
  let canbanValue = document.getElementById(canban).value;
  let songluyenValue = document.getElementById(songluyen).value;
  let doikhangValue = document.getElementById(doikhang).value;
  let lythuyetValue = document.getElementById(lythuyet).value;
  let thelucValue = document.getElementById(theluc).value;
  let ghichuValue = document.getElementById(ghichu).value;
  console.log(lythuyetValue);
  // let ngaychamValue = document.getElementById(ngaycham).value.trim();

  // ngaychamValue = new Date(dinhdangDate(new Date())).toISOString().slice(0, 10);
  // ngaychamValue = dinhdangDate(new Date());
  // letngaychamValue = "current_timestamp()";
  // Kiểm tra xem có bất kỳ trường nào để trống không
  if (
    !idValue ||
    !id_memberValue ||
    !id_capdaiduthiValue ||
    !donluyenValue ||
    !canbanValue ||
    !songluyenValue ||
    !doikhangValue ||
    !lythuyetValue ||
    !thelucValue
  ) {
    Swal.fire({
      icon: "error",
      title: "Lỗi",
      text: "Vui lòng điền đầy đủ thông tin",
    });
    await getArr();
    return;
  }

  try {
    // Gọi AJAX để xóa payment

    let response = await fetch("../CONTROLLER/ExamResultController.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body:
        "function=" +
        encodeURIComponent("updateExamResult") +
        "&id=" +
        encodeURIComponent(idValue) +
        "&id_member=" +
        encodeURIComponent(id_memberValue) +
        "&id_capdaiduthi=" +
        encodeURIComponent(id_capdaiduthiValue) +
        "&donluyen=" +
        encodeURIComponent(donluyenValue) +
        "&canban=" +
        encodeURIComponent(canbanValue) +
        "&songluyen=" +
        encodeURIComponent(songluyenValue) +
        "&doikhang=" +
        encodeURIComponent(doikhangValue) +
        "&lythuyet=" +
        encodeURIComponent(lythuyetValue) +
        "&theluc=" +
        encodeURIComponent(thelucValue) +
        "&ghichu=" +
        encodeURIComponent(ghichuValue),
    });
    let data = await response.text();
    console.log(data);
    if (data.mess === "success") {
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Sửa thành công",
        showConfirmButton: false,
        timer: 1500,
      });
      await getArr();
    }
  } catch (error) {
    console.error(error);
  }
}

async function delete_PaymentsById(code) {
  try {
    // Gọi AJAX để xóa payment

    let response = await fetch("../CONTROLLER/ExamResultController.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body:
        "function=" +
        encodeURIComponent("deleteObjById") +
        "&id=" +
        encodeURIComponent(code),
    });

    let data = await response.json();
    console.log(data);
    if (data.mess === "success") {
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Đã xóa thành công",
        showConfirmButton: false,
        timer: 1500,
      });
      await getArr();
    } else {
      Swal.fire({
        icon: "error",
        title: "Xóa không thành công",
        text: "Bị ràng buộc dữ liệu",
        footer: '<a href="#"></a>',
      });
    }
  } catch (error) {
    console.error(error);
  }
}

//Phần phân trang

function loadItem(thisPage, limit) {
  // tính vị trí bắt đầu và kêt thúc
  let beginGet = limit * (thisPage - 1);
  let endGet = limit * thisPage - 1;

  // lấy tất cả các dòng dữ liệu có trong bảng
  let all_data_rows = document.querySelectorAll("#examResultTable > tr");

  all_data_rows.forEach((item, index) => {
    if (index >= beginGet && index <= endGet) {
      item.style.display = "table-row";
    } else {
      item.style.display = "none";
    }
  });

  // hàm tính có bao nhieu nút chuyển trang
  listPage(thisPage, limit, all_data_rows);
  // loadPage();
}

function listPage(thisPage, limit, all_data_rows) {
  let result = "";
  let count = Math.ceil(all_data_rows.length / limit);
  // thêm nút prev

  if (thisPage != 1) {
    let string = `<li class="page-item" onclick="loadItem(${
      Number(thisPage) - 1
    },${limit})"><a class="page-link">Previous</a></li>`;
    result += string;
  } else if (thisPage == 1) {
    let string = `<li class="page-item disabled" style="cursor: default;"><a class="page-link">Previous</a></li>`;
    result += string;
  }

  // tính xem có bao nhieu nút

  // lấy container chứa nút phân trang
  let container = document.getElementById("Pagination");

  for (let i = 1; i <= count; i++) {
    let string = `<li class="page-item" onclick="loadItem(${i},${limit})"><a class="page-link">${i}</a></li>`;
    if (i == thisPage) {
      string = `<li class="page-item active" onclick="loadItem(${i},${limit})"><a class="page-link">${i}</a></li>`;
    }
    result += string;
  }

  // thêm nút next

  if (thisPage != count) {
    let string1 = `<li class="page-item" onclick="loadItem(${
      Number(thisPage) + 1
    },${limit})"><a class="page-link">Next</a></li>`;
    result += string1;
  } else if (thisPage == count) {
    let string1 = `<li class="page-item disabled" style="cursor: default;"><a class="page-link">Next</a></li>`;
    result += string1;
  }

  container.innerHTML = result;
}

function loadPage() {
  // Lấy danh sách tất cả các thẻ <li> trong <ul> có id là "Panigation"
  var listItems = document.querySelectorAll("#Pagination li");

  // Duyệt qua từng phần tử trong danh sách
  listItems.forEach(function (item) {
    // Kiểm tra xem phần tử hiện tại có class là "active" hay không
    if (item.classList.contains("active")) {
      // Nếu có, lấy nội dung trong thẻ <a> bên trong và chuyển thành số
      var activePageText = item.querySelector("a").textContent.trim();
      var activePageNumber = parseInt(activePageText);
      console.log("Trang đang active: " + activePageNumber);
      loadItem(activePageNumber, 10);
    }
  });
}

//lấy dữ liệu từ kết quả  rearch
function searchExamResult() {
  document.getElementById("search").oninput = async function () {
    try {
      // Gọi AJAX để xóa payment
      let str = document.getElementById("search").value.trim().toLowerCase();
      let response = await fetch("../CONTROLLER/ExamResultController.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body:
          "function=" +
          encodeURIComponent("searchExamResult") +
          "&str=" +
          encodeURIComponent(str),
      });

      let data = await response.json();
      console.log(data);
      if (data.length == 0) {
        console.log("Không có dữ liệu");

        document.querySelector("#Pagination").style.display = "none";
        loadData(data);
      } else {
        loadData(data);
        document.querySelector("#Pagination").style.display = "flex";
        loadItem(1, 10);
      }

      loadPage();
    } catch (error) {
      console.error(error);
    }
  };
}

window.addEventListener("load", async function () {
  // Thực hiện các hàm bạn muốn sau khi trang web đã tải hoàn toàn, bao gồm tất cả các tài nguyên như hình ảnh, stylesheet, v.v.
  console.log("Trang đã load hoàn toàn");
  await getArr();
  loadItem(1, 10);
  searchExamResult();
});
