<?php
    class databaseNguoiDung{
        public $connect;
        public function databaseNguoiDung(){
            try {
                $this->connect = new PDO('mysql:host=localhost;dbname=HeyCoder;charset=utf8','root','');
                $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (Throwable $th) {
                echo "Lỗi kết nối cơ sở dữ liệu";
                $this->connect = null;
            }
        }
    }
?>