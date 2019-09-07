<?php
    $str1 = 'database/KetNoiNguoiDung.php';
    $str2 = '../database/KetNoiNguoiDung.php';
    $str3 = '../../../database/KetNoiNguoiDung.php';

    if(file_exists($str1)){
        $file = $str1;
    }else if(file_exists($str2)){
        $file = $str2;
    }else{
        $file = $str3;
    }
    require $file;
  
    class NguoiDungClass extends databaseNguoiDung{
        
        #Kiểm tra đăng nhập
        public function CheckDangNhap($email, $matkhau){
            $check = $this->connect->prepare("SELECT * FROM nguoidung WHERE email=? AND matkhau=?");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check->execute(array($email, $matkhau));
            $list = $check->fetch();
            
            if($list != NULL){
                return $list->KieuTaiKhoan;
            }
            else{
                return NULL;
                }
            }

        #Kiểm tra tên tài khoản
        public function CheckEmail($email){
            $check = $this->connect->prepare("SELECT * FROM nguoidung WHERE email=? ");
            $check->setFetchMode(PDO::FETCH_OBJ);
            $check -> execute(array($email));
            $count = count($check->fetchAll());
            return $count;
        }

        # Lấy tất cả tài khoản
        public function LayTatCaTaiKhoanNguoiDung(){
            $taiKhoan = $this->connect->prepare('SELECT * FROM nguoidung');
            $taiKhoan->setFetchMode(PDO::FETCH_OBJ);
            $taiKhoan->execute();
            $listTaiKhoan = $taiKhoan->fetchAll();
            return $listTaiKhoan;
        }

        #Lấy thông tin 1 tài khoản
        public function LayMotTaiKhoanNguoiDung($id){
            $taiKhoan = $this->connect->prepare("SELECT * FROM nguoidung Where id = ?");
			$taiKhoan->setFetchMode(PDO::FETCH_OBJ);
			$taiKhoan->execute(array($id));
			$list = $taiKhoan->fetch(); 
			return $list;
        }

        #Lấy thông tin 1 tài khoản
        public function LayMotTaiKhoanNguoiDungEmail($email){
            $taiKhoan = $this->connect->prepare("SELECT * FROM nguoidung Where email = ?");
            $taiKhoan->setFetchMode(PDO::FETCH_OBJ);
            $taiKhoan->execute(array($email));
            $list = $taiKhoan->fetch(); 
            return $list;
        }

        # Kiểm tra tài khoản có tồn tại không
        public function KiemTraTaiKhoan($email){
            $checkTK = $this->connect->prepare("SELECT * FROM nguoidung WHERE email=?");
            $checkTK->setFetchMode(PDO::FETCH_OBJ);
            $checkTK->execute(array($email));
            $count = count($checkTK->fetchAll());
            return $count;
        }

        # Kiểm tra số điện thoại đã được sử dụng chưa
        public function KiemTraSoDienThoai($sodienthoai){
            $checkSDT = $this->connect->prepare("SELECT * FROM nguoidung WHERE sodienthoai=?");
            $checkSDT->setFetchMode(PDO::FETCH_OBJ);
            $checkSDT->execute(array($sodienthoai));
            $count = count($checkSDT->fetchAll());
            return $count;
        }
        
        # Thêm tài khoản mới
        public function ThemTaiKhoanNguoiDungDangKi($email, $mat_khau, $ho_ten, $ngay_sinh, $gioi_tinh, $ngay_tao){
            $cauLenh = 'INSERT INTO nguoidung (email, mat_khau, ho_ten, ngay_sinh, gioi_tinh, ngay_tao) VALUES (?,?,?,?,?,?);';
            $themMoi = $this->connect->prepare($cauLenh);
            $themMoi->execute(array($email, $mat_khau, $ho_ten, $ngay_sinh, $gioi_tinh, $ngay_tao));
        }

        # Chỉnh sửa tài khoản
        public function SuaTaiKhoanNguoiDungKhongAnh($email, $mat_khau, $ho_ten, $so_dien_thoai,  $ngay_sinh, $gioi_tinh, $github_url, $id){
            $cauLenh = 'UPDATE nguoidung SET email = ? , mat_khau = ?, ho_ten = ? , so_dien_thoai = ?, ngay_sinh = ?, gioi_tinh = ?, github_url = ? WHERE nguoidung.id = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($email, $mat_khau, $ho_ten, $so_dien_thoai,  $ngay_sinh, $gioi_tinh, $github_url, $id));
        }

        public function SuaTaiKhoanNguoiDungCoAnh($anh_dai_dien, $anh_bia, $id){
            $cauLenh = 'UPDATE nguoidung SET anh_dai_dien = ?, anh_bia = ? WHERE nguoidung.id = ?';
            $capNhat = $this->connect->prepare($cauLenh);
            $capNhat->execute(array($anh_dai_dien, $anh_bia, $id));
        }

        # Xóa tài khoản
        public function XoaTaiKhoanNguoiDung($id){
            $cauLenh = 'DELETE FROM nguoidung WHERE nguoidung.id = ?';
            $xoa = $this->connect->prepare($cauLenh);
            $xoa->execute(array($id));
        }
    }
?>