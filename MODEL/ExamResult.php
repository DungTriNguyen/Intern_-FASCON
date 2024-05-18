<?php

class ExamResult
{
    private $id;
    private $id_member;
    private $id_capdaiduthi;
    private $donluyen;
    private $canban;
    private $songluyen;
    private $doikhang;
    private $lythuyet;
    private $theluc;
    private $ghichu;
    // private $ngaycham;

    public function __construct($id, $id_member, $id_capdaiduthi, $donluyen, $canban, $songluyen, $doikhang, $lythuyet, $theluc, $ghichu)
    {
        $this->id = $id;
        $this->id_member = $id_member;
        $this->id_capdaiduthi = $id_capdaiduthi;
        $this->donluyen = $donluyen;
        $this->canban = $canban;
        $this->songluyen = $songluyen;
        $this->doikhang = $doikhang;
        $this->lythuyet = $lythuyet;
        $this->theluc = $theluc;
        $this->ghichu = $ghichu;
        // $this->ngaycham = $ngaycham;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdMember()
    {
        return $this->id_member;
    }

    public function setIdMember($id_member)
    {
        $this->id_member = $id_member;
    }

    public function getIdCapDaiDuThi()
    {
        return $this->id_capdaiduthi;
    }

    public function setIdCapDaiDuThi($id_capdaiduthi)
    {
        $this->id_capdaiduthi = $id_capdaiduthi;
    }

    public function getDonLuyen()
    {
        return $this->donluyen;
    }

    public function setDonLuyen($donluyen)
    {
        $this->donluyen = $donluyen;
    }

    public function getCanBan()
    {
        return $this->canban;
    }

    public function setCanBan($canban)
    {
        $this->canban = $canban;
    }

    public function getSongLuyen()
    {
        return $this->songluyen;
    }

    public function setSongLuyen($songluyen)
    {
        $this->songluyen = $songluyen;
    }

    public function getDoiKhang()
    {
        return $this->doikhang;
    }

    public function setDoiKhang($doikhang)
    {
        $this->doikhang = $doikhang;
    }

    public function getLyThuyet()
    {
        return $this->lythuyet;
    }

    public function setLyThuyet($lythuyet)
    {
        $this->lythuyet = $lythuyet;
    }

    public function getTheLuc()
    {
        return $this->theluc;
    }

    public function setTheLuc($theluc)
    {
        $this->theluc = $theluc;
    }

    public function getGhiChu()
    {
        return $this->ghichu;
    }

    public function setGhiChu($ghichu)
    {
        $this->ghichu = $ghichu;
    }

    // public function getNgayCham()
    // {
    //     return $this->ngaycham;
    // }

    // public function setNgayCham($ngaycham)
    // {
    //     $this->ngaycham = $ngaycham;
    // }
}