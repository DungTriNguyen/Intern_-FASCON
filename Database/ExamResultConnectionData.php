<?php

require_once 'ConnectDatabase.php';
require_once 'AbstractionDAL.php';
require_once '../MODEL/ExamResult.php';

class ExamResultConnectionData extends AbstractionDAL
{
    private $actionSQL = null;

    public function __construct()
    {
        parent::__construct();
        $this->actionSQL = parent::getConn();
    }

    public function deleteByID($id)
    {
        // Implement the deleteByID method
        $string = "DELETE FROM table_ketquathi WHERE id = '$id' ";
        // thuc hien truy suat
        return $this->actionSQL->query($string);
    }

    public function delete($obj)
    {
        // Implement the delete method
    }

    public function getListObj()
    {
        $array_list = array();
        $string = 'SELECT * FROM table_ketquathi';
        $result = $this->actionSQL->query($string);

        if ($result && $result->num_rows > 0) {
            while ($data = $result->fetch_assoc()) {
                $id = $data['id'];
                $id_member = $data['id_member'];
                $id_capdaiduthi = $data['id_capdaiduthi'];
                $donluyen = $data['donluyen'];
                $canban = $data['canban'];
                $songluyen = $data['songluyen'];
                $doikhang = $data['doikhang'];
                $lythuyet = $data['lythuyet'];
                $theluc = $data['theluc'];
                $ghichu = $data['ghichu'];
                // $ngaycham = $data['ngaycham'];

                $examResult = new ExamResult(
                    $id,
                    $id_member,
                    $id_capdaiduthi,
                    $donluyen,
                    $canban,
                    $songluyen,
                    $doikhang,
                    $lythuyet,
                    $theluc,
                    $ghichu,
                    // $ngaycham
                );

                array_push($array_list, $examResult);
            }
            return $array_list;
        } else {
            return null;
        }
    }

    public function getObj($code)
    {
        // Implement the getObj method
    }

    public function addObj($obj)
    {
        // Implement the addObj method
    }

    public function updateObj($obj)
    {
        if ($obj != null) {
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

            // Câu lệnh UPDATE
            $string = "UPDATE table_ketquathi 
        SET id_member = '$id_member', 
        id_capdaiduthi = '$id_capdaiduthi', 
        donluyen = '$donluyen', 
        canban = '$canban', 
        songluyen = '$songluyen', 
        doikhang = '$doikhang', 
        lythuyet = '$lythuyet', 
        theluc = '$theluc', 
        ghichu = '$ghichu' 
        WHERE id = '$id'";

            return $this->actionSQL->query($string);
        } else {
            return false;
        }
    }
}
