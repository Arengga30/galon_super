<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="css/style2.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li class="active">
          <a href="index.html">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="Grafik.html">
            <i class="fas fa-chart-bar"></i>
            <span>Grafik</span>
          </a>
        </li>
        <li>
          <a href="Settings.html">
            <i class="fas fa-cog"></i>
            <span>Settings</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="main--content">
      <div class="header--wrapper">
        <div class="header--title">
          <span>Admin!</span>
          <h2>Settings</h2>
        </div>
        <div class="user--info">
          <div class="search--box">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search" />
          </div>
          <img src="admin.png" alt="" />
        </div>
      </div>
      <div class="card--container">
        <div class="card--wrapper"></div>
      </div>
    </div>
  </body>
</html>