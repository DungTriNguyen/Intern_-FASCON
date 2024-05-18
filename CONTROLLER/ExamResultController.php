<?php
require('../Database/ConnectDatabase.php');
require('../MODEL/ExamResult.php');
require('../Database/ExamResultConnectionData.php');

class ExamResultController
{
    private $examResultConnectionData;

    public function __construct()
    {
        $this->examResultConnectionData = new ExamResultConnectionData();
    }



    function deleteObjById($id)
    {

        $result = $this->examResultConnectionData->deleteByID($id);
        if ($result) {
            return array("mess" => "success");
        } else {
            return array("mess" => "failed");
        }
    }

    function updateExamResult($obj)
    {
        $result = $this->examResultConnectionData->updateObj($obj);
        if ($result) {
            // Lấy thông tin từ đối tượng cập nhật
            $id         = $obj->getId();
            $id_member  = $obj->getIdMember();
            $id_capdaiduthi  = $obj->getIdCapDaiDuThi();
            $donluyen  =  $obj->getDonLuyen();
            $canban  = $obj->getCanBan();
            $songluyen  = $obj->getSongLuyen();
            $doikhang  = $obj->getDoiKhang();
            $lythuyet  = $obj->getLyThuyet();
            $theluc  = $obj->getTheLuc();
            $ghichu  = $obj->getGhiChu();
            // $ngaycham  = $obj->getNgayCham();

            // Trả về mảng chứa thông báo thành công và thông tin cập nhật
            return array(
                "id" => $id,
                "id_member" =>  $id_member,
                "id_capdaiduthi" =>  $id_capdaiduthi,
                "donluyen" => $donluyen,
                "canban" => $canban,
                "songluyen" =>  $songluyen,
                "doikhang" => $doikhang,
                "lythuyet" => $lythuyet,
                "theluc" => $theluc,
                "ghichu" => $ghichu,
                "mess" => "success"
            );
        } else {
            return array("mess" => "Failed");
        }
    }



    // Lấy mảng đối tượng exam result
    function getListObj()
    {

        $arr = $this->examResultConnectionData->getListObj();
        $result = array();
        if (count($arr) > 0) {
            foreach ($arr as $item) {
                $id         = $item->getId();
                $id_member  = $item->getIdMember();
                $id_capdaiduthi  = $item->getIdCapDaiDuThi();
                $donluyen  =  $item->getDonLuyen();
                $canban  = $item->getCanBan();
                $songluyen  = $item->getSongLuyen();
                $doikhang  = $item->getDoiKhang();
                $lythuyet  = $item->getLyThuyet();
                $theluc  = $item->getTheLuc();
                $ghichu  = $item->getGhiChu();
                // $ngaycham  = $item->getNgayCham();
                $obj = array(
                    "id" => $id,
                    "id_member" =>  $id_member,
                    "id_capdaiduthi" =>  $id_capdaiduthi,
                    "donluyen" => $donluyen,
                    "canban" => $canban,
                    "songluyen" =>  $songluyen,
                    "doikhang" => $doikhang,
                    "lythuyet" => $lythuyet,
                    "theluc" => $theluc,
                    "ghichu" => $ghichu,
                    // "ngaycham" => $ngaycham,
                    "mess" => "Success"
                );
                array_push($result, $obj);
            }
        } else {
            $result = array(
                "mess" => "empty"
            );
        }
        return $result;
    }



    // Tìm kiếm
    function searchExamResult($str)
    {
        $arr = $this->examResultConnectionData->getListObj();
        $result = array();
        if (count($arr) > 0) {
            foreach ($arr as $item) {
                $id         = $item->getId();
                $id_member  = $item->getIdMember();
                $id_capdaiduthi  = $item->getIdCapDaiDuThi();
                $donluyen  =  $item->getDonLuyen();
                $canban  = $item->getCanBan();
                $songluyen  = $item->getSongLuyen();
                $doikhang  = $item->getDoiKhang();
                $lythuyet  = $item->getLyThuyet();
                $theluc  = $item->getTheLuc();
                $ghichu  = $item->getGhiChu();
                // $ngaycham  = $item->getNgayCham();

                // Kiểm tra nếu chuỗi $str xuất hiện trong bất kỳ trường nào của đối tượng
                if (
                    strpos(strtolower($id), $str) !== false || strpos(strtolower($id_member), $str) !== false  ||
                    strpos(strtolower($id_capdaiduthi), $str) !== false
                ) {
                    $obj = array(
                        "id" => $id,
                        "id_member" =>  $id_member,
                        "id_capdaiduthi" =>  $id_capdaiduthi,
                        "donluyen" => $donluyen,
                        "canban" => $canban,
                        "songluyen" =>  $songluyen,
                        "doikhang" => $doikhang,
                        "lythuyet" => $lythuyet,
                        "theluc" => $theluc,
                        "ghichu" => $ghichu,
                        // "ngaycham" => $ngaycham,
                        "mess" => "Success"
                    );
                    array_push($result, $obj);
                }
            }
        }
        return $result;
    }
}




// mục lục
header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $check = new ExamResultController();

    $function = $_POST['function'];
    // checkLogin
    // menu
    switch ($function) {
        case 'deleteObjById':
            $id = $_POST['id'];
            $temp = $check->deleteObjById($id);
            echo json_encode($temp);
            break;
        case 'updateExamResult':
            $id         = $_POST['id'];
            $id_member  = $_POST['id_member'];
            $id_capdaiduthi  = $_POST['id_capdaiduthi'];
            $donluyen  =  $_POST['donluyen'];
            $canban  = $_POST['canban'];
            $songluyen  = $_POST['songluyen'];
            $doikhang  = $_POST['doikhang'];
            $lythuyet  = $_POST['lythuyet'];
            $theluc  = $_POST['theluc'];
            $ghichu  = $_POST['ghichu'];
            $obj = new ExamResult(
                $id,
                $id_member,
                $id_capdaiduthi,
                $donluyen,
                $canban,
                $songluyen,
                $doikhang,
                $lythuyet,
                $theluc,
                $ghichu
            );
            $temp = $check->updateExamResult($obj);
            echo json_encode($temp);
            break;
        case 'getListObj':
            $temp = $check->getListObj();
            echo json_encode($temp);
            break;
        case 'searchExamResult':
            $str = $_POST['str'];
            $temp = $check->searchExamResult($str);
            echo json_encode($temp);
            break;
    }
}
