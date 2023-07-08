<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN TIGERSHOP</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../content/css/style.css">
</head>
<body>
    <h1 class="h-[100px] text-center">
        <p class="text-2xl text-green-600">ADMIN Website TIGERSHOP</p>
    </h1>   
<div class="flex">
    <article class="h-full ml-14 mt-14 mb-10 md:ml-[280px] text-black">
    <div
      class="fixed grid  top-[50px] left-0 w-14 hover:w-64 md:w-64 bg-white h-full text-black transition-all duration-300 border border-r-[1px] z-10 sidebar shadow-2xl">
      <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
        <ul class="flex flex-col py-4 space-y-1">

          <li>
            <a href="index.php"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-house"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Trang Chủ</span>
            </a>
          </li>

          <li>
            <a href="index.php?act=adddm"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-bars-progress"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Danh Mục</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=addsp"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-box-open"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Sản Phẩm</span>
              <span
                class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=dskh"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-users"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Khách Hàng</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=dsbl"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-comments"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Bình Luận</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=dstk"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="fa-solid fa-users"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Thống Kê</span>
            </a>
          </li>
          <li>
            <a href="#"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                  </path>
                </svg>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Thông Báo</span>
              <span
                class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
            </a>
          </li>
          <li class="px-5 hidden md:block">
            <div class="flex flex-row items-center mt-5 h-8">
              <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
            </div>
          </li>
          <li>
            <a href="#"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
              </span>
                <?php
                  if (isset($_SESSION['taikhoan'])) {
                    extract($_SESSION['taikhoan']);
                    echo '<span class="ml-2 text-sm tracking-wide truncate">Xin chào : '.$ten_taikhoan.'></span>';
                  }
                  else{
                    echo '<span class="ml-2 text-sm tracking-wide truncate">Admin</span>';
                  }
                  ?>
             
            </a>
          </li>
          <li>
            <a href="index.php?act=dangxuatadmin"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[red] text-white-600 hover:text-white-800 border-l-4 hover:border-[blue] hover:text-white pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                  </path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Đăng Xuất</span>
            </a>
          </li>
        </ul>
        <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">@CHUYENTIGER</p>
      </div>
    </div>
</article>
