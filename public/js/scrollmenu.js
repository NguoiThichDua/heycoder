// lấy vị trí Y ban đầu
var YBanDau = window.pageYOffset; 

// scroll
window.onscroll = function() {
    // lấy vị trí hiện tại khi scroll
    var YHienTai = window.pageYOffset; 
    
    if (YBanDau > YHienTai) {
        // scroll lên (hiện menu)
        document.getElementById("navbar").style.top = "0";
    } else {
         // scroll xuống (ẩn) menu)
        document.getElementById("navbar").style.top = "-50px";
    }
    // cập nhật vị trí Y
    YBanDau = YHienTai;
}