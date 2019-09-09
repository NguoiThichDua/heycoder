<div class="row">
    <div class="col-md-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="public/img/slidedangki/AI.png" class="d-block w-100 rounded-lg" alt="..." height="400px">
                </div>
                <div class="carousel-item">
                    <img src="public/img/slidedangki/bug.png" class="d-block w-100 rounded-lg" alt="..." height="400px">
                </div>
                <div class="carousel-item">
                    <img src="public/img/slidedangki/slidedangki_1.png" class="d-block w-100 rounded-lg" alt="..." height="400px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>    

    <div class="col-md-6">
        <form action="" method="POST">
            <h1>Đăng Kí Tài Khoản</h1>
            <div class="card card-body p-3">
                <h3>Thông tin tài khoản: </h3>
                <div class="form-group">
                    <label for="exampleInputEmail1"><u>Email:</u></label>
                    <input type="email" class="form-control rounded-lg" aria-describedby="emailHelp" placeholder="Email"required pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" title="Email không hợp lệ.">
                    <small class="d-flex justify-content-end">Kiểm tra tài khoản (script)</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><u>Mật khẩu: </u></label>
                    <input type="password" class="form-control rounded-lg" placeholder="Mật khẩu" required pattern="[a-z]{8,15}"title="Tối thiểu 8 và tối đa 15 kí tự và viết thường toàn bộ.">
                    <small class="d-flex justify-content-end">Kiểm tra mật khẩu (script)</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><u>Nhập lại mật khẩu: </u></label>
                    <input type="password" class="form-control rounded-lg" placeholder="Mật khẩu nhập lại">
                    <small class="d-flex justify-content-end">Kiểm tra mật khẩu (script)</small>
                </div>
            </div>

            <div class="card card-body p-3 mt-3">
                <h3>Thông tin cá nhân: </h3>
                <div class="form-group">
                    <label for="exampleInputPassword1"><u>Họ tên: </u></label>
                    <input type="password" class="form-control rounded-lg" placeholder="Họ tên">
                    <small class="d-flex justify-content-end">Kiểm tra họ tên (script)</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><u>Giới tính: </u></label>

                    <div class="form-check">
                        <input class="form-check-input rounded-lg" type="radio" name="gioitinh" value="1" checked>
                        <label class="form-check-label" for="">
                            Nam
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input rounded-lg" type="radio" name="gioitinh" value="0">
                        <label class="form-check-label" for="">
                            Nữ
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><u>Ngày sinh: </u></label>
                    <input type="date" class="form-control rounded-lg" placeholder="Mật khẩu nhập lại">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Đăng kí">
                </div>
            </div>
        </form>
    </div>
</div>