<main>
<div class="dangky">
    <form action="index.php?act=quenmk" class="form-dangky" method="post">
        <h4>Quên Mật Khẩu -.-</h4>
        <p>Email:</p>
        <input type="email" name="email">
        <div class="form-dangky-btn">
            <input type="submit" value="Gửi" name="guiemail">
            <input type="reset" value="Nhập Lại">
        </div>
    </form>
    <p style="color: red;">
    <?php
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
        }
    ?>
    </p>
    
</div>
<!-- <div class="user">
    <form class="signIn" action="#" method="post">
        <p class="user-title"><i class="fa-solid fa-users-rectangle"></i></p>
        <p style="font-weight: 500;">Tài Khoản</p>
        <input type="text">
        <p style="font-weight: 500;">Mật Khẩu</p>
        <input type="password" name="" id="">
        <button>Đăng Nhập</button>
        <p class="not">Bạn chưa có tài khoản. Hãy đăng kí <a href="index.php?act=dangky">ở đây</a></p>
    </form>
</div> -->
</main>

<link rel="stylesheet" href="../css/style.css">
