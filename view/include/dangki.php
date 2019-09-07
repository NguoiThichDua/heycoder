<div class="row">
    <div class="col-md-12">
        <form action="" method="POST">
            <h1>Đăng Kí Tài Khoản</h1>
            <div class="jumbotron p-3">
                <h3>Thông tin tài khoản: </h3>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email: </label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email"required pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" title="Email không hợp lệ.">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mật khẩu: </label>
                    <input type="password" class="form-control" placeholder="Mật khẩu" required pattern="[a-z]{8,15}"title="Tối thiểu 8 và tối đa 15 kí tự và viết thường toàn bộ.">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nhập lại mật khẩu: </label>
                    <input type="password" class="form-control" placeholder="Mật khẩu nhập lại">
                    
                </div>
            </div>

            <div class="jumbotron p-3">
                <h3>Thông tin cá nhân: </h3>
                <div class="form-group">
                    <label for="exampleInputPassword1">Họ tên: </label>
                    <input type="password" class="form-control" placeholder="Họ tên">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giới tính: </label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gioitinh" value="1" checked>
                        <label class="form-check-label" for="">
                            Nam
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gioitinh" value="0">
                        <label class="form-check-label" for="">
                            Nữ
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ngày sinh: </label>
                    <input type="date" class="form-control" placeholder="Mật khẩu nhập lại">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Đăng kí">
                </div>
            </div>
        </form>
    </div>
</div>