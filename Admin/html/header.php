<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Dashboard</title>

  <!-- Fontfaces CSS-->
  <link href="../css/font-face.css" rel="stylesheet" media="all">
  <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <!-- Bootstrap CSS-->
  <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
  <div class="page-wrapper">
    <aside class="menu-sidebar d-none d-lg-block">
      <div class="logo">
        <a href="#" style="font-size: 30px; color: black;">
          <i class='bx bxs-pizza bx-tada bx-rotate-180'></i> &nbsp;Pizza House
        </a>
      </div>
      <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">
            <li class="active has-sub">
              <a class="js-arrow" href="index.php">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-copy"></i>Quản lí sản phẩm</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="product.php">Sản phẩm</a>
                </li>
                <li>
                  <a href="category.php">Danh mục</a>
                </li>
                <li>
                  <a href="attribute.php">Thuộc tính</a>
                </li>
              </ul>
            </li>
            <!-- <li>
              <a href="user.php">
                <i class="fas fa-table"></i>Khách hàng</a>
            </li> -->
            <li>
              <a href="orders.php">
                <i class="far fa-check-square"></i>Đơn hàng</a>
            </li>
            <li>
              <a href="blog.php">
                <i class="far fa-check-square"></i>Blog</a>
            </li>
            <!-- <li>
              <a href="employee.php">
                <i class="far fa-check-square"></i>Quản lý nhân viên</a>
            </li> -->
          </ul>
        </nav>
      </div>
    </aside>
    <div class="page-container">
      <!-- TOP -->
      <header class="header-desktop">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="header-wrap float-right">
              <div class="header-button">
                <div class="noti-wrap">
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-comment-more"></i>
                    <span class="quantity">1</span>
                    <div class="mess-dropdown js-dropdown">
                      <div class="mess__title">
                        <p>You have 2 news message</p>
                      </div>
                      <div class="mess__item">
                        <div class="image img-cir img-40">
                          <img src="images/icon/avatar-06.jpg" alt="Michelle
                              Moreno" />
                        </div>
                        <div class="content">
                          <h6>Michelle Moreno</h6>
                          <p>Have sent a photo</p>
                          <span class="time">3 min ago</span>
                        </div>
                      </div>
                      <div class="mess__item">
                        <div class="image img-cir img-40">
                          <img src="images/icon/avatar-04.jpg" alt="Diane
                              Myers" />
                        </div>
                        <div class="content">
                          <h6>Diane Myers</h6>
                          <p>You are now connected on message</p>
                          <span class="time">Yesterday</span>
                        </div>
                      </div>
                      <div class="mess__footer">
                        <a href="#">View all messages</a>
                      </div>
                    </div>
                  </div>
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-email"></i>
                    <span class="quantity">1</span>
                    <div class="email-dropdown js-dropdown">
                      <div class="email__title">
                        <p>You have 3 New Emails</p>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40">
                          <img src="images/icon/avatar-06.jpg" alt="Cynthia
                              Harvey" />
                        </div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p>
                          <span>Cynthia Harvey, 3 min ago</span>
                        </div>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40">
                          <img src="images/icon/avatar-05.jpg" alt="Cynthia
                              Harvey" />
                        </div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p>
                          <span>Cynthia Harvey, Yesterday</span>
                        </div>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40">
                          <img src="images/icon/avatar-04.jpg" alt="Cynthia
                              Harvey" />
                        </div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p>
                          <span>Cynthia Harvey, April 12,,2018</span>
                        </div>
                      </div>
                      <div class="email__footer">
                        <a href="#">See all emails</a>
                      </div>
                    </div>
                  </div>
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <span class="quantity">3</span>
                    <div class="notifi-dropdown js-dropdown">
                      <div class="notifi__title">
                        <p>You have 3 Notifications</p>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c1 img-cir img-40">
                          <i class="zmdi zmdi-email-open"></i>
                        </div>
                        <div class="content">
                          <p>You got a email notification</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c2 img-cir img-40">
                          <i class="zmdi zmdi-account-box"></i>
                        </div>
                        <div class="content">
                          <p>Your account has been blocked</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c3 img-cir img-40">
                          <i class="zmdi zmdi-file-text"></i>
                        </div>
                        <div class="content">
                          <p>You got a new file</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__footer">
                        <a href="#">All notifications</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu">
                    <div class="image">
                      <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                    </div>
                    <div class="content">
                      <a class="js-acc-btn" href="#">john doe</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                      <div class="info clearfix">
                        <div class="image">
                          <a href="#">
                            <img src="images/icon/avatar-01.jpg" alt="John
                                Doe" />
                          </a>
                        </div>
                        <div class="content">
                          <h5 class="name">
                            <a href="#">john doe</a>
                          </h5>
                          <span class="email">johndoe@example.com</span>
                        </div>
                      </div>
                      <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-account"></i>Account</a>
                        </div>
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-settings"></i>Setting</a>
                        </div>
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                        </div>
                      </div>
                      <div class="account-dropdown__footer">
                        <a href="#">
                          <i class="zmdi zmdi-power"></i>Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- END HEADER -->