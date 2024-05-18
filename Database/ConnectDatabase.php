<?php
class ConnectionDatabase
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "testphp";

    protected $conn = null;

    // Khởi tạo kết nối
    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->databaseName);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // get Conn
    public function getConn()
    {
        return $this->conn;
    }

    // close Conn
    public function closeConn()
    {
        if ($this->conn !== null) {
            $this->conn->close();
        }
    }
}
