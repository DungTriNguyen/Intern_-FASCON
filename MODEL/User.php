<?php
class User
{
    private $id;
    private $username;
    private $password;
    private $firstname;
    private $lastname;
    private $avatar;
    private $type;
    private $last_login;
    private $date_added;
    private $date_updated;
    private $code;
    private $personID;
    private $personImage;
    private $delete;
    private $phone;
    public function __construct($id, $username, $password, $firstname, $lastname, $avatar, $type, $last_login, $date_added, $date_updated, $code, $personID, $personImage, $delete, $phone)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->avatar = $avatar;
        $this->type = $type;
        $this->last_login = $last_login;
        $this->date_added = $date_added;
        $this->date_updated = $date_updated;
        $this->code = $code;
        $this->personID = $personID;
        $this->personImage = $personImage;
        $this->delete = $delete;
        $this->phone = $phone;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->$type = $type;
    }

    public function getLast_login()
    {
        return $this->last_login;
    }
    public function setLast_login($last_login)
    {
        $this->$last_login = $last_login;
    }

    public function getdDate_added()
    {
        return $this->date_added;
    }
    public function setDate_added($date_added)
    {
        $this->$date_added = $date_added;
    }

    public function getdDate_updated()
    {
        return $this->date_updated;
    }
    public function setDate_updated($date_updated)
    {
        $this->$date_updated = $date_updated;
    }

    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        $this->$code = $code;
    }

    public function getPersonID()
    {
        return $this->personID;
    }
    public function setPersonIP($personID)
    {
        $this->$personID = $personID;
    }

    public function getPersonImage()
    {
        return $this->personImage;
    }
    public function setPersonImage($personImage)
    {
        $this->$personImage = $personImage;
    }

    public function getDelete()
    {
        return $this->delete;
    }
    public function setDelete($delete)
    {
        $this->$delete = $delete;
    }

    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->$phone = $phone;
    }
}
