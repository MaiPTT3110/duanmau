<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
    <div class="header">
        <div class="menu">
          <ul>
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
            <li><a href="index.php?act=dichvu">Dịch Vụ</a></li>
          </ul>
        </div>
        <div class="logo"><img src="./imgs/logo.jpg" alt=""></div>
        <div class="menu">
          <ul>
            <li><a href="index.php?act=sanpham">Sản Phẩm</a></li>
            <li><a href="index.php?act=tintuc">Tin Tức</a></li>
            <a href="index.php?act=dangnhap"><button>Đăng Nhập</button></a>
          </ul>
        </div>
    </div>

    <style>
      .menu ul button:hover{
        cursor: pointer;
      }
    </style>