<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TigerShop</title>
    <link rel="stylesheet" href="../tigershop/content/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
</head>
<body>
    <header class="">
        <section class="flex items-center justify-between w-[75%] mx-auto">
            <img class="w-[15%]" src="../tigershop/content/image/logo.png" alt="">
            <section class="flex items-center gap-x-5">
                <!-- tìm kiếm -->
                <section class="">
                    <div class="border border-[#E5E6EC] flex items-center justify-between rounded-[19px]">
                        <form action="index.php?act=sanpham" method="POST">
                        <input class="placeholder:text-[#E5E6EC] placeholder:text-[font-sans] ml-3 w-52 h-10 outline-none" name="kyw" type="text" placeholder="Tìm kiếm...">
                        <input class="text-red-500 ml-3 w-16 h-10 outline-none border-red-300" type="submit" value="Tìm" name="timkiem">
                        </form>
                    </div>
                </section>
                <!-- Liên hệ -->
                <a href="#">
                    <section class="border border-[#EA2F38] flex items-center h-10 rounded-full hover:bg-[#ea888d]">
                        <p class="text-[#EA2F38] font-sans font-[500] mx-3 ">Liên hệ tư vấn 
                            <p>
                                <svg id="phone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mr-[-1px] ml-[-1px] icon line border border-[#EA2F38] h-10 w-10 p-1 rounded-full bg-[#EA2F38]" width="48" height="48"><path id="primary" d="M21,15v3.93a2,2,0,0,1-2.29,2A18,18,0,0,1,3.14,5.29,2,2,0,0,1,5.13,3H9a1,1,0,0,1,1,.89,10.74,10.74,0,0,0,1,3.78,1,1,0,0,1-.42,1.26l-.86.49a1,1,0,0,0-.33,1.46,14.08,14.08,0,0,0,3.69,3.69,1,1,0,0,0,1.46-.33l.49-.86A1,1,0,0,1,16.33,13a10.74,10.74,0,0,0,3.78,1A1,1,0,0,1,21,15Z" style="fill: none; stroke: rgb(255,255,255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>
                            </p>
                        </p>
                    </section>
                </a>
                <!-- Đăng nhập -->
                <nav>
                    <ul>
                        <li class="dropdown">
                            <a class="dropbtn" href="index.php?act=dangnhaptaikhoan">
                                <section class="border border-[#EA2F38] bg-[#EA2F38] rounded-full w-10 h-10 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8  text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </section>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Giỏ hàng -->
                <a href="#">
                    <section class="border border-[#EA2F38] bg-[#EA2F38] rounded-full w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </section>
                </a>
            </section>
        </section>
    </header>
    <!-- Menu -->
    <nav class="sticky top-0 bg-[#EA2F38] menu1 z-[10000]">
        <ul class="w-[75%] mx-auto flex items-center gap-x-8s">
            <li class="menu py-5 px-3 hover:bg-[#ef222d]"><a class="text-white font-[500] text-[17px]" href="index.php">Trang chủ</a></li>
            <li class="menu py-5 px-3 hover:bg-[#ef222d]"><a class="text-white font-[500] text-[17px]" href="index.php?act=sanpham">Sản phẩm</a></li>
            <li class="menu py-5 px-3 hover:bg-[#ef222d]"><a class="text-white font-[500] text-[17px]" href="index.php?act=gioithieu">Giới thiệu</a></li>
            <li class="menu py-5 px-3 hover:bg-[#ef222d]"><a class="text-white font-[500] text-[17px]" href="index.php?act=tintuc">Tin tức</a></li>
        </ul>
    </nav>
    
    
        