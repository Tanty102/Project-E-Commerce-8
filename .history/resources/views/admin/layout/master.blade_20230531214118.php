

<!doctype html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield("title") ●|● Nước Hoa</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description"
          content="This is an example dashboard (CodeLean) created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link href="./dashboard/main.css" rel="stylesheet">
    <link href="./dashboard/my_style.css" rel="stylesheet">
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
                <span>
                    <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
        </div>
        <div class="app-header__content">
            <div class="app-header-left">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
                <ul class="header-megamenu nav">
                    <li class="nav-item">
                        <a href="javascript:void(0);" data-placement="bottom" rel="popover-focus" data-offset="300"
                           data-toggle="popover-custom" class="nav-link">
                            <i class="nav-link-icon pe-7s-gift"> </i>Menu
                            <i class="fa fa-angle-down ml-2 opacity-5"></i>
                        </a>
                        <div class="rm-max-width">
                            <div class="d-none popover-custom-content">
                                <div class="dropdown-mega-menu">
                                    <div class="grid-menu grid-menu-3col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 col-xl-4">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item"> Tổng quan </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">
                                                            <i class="nav-link-icon lnr-inbox"></i>
                                                            <span> Liên lạc </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">
                                                            <i class="nav-link-icon lnr-book"></i>
                                                            <span> Sự cố </span>
                                                            <div class="ml-auto badge badge-pill badge-danger">5
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">
                                                            <i class="nav-link-icon lnr-picture"></i>
                                                            <span> Các công ty </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a disabled="" href="javascript:void(0);"
                                                           class="nav-link disabled">
                                                            <i class="nav-link-icon lnr-file-empty"></i>
                                                            <span> Bảng điều khiển </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item"> Yêu thích </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link"> Báo cáo chuyển đổi </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link"> Bắt đầu nhanh
                                                            <div class="ml-auto badge badge-success">Mới</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Người dùng &amp;
                                                        Các nhóm </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);"
                                                           class="nav-link"> Quyền sở hữu </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item"> Việc bán hàng &amp; Tiếp thị </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link"> Hàng đợi </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Nhóm tài nguyên </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Số liệu mục tiêu
                                                            <div class="ml-auto badge badge-warning">3</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link"> Chiến dịch </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="btn-group nav-item">
                        <a class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <span class="badge badge-pill badge-danger ml-0 mr-2">4</span> Cài đặt
                            <i class="fa fa-angle-down ml-2 opacity-5"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner bg-secondary">
                                    <div class="menu-header-image opacity-5"
                                         style="background-image: url('dashboard/assets/images/dropdown-header/abstract2.jpg');">
                                    </div>
                                    <div class="menu-header-content">
                                        <h5 class="menu-header-title">Tổng quan </h5>
                                        <h6 class="menu-header-subtitle"> Menu thả xuống cho mọi người </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-area-xs">
                                <div class="scrollbar-container">
                                    <h6 tabindex="-1" class="dropdown-header">Số liệu quan trọng </h6>
                                    <button type="button" tabindex="0" class="dropdown-item"> Lịch dịch vụ </button>
                                    <button type="button" tabindex="0" class="dropdown-item"> Kiến thức cơ bản </button>
                                    <button type="button" tabindex="0" class="dropdown-item"> Tài khoản </button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item"> Các sản phẩm </button>
                                    <button type="button" tabindex="0" class="dropdown-item"> Truy vấn tổng số </button>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider nav-item"></li>
                                <li class="nav-item-btn nav-item">
                                    <button class="btn-wide btn-shadow btn btn-danger btn-sm">Thoát</button>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a aria-haspopup="true" data-toggle="dropdown" class="nav-link" aria-expanded="false">
                            <i class="nav-link-icon pe-7s-settings"></i> Dự án
                            <i class="fa fa-angle-down ml-2 opacity-5"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true"
                             class="dropdown-menu-rounded dropdown-menu-lg rm-pointers dropdown-menu">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner bg-success">
                                    <div class="menu-header-image opacity-1"
                                         style="background-image: url('dashboard/assets/images/dropdown-header/abstract3.jpg');">
                                    </div>
                                    <div class="menu-header-content text-left">
                                        <h5 class="menu-header-title"> Tổng quan </h5>
                                        <h6 class="menu-header-subtitle"> Tùy chọn không giới hạn </h6>
                                        <div class="menu-header-btn-pane">
                                            <button class="mr-2 btn btn-dark btn-sm">Cài đặt</button>
                                            <button class="btn-icon btn-icon-only btn btn-warning btn-sm">
                                                <i class="pe-7s-config btn-icon-wrapper"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <i class="dropdown-icon lnr-file-empty"></i>Thiết kế đồ họa
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <i class="dropdown-icon lnr-file-empty"> </i>Phát triển ứng dụng
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <i class="dropdown-icon lnr-file-empty"> </i>Thiết Kế Biểu Tượng
                            </button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <i class="dropdown-icon lnr-file-empty"></i>Điều khoản khác
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <i class="dropdown-icon lnr-file-empty"></i>Nhà phát triển giao diện người dùng
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="app-header-right">
                <div class="header-dots">
                    <div class="dropdown">
                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                                class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-primary"></span>
                                    <i class="icon text-primary ion-android-apps"></i>
                                </span>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true"
                             class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner bg-plum-plate">
                                    <div class="menu-header-image"
                                         style="background-image: url('dashboard/assets/images/dropdown-header/abstract4.jpg');">
                                    </div>
                                    <div class="menu-header-content text-white">
                                        <h5 class="menu-header-title">Bảng điều khiển</h5>
                                        <h6 class="menu-header-subtitle">Điều hướng</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-menu grid-menu-xl grid-menu-3col">
                                <div class="no-gutters row">
                                    <div class="col-sm-6 col-xl-4">
                                        <button
                                            class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i
                                                class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                            Tự động hóa
                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-4">
                                        <button
                                            class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i
                                                class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                            </i> Báo cáo
                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-4">
                                        <button
                                            class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i
                                                class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                            </i> Cài đặt
                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-4">
                                        <button
                                            class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i
                                                class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                            </i> Nội dung
                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-4">
                                        <button
                                            class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i
                                                class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                            Hoạt động
                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-4">
                                        <button
                                            class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i
                                                class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                            </i> Liên lạc
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider nav-item"></li>
                                <li class="nav-item-btn text-center nav-item">
                                    <button class="btn-shadow btn btn-primary btn-sm">Theo dõi</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                                class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-danger"></span>
                                    <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
                                    <span class="badge badge-dot badge-dot-sm badge-danger">Thông báo</span>
                                </span>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true"
                             class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-header mb-0">
                                <div class="dropdown-menu-header-inner bg-deep-blue">
                                    <div class="menu-header-image opacity-1"
                                         style="background-image: url('dashboard/assets/images/dropdown-header/city3.jpg');">
                                    </div>
                                    <div class="menu-header-content text-dark">
                                        <h5 class="menu-header-title">Thông báo</h5>
                                        <h6 class="menu-header-subtitle">Bạn có <b>21</b> Tin nhắn chưa đọc</h6>
                                    </div>
                                </div>
                            </div>
                            <ul
                                class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                <li class="nav-item">
                                    <a role="tab" class="nav-link active" data-toggle="tab"
                                       href="#tab-messages-header">
                                        <span>Tin nhắn</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                        <span>Sự kiện</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                        <span>Lỗi hệ thống</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="p-3">
                                                <div class="notifications-box">
                                                    <div
                                                        class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                        <div
                                                            class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                            <div><span
                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div
                                                                    class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Tất cả các cuộc họp tay
                                                                    </h4>
                                                                    <span
                                                                        class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                            <div>
                                                                    <span
                                                                        class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div
                                                                    class="vertical-timeline-element-content bounce-in">
                                                                    <p>Tuy nhiên, một số khác, tại <span
                                                                            class="text-success">15:00 PM</span></p>
                                                                    <span
                                                                        class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="vertical-timeline-item dot-success vertical-timeline-element">
                                                            <div>
                                                                    <span
                                                                        class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div
                                                                    class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Xây dựng bản phát hành sản xuất
                                                                        <span
                                                                            class="badge badge-danger ml-2">MỚI</span>
                                                                    </h4>
                                                                    <span
                                                                        class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                            <div>
                                                                    <span
                                                                        class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div
                                                                    class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Một cái gì đó không quan trọng
                                                                        <div
                                                                            class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="dashboard/assets/images/avatars/1.jpg"
                                                                                         alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="dashboard/assets/images/avatars/2.jpg"
                                                                                         alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="dashboard/assets/images/avatars/3.jpg"
                                                                                         alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="dashboard/assets/images/avatars/4.jpg"
                                                                                         alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="dashboard/assets/images/avatars/5.jpg"
                                                                                         alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="dashboard/assets/images/avatars/9.jpg"
                                                                                         alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="dashboard/assets/images/avatars/7.jpg"
                                                                                         alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="dashboard/assets/images/avatars/8.jpg"
                                                                                         alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                <div class="avatar-icon"><i>+</i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </h4>
                                                                    <span
                                                                        class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="vertical-timeline-item dot-info vertical-timeline-element">
                                                            <div>
                                                                    <span
                                                                        class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div
                                                                    class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Dấu chấm này có trạng thái thông tin</h4>
                                                                    <span
                                                                        class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                            <div>
                                                                    <span
                                                                        class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div
                                                                    class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Họp tất cả
                                                                    </h4>
                                                                    <span
                                                                        class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                            <div>
                                                                    <span
                                                                        class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div
                                                                    class="vertical-timeline-element-content bounce-in">
                                                                    <p>Tuy nhiên, một số khác, tại <span
                                                                            class="text-success">15:00 PM</span>
                                                                    </p><span
                                                                        class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="vertical-timeline-item dot-success vertical-timeline-element">
                                                            <div><span
                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div
                                                                    class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Xây dựng bản phát hành sản xuất
                                                                        <span
                                                                            class="badge badge-danger ml-2">Mới</span>
                                                                    </h4>
                                                                    <span
                                                                        class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                            <div><span
                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div
                                                                    class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Dấu chấm này có trạng thái tối</h4>
                                                                    <span
                                                                        class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="p-3">
                                                <div
                                                    class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i
                                                                        class="badge badge-dot badge-dot-xl badge-success">
                                                                    </i>
                                                                </span>
                                                            <div
                                                                class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">Họp tất cả</h4>
                                                                <p>Lorem ipsum dolor sic amet, today at
                                                                    <a href="javascript:void(0);">12:00 PM</a>
                                                                </p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i
                                                                        class="badge badge-dot badge-dot-xl badge-warning">
                                                                    </i>
                                                                </span>
                                                            <div
                                                                class="vertical-timeline-element-content bounce-in">
                                                                <p>Một cuộc họp khác hôm nay, lúc <b
                                                                        class="text-danger">12:00 PM</b></p>
                                                                <p>Tuy nhiên, một cái khác, tại<span
                                                                        class="text-success">15:00 PM</span></p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i
                                                                        class="badge badge-dot badge-dot-xl badge-danger">
                                                                    </i>
                                                                </span>
                                                            <div
                                                                class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">Xây dựng bản phát hành sản xuất</h4>
                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                                    tempor incididunt ut
                                                                    labore et dolore magna elit enim at minim veniam
                                                                    quis nostrud
                                                                </p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i
                                                                        class="badge badge-dot badge-dot-xl badge-primary">
                                                                    </i>
                                                                </span>
                                                            <div
                                                                class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title text-success">Một cái gì đó không quan trọng</h4>
                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim
                                                                    at minim veniam quis nostrud</p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i
                                                                        class="badge badge-dot badge-dot-xl badge-success">
                                                                    </i>
                                                                </span>
                                                            <div
                                                                class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">Họp tất cả</h4>
                                                                <p>Lorem ipsum dolor sic amet, today at
                                                                    <a href="javascript:void(0);">12:00 PM</a>
                                                                </p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i
                                                                        class="badge badge-dot badge-dot-xl badge-warning">
                                                                    </i>
                                                                </span>
                                                            <div
                                                                class="vertical-timeline-element-content bounce-in">
                                                                <p>Một cuộc họp khác hôm nay, lúc <b
                                                                        class="text-danger">12:00 PM</b></p>
                                                                <p>Tuy nhiên, một số khác, tại<span
                                                                        class="text-success">15:00 PM</span></p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i
                                                                        class="badge badge-dot badge-dot-xl badge-danger">
                                                                    </i>
                                                                </span>
                                                            <div
                                                                class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">Xây dựng bản phát hành sản xuất</h4>
                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                                    tempor incididunt ut
                                                                    labore et dolore magna elit enim at minim veniam
                                                                    quis nostrud
                                                                </p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i
                                                                        class="badge badge-dot badge-dot-xl badge-primary">
                                                                    </i>
                                                                </span>
                                                            <div
                                                                class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title text-success">Một cái gì đó không quan trọng</h4>
                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim
                                                                    at minim veniam quis nostrud</p>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="no-results pt-3 pb-0">
                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                    <div class="swal2-success-circular-line-left"
                                                         style="background-color: rgb(255, 255, 255);"></div>
                                                    <span class="swal2-success-line-tip"></span>
                                                    <span class="swal2-success-line-long"></span>
                                                    <div class="swal2-success-ring"></div>
                                                    <div class="swal2-success-fix"
                                                         style="background-color: rgb(255, 255, 255);"></div>
                                                    <div class="swal2-success-circular-line-right"
                                                         style="background-color: rgb(255, 255, 255);"></div>
                                                </div>
                                                <div class="results-subtitle">Tất cả đã bắt kịp!</div>
                                                <div class="results-title">Không có lỗi hệ thống!</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider nav-item"></li>
                                <li class="nav-item-btn text-center nav-item">
                                    <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">Xem các thay đổi mới nhất</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button type="button" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-focus"></span>
                                    <span class="language-icon opacity-8 flag large DE"></span>
                                </span>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true"
                             class="rm-pointers dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                    <div class="menu-header-image opacity-05"
                                         style="background-image: url('dashboard/assets/images/dropdown-header/city2.jpg');">
                                    </div>
                                    <div class="menu-header-content text-center text-white">
                                        <h6 class="menu-header-subtitle mt-0"> Chọn ngôn ngữ</h6>
                                    </div>
                                </div>
                            </div>
                            <h6 tabindex="-1" class="dropdown-header"> Ngôn ngữ phổ biến</h6>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <span class="mr-3 opacity-8 flag large US"></span> USA
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <span class="mr-3 opacity-8 flag large CH"></span> Switzerland
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <span class="mr-3 opacity-8 flag large FR"></span> France
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <span class="mr-3 opacity-8 flag large ES"></span>Spain
                            </button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                            <h6 tabindex="-1" class="dropdown-header">Others</h6>
                            <button type="button" tabindex="0" class="dropdown-item active">
                                <span class="mr-3 opacity-8 flag large DE"></span> Germany
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <span class="mr-3 opacity-8 flag large IT"></span> Italy
                            </button>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button type="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false"
                                class="p-0 btn btn-link dd-chart-btn">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-success"></span>
                                    <i class="icon text-success ion-ios-analytics"></i>
                                </span>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true"
                             class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner bg-premium-dark">
                                    <div class="menu-header-image"
                                         style="background-image: url('dashboard/assets/images/dropdown-header/abstract4.jpg');">
                                    </div>
                                    <div class="menu-header-content text-white">
                                        <h5 class="menu-header-title">Người dùng trực tuyến</h5>
                                        <h6 class="menu-header-subtitle">Tổng quan về Hoạt động Tài khoản Gần đây</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-chart">
                                <div class="widget-chart-content">
                                    <div class="icon-wrapper rounded-circle">
                                        <div class="icon-wrapper-bg opacity-9 bg-focus"></div>
                                        <i class="lnr-users text-white"></i>
                                    </div>
                                    <div class="widget-numbers">
                                        <span>344k</span>
                                    </div>
                                    <div class="widget-subheading pt-2">
                                        Số lượt xem hồ sơ kể từ lần đăng nhập cuối cùng
                                    </div>
                                    <div class="widget-description text-danger">
                                        <span class="pr-1"><span>176%</span></span>
                                        <i class="fa fa-arrow-left"></i>
                                    </div>
                                </div>
                                <div class="widget-chart-wrapper">
                                    <div id="dashboard-sparkline-carousel-3-pop"></div>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider mt-0 nav-item"></li>
                                <li class="nav-item-btn text-center nav-item">
                                    <button class="btn-shine btn-wide btn-pill btn btn-warning btn-sm">
                                        <i class="fa fa-cog fa-spin mr-2"></i>Xem chi tiết
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                       class="p-0 btn">
                                        <img width="42" class="rounded-circle"
                                             src="front/img/user/{{ Auth::user()->avatar ?? 'default-avatar.jpg' }}"
                                             alt="">
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                         class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-info">
                                                <div class="menu-header-image opacity-2"
                                                     style="background-image: url('dashboard/assets/images/dropdown-header/city3.jpg');">
                                                </div>
                                                <div class="menu-header-content text-left">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                     src="front/img/user/{{ Auth::user()->avatar ?? 'default-avatar.jpg' }}" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">{{ Auth::user()->name ?? '' }}</div>
                                                                <div class="widget-subheading opacity-8">{{ Auth::user()->email ?? '' }}</div>
                                                            </div>
                                                            <div class="widget-content-right mr-2">
                                                                <a href="./admin/logout" class="btn-pill btn-shadow btn-shine btn btn-focus">
                                                                    Đăng xuất
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scroll-area-xs" style="height: 150px;">
                                            <div class="scrollbar-container ps">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item">Hoạt động</li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Trò chuyện
                                                            <div class="ml-auto badge badge-pill badge-info">8</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Khôi phục mật khẩu</a>
                                                    </li>
                                                    <li class="nav-item-header nav-item">Tài khoản của tôi
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Cài đặt
                                                            <div class="ml-auto badge badge-success">New</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Tin nhắn
                                                            <div class="ml-auto badge badge-warning">512</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Nhật ký</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item-divider mb-0 nav-item"></li>
                                        </ul>
                                        <div class="grid-menu grid-menu-2col">
                                            <div class="no-gutters row">
                                                <div class="col-sm-6">
                                                    <button
                                                        class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                        <i
                                                            class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                        Hộp thư đến Tin nhắn
                                                    </button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <button
                                                        class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                        <i
                                                            class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                        <b>Vé hỗ trợ</b>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item-divider nav-item">
                                            </li>
                                            <li class="nav-item-btn text-center nav-item">
                                                <button class="btn-wide btn btn-primary btn-sm"> Mở Tin nhắn
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading"> {{ Auth::user()->name ?? '' }} </div>
                                <div class="widget-subheading"> {{ Auth::user()->email ?? '' }} </div>
                            </div>
                            <div class="widget-content-right header-user-info ml-3">
                                <button type="button"
                                        class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                    <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-btn-lg">
                    <button type="button" class="hamburger hamburger--elastic open-right-drawer">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="ui-theme-settings">
        <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
            <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
        </button>
        <div class="theme-settings__inner">
            <div class="scrollbar-container">
                <div class="theme-settings__options-wrapper">
                    <h3 class="themeoptions-heading">Tuỳ chọn Giao diện</h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch switch-container-class"
                                                 data-class="fixed-header">
                                                <div class="switch-animate switch-on">
                                                    <input type="checkbox" checked data-toggle="toggle"
                                                           data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Tiêu đề cố định</div>
                                            <div class="widget-subheading">Làm cho tiêu đề trên cùng cố định, luôn luôn
                                                 dễ thấy!</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch switch-container-class"
                                                 data-class="fixed-sidebar">
                                                <div class="switch-animate switch-on">
                                                    <input type="checkbox" checked data-toggle="toggle"
                                                           data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Thanh bên cố định</div>
                                            <div class="widget-subheading">Làm cho thanh bên trái cố định, luôn hiển thị!</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch switch-container-class"
                                                 data-class="fixed-footer">
                                                <div class="switch-animate switch-off">
                                                    <input type="checkbox" data-toggle="toggle"
                                                           data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Chân trang cố định</div>
                                            <div class="widget-subheading">Làm cho cuối chân trang của ứng dụng được cố định, luôn hiển thị!</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="themeoptions-heading">
                        <div> Tùy chọn tiêu đề </div>
                        <button type="button"
                                class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class"
                                data-class="">
                                Khôi phục lại mặc định
                        </button>
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h5 class="pb-2">Chọn bảng phối màu</h5>
                                <div class="theme-settings-swatches">
                                    <div class="swatch-holder bg-primary switch-header-cs-class"
                                         data-class="bg-primary header-text-light"></div>
                                    <div class="swatch-holder bg-secondary switch-header-cs-class"
                                         data-class="bg-secondary header-text-light"></div>
                                    <div class="swatch-holder bg-success switch-header-cs-class"
                                         data-class="bg-success header-text-light"></div>
                                    <div class="swatch-holder bg-info switch-header-cs-class"
                                         data-class="bg-info header-text-light"></div>
                                    <div class="swatch-holder bg-warning switch-header-cs-class"
                                         data-class="bg-warning header-text-dark"></div>
                                    <div class="swatch-holder bg-danger switch-header-cs-class"
                                         data-class="bg-danger header-text-light"></div>
                                    <div class="swatch-holder bg-light switch-header-cs-class"
                                         data-class="bg-light header-text-dark"></div>
                                    <div class="swatch-holder bg-dark switch-header-cs-class"
                                         data-class="bg-dark header-text-light"></div>
                                    <div class="swatch-holder bg-focus switch-header-cs-class"
                                         data-class="bg-focus header-text-light"></div>
                                    <div class="swatch-holder bg-alternate switch-header-cs-class"
                                         data-class="bg-alternate header-text-light"></div>
                                    <div class="divider"></div>
                                    <div class="swatch-holder bg-vicious-stance switch-header-cs-class"
                                         data-class="bg-vicious-stance header-text-light"></div>
                                    <div class="swatch-holder bg-midnight-bloom switch-header-cs-class"
                                         data-class="bg-midnight-bloom header-text-light"></div>
                                    <div class="swatch-holder bg-night-sky switch-header-cs-class"
                                         data-class="bg-night-sky header-text-light"></div>
                                    <div class="swatch-holder bg-slick-carbon switch-header-cs-class"
                                         data-class="bg-slick-carbon header-text-light"></div>
                                    <div class="swatch-holder bg-asteroid switch-header-cs-class"
                                         data-class="bg-asteroid header-text-light"></div>
                                    <div class="swatch-holder bg-royal switch-header-cs-class"
                                         data-class="bg-royal header-text-light"></div>
                                    <div class="swatch-holder bg-warm-flame switch-header-cs-class"
                                         data-class="bg-warm-flame header-text-dark"></div>
                                    <div class="swatch-holder bg-night-fade switch-header-cs-class"
                                         data-class="bg-night-fade header-text-dark"></div>
                                    <div class="swatch-holder bg-sunny-morning switch-header-cs-class"
                                         data-class="bg-sunny-morning header-text-dark"></div>
                                    <div class="swatch-holder bg-tempting-azure switch-header-cs-class"
                                         data-class="bg-tempting-azure header-text-dark"></div>
                                    <div class="swatch-holder bg-amy-crisp switch-header-cs-class"
                                         data-class="bg-amy-crisp header-text-dark"></div>
                                    <div class="swatch-holder bg-heavy-rain switch-header-cs-class"
                                         data-class="bg-heavy-rain header-text-dark"></div>
                                    <div class="swatch-holder bg-mean-fruit switch-header-cs-class"
                                         data-class="bg-mean-fruit header-text-dark"></div>
                                    <div class="swatch-holder bg-malibu-beach switch-header-cs-class"
                                         data-class="bg-malibu-beach header-text-light"></div>
                                    <div class="swatch-holder bg-deep-blue switch-header-cs-class"
                                         data-class="bg-deep-blue header-text-dark"></div>
                                    <div class="swatch-holder bg-ripe-malin switch-header-cs-class"
                                         data-class="bg-ripe-malin header-text-light"></div>
                                    <div class="swatch-holder bg-arielle-smile switch-header-cs-class"
                                         data-class="bg-arielle-smile header-text-light"></div>
                                    <div class="swatch-holder bg-plum-plate switch-header-cs-class"
                                         data-class="bg-plum-plate header-text-light"></div>
                                    <div class="swatch-holder bg-happy-fisher switch-header-cs-class"
                                         data-class="bg-happy-fisher header-text-dark"></div>
                                    <div class="swatch-holder bg-happy-itmeo switch-header-cs-class"
                                         data-class="bg-happy-itmeo header-text-light"></div>
                                    <div class="swatch-holder bg-mixed-hopes switch-header-cs-class"
                                         data-class="bg-mixed-hopes header-text-light"></div>
                                    <div class="swatch-holder bg-strong-bliss switch-header-cs-class"
                                         data-class="bg-strong-bliss header-text-light"></div>
                                    <div class="swatch-holder bg-grow-early switch-header-cs-class"
                                         data-class="bg-grow-early header-text-light"></div>
                                    <div class="swatch-holder bg-love-kiss switch-header-cs-class"
                                         data-class="bg-love-kiss header-text-light"></div>
                                    <div class="swatch-holder bg-premium-dark switch-header-cs-class"
                                         data-class="bg-premium-dark header-text-light"></div>
                                    <div class="swatch-holder bg-happy-green switch-header-cs-class"
                                         data-class="bg-happy-green header-text-light"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="themeoptions-heading">
                        <div>Tùy chọn thanh bên</div>
                        <button type="button"
                                class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class"
                                data-class="">
                                Khôi phục lại mặc định
                        </button>
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <!--<li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch" data-on-label="ON" data-off-label="OFF">
                                                <div class="switch-animate switch-off">
                                                    <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Sidebar Background Image
                                            </div>
                                            <div class="widget-subheading">Enable background images for sidebar!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>-->
                            <li class="list-group-item">
                                <h5 class="pb-2">Chọn bảng phối màu</h5>
                                <div class="theme-settings-swatches">
                                    <div class="swatch-holder bg-primary switch-sidebar-cs-class"
                                         data-class="bg-primary sidebar-text-light"></div>
                                    <div class="swatch-holder bg-secondary switch-sidebar-cs-class"
                                         data-class="bg-secondary sidebar-text-light"></div>
                                    <div class="swatch-holder bg-success switch-sidebar-cs-class"
                                         data-class="bg-success sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-info switch-sidebar-cs-class"
                                         data-class="bg-info sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-warning switch-sidebar-cs-class"
                                         data-class="bg-warning sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-danger switch-sidebar-cs-class"
                                         data-class="bg-danger sidebar-text-light"></div>
                                    <div class="swatch-holder bg-light switch-sidebar-cs-class"
                                         data-class="bg-light sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-dark switch-sidebar-cs-class"
                                         data-class="bg-dark sidebar-text-light"></div>
                                    <div class="swatch-holder bg-focus switch-sidebar-cs-class"
                                         data-class="bg-focus sidebar-text-light"></div>
                                    <div class="swatch-holder bg-alternate switch-sidebar-cs-class"
                                         data-class="bg-alternate sidebar-text-light"></div>
                                    <div class="divider"></div>
                                    <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class"
                                         data-class="bg-vicious-stance sidebar-text-light"></div>
                                    <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class"
                                         data-class="bg-midnight-bloom sidebar-text-light"></div>
                                    <div class="swatch-holder bg-night-sky switch-sidebar-cs-class"
                                         data-class="bg-night-sky sidebar-text-light"></div>
                                    <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class"
                                         data-class="bg-slick-carbon sidebar-text-light"></div>
                                    <div class="swatch-holder bg-asteroid switch-sidebar-cs-class"
                                         data-class="bg-asteroid sidebar-text-light"></div>
                                    <div class="swatch-holder bg-royal switch-sidebar-cs-class"
                                         data-class="bg-royal sidebar-text-light"></div>
                                    <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class"
                                         data-class="bg-warm-flame sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-night-fade switch-sidebar-cs-class"
                                         data-class="bg-night-fade sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class"
                                         data-class="bg-sunny-morning sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class"
                                         data-class="bg-tempting-azure sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class"
                                         data-class="bg-amy-crisp sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class"
                                         data-class="bg-heavy-rain sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class"
                                         data-class="bg-mean-fruit sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class"
                                         data-class="bg-malibu-beach sidebar-text-light"></div>
                                    <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class"
                                         data-class="bg-deep-blue sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class"
                                         data-class="bg-ripe-malin sidebar-text-light"></div>
                                    <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class"
                                         data-class="bg-arielle-smile sidebar-text-light"></div>
                                    <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class"
                                         data-class="bg-plum-plate sidebar-text-light"></div>
                                    <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class"
                                         data-class="bg-happy-fisher sidebar-text-dark"></div>
                                    <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class"
                                         data-class="bg-happy-itmeo sidebar-text-light"></div>
                                    <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class"
                                         data-class="bg-mixed-hopes sidebar-text-light"></div>
                                    <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class"
                                         data-class="bg-strong-bliss sidebar-text-light"></div>
                                    <div class="swatch-holder bg-grow-early switch-sidebar-cs-class"
                                         data-class="bg-grow-early sidebar-text-light"></div>
                                    <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class"
                                         data-class="bg-love-kiss sidebar-text-light"></div>
                                    <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class"
                                         data-class="bg-premium-dark sidebar-text-light"></div>
                                    <div class="swatch-holder bg-happy-green switch-sidebar-cs-class"
                                         data-class="bg-happy-green sidebar-text-light"></div>
                                </div>
                            </li>
                            <!--<li class="theme-settings-swatches d-none list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Background Opacity
                                            </div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button type="button" class="btn-shadow opacity-3 active btn btn-primary">4%
                                                </button>
                                                <button type="button" class="btn-shadow opacity-4 btn btn-primary">6%
                                                </button>
                                                <button type="button" class="btn-shadow opacity-5 btn btn-primary">8%
                                                </button>
                                                <button type="button" class="btn-shadow opacity-6 btn btn-primary">10%
                                                </button>
                                                <button type="button" class="btn-shadow opacity-7 btn btn-primary">15%
                                                </button>
                                                <button type="button" class="btn-shadow opacity-8 btn btn-primary">20%
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>-->
                            <!--<li class="theme-settings-swatches d-none list-group-item">
                                <h5>Sidebar Image Background
                                </h5>
                                <div class="divider">
                                </div>
                                <div class="swatch-holder swatch-holder-img active">
                                    <a class="img-holder switch-trigger">
                                        <img alt=" " src="dashboard/assets/images/sidebar/city1.jpg">
                                    </a>
                                </div>
                                <div class="swatch-holder swatch-holder-img">
                                    <a class="img-holder switch-trigger">
                                        <img alt=" " src="dashboard/assets/images/sidebar/city2.jpg">
                                    </a>
                                </div>
                                <div class="swatch-holder swatch-holder-img">
                                    <a class="img-holder switch-trigger">
                                        <img alt=" " src="dashboard/assets/images/sidebar/city3.jpg">
                                    </a>
                                </div>
                                <div class="swatch-holder swatch-holder-img">
                                    <a class="img-holder switch-trigger">
                                        <img alt=" " src="dashboard/assets/images/sidebar/city4.jpg">
                                    </a>
                                </div>
                                <div class="swatch-holder swatch-holder-img">
                                    <a class="img-holder switch-trigger">
                                        <img alt=" " src="dashboard/assets/images/sidebar/city5.jpg">
                                    </a>
                                </div>
                                <div class="swatch-holder swatch-holder-img">
                                    <a class="img-holder switch-trigger">
                                        <img alt=" " src="dashboard/assets/images/sidebar/abstract1.jpg">
                                    </a>
                                </div>
                                <div class="swatch-holder swatch-holder-img">
                                    <a class="img-holder switch-trigger">
                                        <img alt=" " src="dashboard/assets/images/sidebar/abstract2.jpg">
                                    </a>
                                </div>
                                <div class="swatch-holder swatch-holder-img">
                                    <a class="img-holder switch-trigger">
                                        <img alt=" " src="dashboard/assets/images/sidebar/abstract3.jpg">
                                    </a>
                                </div>
                                <div class="swatch-holder swatch-holder-img">
                                    <a class="img-holder switch-trigger">
                                        <img alt=" " src="dashboard/assets/images/sidebar/abstract4.jpg">
                                    </a>
                                </div>
                                <div class="swatch-holder swatch-holder-img">
                                    <a class="img-holder switch-trigger">
                                        <img alt=" " src="dashboard/assets/images/sidebar/abstract5.jpg">
                                    </a>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                    <h3 class="themeoptions-heading">
                        <div>Tùy chọn nội dung chính</div>
                        <button type="button"
                                class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Khôi phục
                             Mặc định</button>
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <!--<li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch" data-on-label="ON" data-off-label="OFF">
                                                <div class="switch-animate switch-on">
                                                    <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Page Title Icon
                                            </div>
                                            <div class="widget-subheading">Enable the icon box for page titles!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch" data-on-label="ON" data-off-label="OFF">
                                                <div class="switch-animate switch-on">
                                                    <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Page Title Description
                                            </div>
                                            <div class="widget-subheading">Enable the description below page title!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>-->
                            <li class="list-group-item">
                                <h5 class="pb-2">Tab phần trang</h5>
                                <div class="theme-settings-swatches">
                                    <div role="group" class="mt-2 btn-group">
                                        <button type="button"
                                                class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class"
                                                data-class="body-tabs-line"> Đường kẻ</button>
                                        <button type="button"
                                                class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class"
                                                data-class="body-tabs-shadow"> Bóng tối </button>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h5 class="pb-2">Lược đồ màu sáng
                                </h5>
                                <div class="theme-settings-swatches">
                                    <div role="group" class="mt-2 btn-group">
                                        <button type="button"
                                                class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class"
                                                data-class="app-theme-white"> chủ đề màu trắng</button>
                                        <button type="button"
                                                class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class"
                                                data-class="app-theme-gray"> Chủ đề màu xám</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                    <span>
                        <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
            </div>
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Menu</li>

                        <li class="mm-active">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-plugin"></i>Các ứng dụng
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="./admin/user" class="{{ (request()->segment(2) == 'user') ? 'mm-active' : '' }}">
                                        <i class="metismenu-icon"></i>User
                                    </a>
                                </li>
                                <li>
                                    <a href="./admin/order" class="{{ (request()->segment(2) == 'order') ? 'mm-active' : '' }}">
                                        <i class="metismenu-icon"></i>Đơn hàng
                                    </a>
                                </li>
                                <li>
                                    <a href="./admin/product" class="{{ (request()->segment(2) == 'product') ? 'mm-active' : '' }}">
                                        <i class="metismenu-icon"></i>Sản phẩm
                                    </a>
                                </li>
                                <li>
                                    <a href="./admin/category" class="{{ (request()->segment(2) == 'category') ? 'mm-active' : '' }}">
                                        <i class="metismenu-icon"></i>Loại
                                    </a>
                                </li>
                                <li>
                                    <a href="./admin/brand" class="{{ (request()->segment(2) == 'brand') ? 'mm-active' : '' }}">
                                        <i class="metismenu-icon"></i>Nhãn hiệu
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="app-main__outer">


        {{--Main--}}
            @yield('body')





            <div class="app-wrapper-footer">
                <div class="app-footer">
                    <div class="app-footer__inner">
                        <div class="app-footer-left">
                            <div class="footer-dots">
                                <div class="dropdown">
                                    <a aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                                       class="dot-btn-wrapper">
                                        <i class="dot-btn-icon lnr-bullhorn icon-gradient bg-mean-fruit"></i>
                                        <div class="badge badge-dot badge-abs badge-dot-sm badge-danger">
                                        thông báo</div>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                         class="dropdown-menu-xl rm-pointers dropdown-menu">
                                        <div class="dropdown-menu-header mb-0">
                                            <div class="dropdown-menu-header-inner bg-deep-blue">
                                                <div class="menu-header-image opacity-1"
                                                     style="background-image: url('dashboard/assets/images/dropdown-header/city3.jpg');">
                                                </div>
                                                <div class="menu-header-content text-dark">
                                                    <h5 class="menu-header-title">thông báo</h5>
                                                    <h6 class="menu-header-subtitle">Bạn có <b>21</b> Tin nhắn chưa đọc</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <ul
                                            class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link active" data-toggle="tab"
                                                   href="#tab-messages-header1">
                                                    <span>Tin nhắn</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link" data-toggle="tab"
                                                   href="#tab-events-header1">
                                                    <span>Sự kiện</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link" data-toggle="tab"
                                                   href="#tab-errors-header1">
                                                    <span>Lỗi hệ thống</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-messages-header1" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="p-3">
                                                            <div class="notifications-box">
                                                                <div
                                                                    class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                    <div
                                                                        class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                        <div>
                                                                                <span
                                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Tất cả các cuộc họp tay</h4>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                        <div>
                                                                                <span
                                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <p>Tuy nhiên, một số khác, tại
                                                                                    <span class="text-success">15:00
                                                                                            PM</span>
                                                                                </p>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div>
                                                                                <span
                                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Xây dựng bản phát hành sản xuất
                                                                                    <span
                                                                                        class="badge badge-danger ml-2">NEW</span>
                                                                                </h4>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                        <div>
                                                                                <span
                                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Một cái gì đó không quan trọng
                                                                                    <div
                                                                                        class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div
                                                                                                class="avatar-icon">
                                                                                                <img src="dashboard/assets/images/avatars/1.jpg"
                                                                                                     alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div
                                                                                                class="avatar-icon">
                                                                                                <img src="dashboard/assets/images/avatars/2.jpg"
                                                                                                     alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div
                                                                                                class="avatar-icon">
                                                                                                <img src="dashboard/assets/images/avatars/3.jpg"
                                                                                                     alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div
                                                                                                class="avatar-icon">
                                                                                                <img src="dashboard/assets/images/avatars/4.jpg"
                                                                                                     alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div
                                                                                                class="avatar-icon">
                                                                                                <img src="dashboard/assets/images/avatars/5.jpg"
                                                                                                     alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div
                                                                                                class="avatar-icon">
                                                                                                <img src="dashboard/assets/images/avatars/9.jpg"
                                                                                                     alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div
                                                                                                class="avatar-icon">
                                                                                                <img src="dashboard/assets/images/avatars/7.jpg"
                                                                                                     alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div
                                                                                                class="avatar-icon">
                                                                                                <img src="dashboard/assets/images/avatars/8.jpg"
                                                                                                     alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                            <div
                                                                                                class="avatar-icon">
                                                                                                <i>+</i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </h4>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                        <div>
                                                                                <span
                                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Đây là một trạng thái thông tin</h4>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                        <div>
                                                                                <span
                                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Tất cả các cuộc họp tay</h4>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                        <div>
                                                                                <span
                                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <p>Tuy nhiên, một số khác, tại
                                                                                    <span class="text-success">15:00
                                                                                            PM</span>
                                                                                </p>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div>
                                                                                <span
                                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Xây dựng bản phát hành sản xuất
                                                                                    <span
                                                                                        class="badge badge-danger ml-2">NEW</span>
                                                                                </h4>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                        <div>
                                                                                <span
                                                                                    class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div
                                                                                class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Dấu chấm này có trạng thái tối</h4>
                                                                                <span
                                                                                    class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-events-header1" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="p-3">
                                                            <div
                                                                class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                <div
                                                                    class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in">
                                                                                <i
                                                                                    class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                            </span>
                                                                        <div
                                                                            class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Tất cả các cuộc họp tay</h4>
                                                                            <p>Lorem ipsum dolor sic amet, today at
                                                                                <a href="javascript:void(0);">12:00
                                                                                    PM</a>
                                                                            </p>
                                                                            <span
                                                                                class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in">
                                                                                <i
                                                                                    class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                                            </span>
                                                                        <div
                                                                            class="vertical-timeline-element-content bounce-in">
                                                                            <p>Một cuộc họp khác ngày hôm nay, tại
                                                                                <b class="text-danger">12:00 PM</b>
                                                                            </p>
                                                                            <p>Tuy nhiên, một số khác, tại <span
                                                                                    class="text-success">15:00
                                                                                        PM</span></p>
                                                                            <span
                                                                                class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in">
                                                                                <i
                                                                                    class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                            </span>
                                                                        <div
                                                                            class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Xây dựng bản phát hành sản xuất</h4>
                                                                            <p>Lorem ipsum dolor sit
                                                                                amit,consectetur eiusmdd tempor
                                                                                incididunt ut labore et dolore magna
                                                                                elit enim at
                                                                                minim veniam quis nostrud
                                                                            </p>
                                                                            <span
                                                                                class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in">
                                                                                <i
                                                                                    class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                                            </span>
                                                                        <div
                                                                            class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title text-success">
                                                                            Một cái gì đó không quan trọng</h4>
                                                                            <p>Lorem ipsum dolor sit
                                                                                amit,consectetur elit enim at
                                                                                minim veniam quis nostrud</p>
                                                                            <span
                                                                                class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in">
                                                                                <i
                                                                                    class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                            </span>
                                                                        <div
                                                                            class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Tất cả các cuộc họp tay</h4>
                                                                            <p>Lorem ipsum dolor sic amet, today at
                                                                                <a href="javascript:void(0);">12:00
                                                                                    PM</a>
                                                                            </p>
                                                                            <span
                                                                                class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in">
                                                                                <i
                                                                                    class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                                            </span>
                                                                        <div
                                                                            class="vertical-timeline-element-content bounce-in">
                                                                            <p>Một cuộc họp khác ngày hôm nay, tại
                                                                                <b class="text-danger">12:00 PM</b>
                                                                            </p>
                                                                            <p>Tuy nhiên, một số khác, tại <span
                                                                                    class="text-success">15:00
                                                                                        PM</span></p>
                                                                            <span
                                                                                class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in">
                                                                                <i
                                                                                    class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                            </span>
                                                                        <div
                                                                            class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Xây dựng bản phát hành sản xuất</h4>
                                                                            <p>Lorem ipsum dolor sit
                                                                                amit,consectetur eiusmdd tempor
                                                                                incididunt ut labore et dolore magna
                                                                                elit enim at
                                                                                minim veniam quis nostrud
                                                                            </p>
                                                                            <span
                                                                                class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="vertical-timeline-item vertical-timeline-element">
                                                                    <div>
                                                                            <span
                                                                                class="vertical-timeline-element-icon bounce-in">
                                                                                <i
                                                                                    class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                                            </span>
                                                                        <div
                                                                            class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title text-success">
                                                                            Một cái gì đó không quan trọng</h4>
                                                                            <p>Lorem ipsum dolor sit
                                                                                amit,consectetur elit enim at
                                                                                minim veniam quis nostrud
                                                                            </p>
                                                                            <span
                                                                                class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-errors-header1" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="no-results pt-3 pb-0">
                                                            <div
                                                                class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                <div class="swal2-success-circular-line-left"
                                                                     style="background-color: rgb(255, 255, 255);">
                                                                </div>
                                                                <span class="swal2-success-line-tip"></span>
                                                                <span class="swal2-success-line-long"></span>
                                                                <div class="swal2-success-ring"></div>
                                                                <div class="swal2-success-fix"
                                                                     style="background-color: rgb(255, 255, 255);">
                                                                </div>
                                                                <div class="swal2-success-circular-line-right"
                                                                     style="background-color: rgb(255, 255, 255);">
                                                                </div>
                                                            </div>
                                                            <div class="results-subtitle">Tất cả bắt kịp!</div>
                                                            <div class="results-title">Không có lỗi hệ thống!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item-divider nav-item"></li>
                                            <li class="nav-item-btn text-center nav-item">
                                                <button
                                                    class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">Xem các thay đổi mới nhất</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dots-separator"></div>
                                <div class="dropdown">
                                    <a class="dot-btn-wrapper" aria-haspopup="true" data-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="dot-btn-icon lnr-earth icon-gradient bg-happy-itmeo"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                         class="rm-pointers dropdown-menu">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                                <div class="menu-header-image opacity-05"
                                                     style="background-image: url('dashboard/assets/images/dropdown-header/city2.jpg');">
                                                </div>
                                                <div class="menu-header-content text-center text-white">
                                                    <h6 class="menu-header-subtitle mt-0"> Chọn ngôn ngữ</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 tabindex="-1" class="dropdown-header"> Ngôn ngữ phổ biến</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <span class="mr-3 opacity-8 flag large US"></span> USA
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <span class="mr-3 opacity-8 flag large CH"></span> Switzerland
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <span class="mr-3 opacity-8 flag large FR"></span>France
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <span class="mr-3 opacity-8 flag large ES"></span>Spain
                                        </button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <h6 tabindex="-1" class="dropdown-header">Others</h6>
                                        <button type="button" tabindex="0" class="dropdown-item active">
                                            <span class="mr-3 opacity-8 flag large DE"></span>Germany
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <span class="mr-3 opacity-8 flag large IT"></span> Italy
                                        </button>
                                    </div>
                                </div>
                                <div class="dots-separator"></div>
                                <div class="dropdown">
                                    <a class="dot-btn-wrapper dd-chart-btn-2" aria-haspopup="true"
                                       data-toggle="dropdown" aria-expanded="false">
                                        <i class="dot-btn-icon lnr-pie-chart icon-gradient bg-love-kiss"></i>
                                        <div class="badge badge-dot badge-abs badge-dot-sm badge-warning">
                                        Thông báo</div>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                         class="dropdown-menu-xl rm-pointers dropdown-menu">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-premium-dark">
                                                <div class="menu-header-image"
                                                     style="background-image: url('dashboard/assets/images/dropdown-header/abstract4.jpg');">
                                                </div>
                                                <div class="menu-header-content text-white">
                                                    <h5 class="menu-header-title">Người dùng trực tuyến</h5>
                                                    <h6 class="menu-header-subtitle">Tổng quan về hoạt động tài khoản gần đây</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-chart">
                                            <div class="widget-chart-content">
                                                <div class="icon-wrapper rounded-circle">
                                                    <div class="icon-wrapper-bg opacity-9 bg-focus"></div>
                                                    <i class="lnr-users text-white"></i>
                                                </div>
                                                <div class="widget-numbers">
                                                    <span>344k</span>
                                                </div>
                                                <div class="widget-subheading pt-2"> Lượt xem hồ sơ kể từ lần đăng nhập cuối cùng
                                                </div>
                                                <div class="widget-description text-danger">
                                                    <span class="pr-1"> <span>176%</span></span>
                                                    <i class="fa fa-arrow-left"></i>
                                                </div>
                                            </div>
                                            <div class="widget-chart-wrapper">
                                                <div id="dashboard-sparkline-carousel-4-pop"></div>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item-divider mt-0 nav-item"></li>
                                            <li class="nav-item-btn text-center nav-item">
                                                <button class="btn-shine btn-wide btn-pill btn btn-warning btn-sm">
                                                    <i class="fa fa-cog fa-spin mr-2"></i> Xem chi tiết
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-footer-right">
                            <ul class="header-megamenu nav">
                                <li class="nav-item">
                                    <a data-placement="top" rel="popover-focus" data-offset="300"
                                       data-toggle="popover-custom" class="nav-link">
                                       Menu chân trang
                                        <i class="fa fa-angle-up ml-2 opacity-8"></i>
                                    </a>
                                    <div class="rm-max-width rm-pointers">
                                        <div class="d-none popover-custom-content">
                                            <div class="dropdown-mega-menu dropdown-mega-menu-sm">
                                                <div class="grid-menu grid-menu-2col">
                                                    <div class="no-gutters row">
                                                        <div class="col-sm-6 col-xl-6">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item-header nav-item">Tổng quan</li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link">
                                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                                        <span>Liên lạc</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link">
                                                                        <i class="nav-link-icon lnr-book"></i>
                                                                        <span>Sự cố</span>
                                                                        <div
                                                                            class="ml-auto badge badge-pill badge-danger">
                                                                            5</div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link">
                                                                        <i class="nav-link-icon lnr-picture"></i>
                                                                        <span>Các công ty</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a disabled="" class="nav-link disabled">
                                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                                        <span>Bảng điều khiển</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6 col-xl-6">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item-header nav-item">Việc bán hàng &amp;
                                                                Thị trường</li>
                                                                <li class="nav-item"><a class="nav-link">Hàng đợi</a>
                                                                </li>
                                                                <li class="nav-item"><a class="nav-link">Nhóm tài nguyên</a></li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link">Số liệu mục tiêu
                                                                        <div class="ml-auto badge badge-warning">3
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link">Chiến dịch</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-placement="top" rel="popover-focus" data-offset="300"
                                       data-toggle="popover-custom" class="nav-link">
                                       Menu lưới
                                        <div class="badge badge-dark ml-0 ml-1">
                                            <small>NEW</small>
                                        </div>
                                        <i class="fa fa-angle-up ml-2 opacity-8"></i>
                                    </a>
                                    <div class="rm-max-width rm-pointers">
                                        <div class="d-none popover-custom-content">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-tempting-azure">
                                                    <div class="menu-header-image opacity-1"
                                                         style="background-image: url('dashboard/assets/images/dropdown-header/city5.jpg');">
                                                    </div>
                                                    <div class="menu-header-content text-dark">
                                                        <h5 class="menu-header-title">Lưới hai cột</h5>
                                                        <h6 class="menu-header-subtitle">Điều hướng lưới dễ dàng bên trong cửa sổ bật lên</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <button
                                                            class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                            <i
                                                                class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"></i>Tự động hóa
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button
                                                            class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                            <i
                                                                class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"></i>Báo cáo
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button
                                                            class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                            <i
                                                                class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"></i>Hoạt động
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button
                                                            class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                            <i
                                                                class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"></i>Cài đặt
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn clearfix nav-item">
                                                    <div class="float-left">
                                                        <button class="btn btn-link btn-sm">Nút liên kết</button>
                                                    </div>
                                                    <div class="float-right">
                                                        <button class="btn-shadow btn btn-info btn-sm">Nút thông tin</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="app-drawer-wrapper">
    <div class="drawer-nav-btn">
        <button type="button" class="hamburger hamburger--elastic is-active">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
        </button>
    </div>
    <div class="drawer-content-wrapper">
        <div class="scrollbar-container">
            <h3 class="drawer-heading">Trạng thái máy chủ</h3>
            <div class="drawer-section">
                <div class="row">
                    <div class="col">
                        <div class="progress-box">
                            <h4>Tải máy chủ 1</h4>
                            <div class="circle-progress circle-progress-gradient-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box">
                            <h4>Tải máy chủ 2</h4>
                            <div class="circle-progress circle-progress-success-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box">
                            <h4>Tải máy chủ 3</h4>
                            <div class="circle-progress circle-progress-danger-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="mt-3">
                    <h5 class="text-center card-title">Thống kê trực tiếp</h5>
                    <div id="sparkline-carousel-3"></div>
                    <div class="row">
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-warning fsize-3">43</div>
                                    <div class="widget-subheading pt-1">Gói</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-danger fsize-3">65</div>
                                    <div class="widget-subheading pt-1">Giảm</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-success fsize-3">18</div>
                                    <div class="widget-subheading pt-1">Không hợp lệ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="text-center mt-2 d-block">
                        <button class="mr-2 border-0 btn-transition btn btn-outline-danger">Báo cáo vấn đề</button>
                        <button class="border-0 btn-transition btn btn-outline-success">Trung tâm hỗ trợ</button>
                    </div>
                </div>
            </div>
            <h3 class="drawer-heading">Truyền tệp</h3>
            <div class="drawer-section p-0">
                <div class="files-box">
                    <ul class="list-group list-group-flush">
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div
                                        class="widget-content-left opacity-6 fsize-2 mr-3 text-primary center-elem">
                                        <i class="fa fa-file-alt"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">TPSReport.docx</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div
                                        class="widget-content-left opacity-6 fsize-2 mr-3 text-warning center-elem">
                                        <i class="fa fa-file-archive"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Latest_photos.zip</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-danger center-elem">
                                        <i class="fa fa-file-pdf"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Annual Revenue.pdf</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div
                                        class="widget-content-left opacity-6 fsize-2 mr-3 text-success center-elem">
                                        <i class="fa fa-file-excel"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Analytics_GrowthReport.xls
                                        </div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="drawer-heading">Nhiệm vụ đang tiến hành</h3>
            <div class="drawer-section p-0">
                <div class="todo-box">
                    <ul class="todo-list-wrapper list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="todo-indicator bg-warning"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox1266"
                                                   class="custom-control-input">
                                            <label class="custom-control-label"
                                                   for="exampleCustomCheckbox1266">&nbsp;</label>
                                        </div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Rửa xe
                                            <div class="badge badge-danger ml-2">Vật bị loại bỏ</div>
                                        </div>
                                        <div class="widget-subheading"><i>Viết bởi Ty</i></div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-focus"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox1666"
                                                   class="custom-control-input">
                                            <label class="custom-control-label"
                                                   for="exampleCustomCheckbox1666">&nbsp;</label>
                                        </div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Nhiệm vụ với menu thả xuống di chuột</div>
                                        <div class="widget-subheading">
                                            <div>By TanTy
                                                <div class="badge badge-pill badge-info ml-2">NEW</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <div class="d-inline-block dropdown">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <div tabindex="-1" role="menu" aria-hidden="true"
                                                 class="dropdown-menu dropdown-menu-right">
                                                <h6 tabindex="-1" class="dropdown-header">Tiêu đề</h6>
                                                <button type="button" disabled="" tabindex="-1"
                                                        class="disabled dropdown-item">Hoạt động</button>
                                                <button type="button" tabindex="0" class="dropdown-item">hành động khác</button>
                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                <button type="button" tabindex="0" class="dropdown-item">hành động khác</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-primary"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox4777"
                                                   class="custom-control-input">
                                            <label class="custom-control-label"
                                                   for="exampleCustomCheckbox4777">&nbsp;</label>
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Huy hiệu đúng nhiệm vụ</div>
                                        <div class="widget-subheading">Nhiệm vụ này đã hiển thị trên các hành động di chuột!</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check"></i>
                                        </button>
                                    </div>
                                    <div class="widget-content-right ml-3">
                                        <div class="badge badge-pill badge-success">Nhiệm vụ mới nhất</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-info"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox2444"
                                                   class="custom-control-input">
                                            <label class="custom-control-label"
                                                   for="exampleCustomCheckbox2444">&nbsp;</label>
                                        </div>
                                    </div>
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="42" class="rounded" src="dashboard/assets/images/avatars/1.jpg"
                                                 alt="" />
                                        </div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Đi mua đồ tại cửa hàng tạp hóa</div>
                                        <div class="widget-subheading">Mô tả ngắn ...</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-sm btn-outline-success">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-sm btn-outline-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-success"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox3222"
                                                   class="custom-control-input">
                                            <label class="custom-control-label"
                                                   for="exampleCustomCheckbox3222">&nbsp;</label>
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Nhiệm vụ phát triển</div>
                                        <div class="widget-subheading">Kết thúc ứng dụng danh sách React ToDo</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="badge badge-warning mr-2">69</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="drawer-heading">Thông báo khẩn cấp</h3>
            <div class="drawer-section">
                <div class="notifications-box">
                    <div
                        class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Tất cả các cuộc họp tay</h4>
                                    <span class="vertical-timeline-element-date"></span>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <p>Tuy nhiên, một số khác, tại <span class="text-success">15:00 PM</span></p>
                                    <span class="vertical-timeline-element-date"></span>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Xây dựng bản phát hành sản xuất
                                        <div class="badge badge-danger ml-2">NEW</div>
                                    </h4>
                                    <span class="vertical-timeline-element-date"></span>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Một cái gì đó không quan trọng
                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon">
                                                    <img src="dashboard/assets/images/avatars/1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon">
                                                    <img src="dashboard/assets/images/avatars/2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon">
                                                    <img src="dashboard/assets/images/avatars/3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon">
                                                    <img src="dashboard/assets/images/avatars/4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon">
                                                    <img src="dashboard/assets/images/avatars/5.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon">
                                                    <img src="dashboard/assets/images/avatars/6.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon">
                                                    <img src="dashboard/assets/images/avatars/7.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon">
                                                    <img src="dashboard/assets/images/avatars/8.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                <div class="avatar-icon"><i>+</i></div>
                                            </div>
                                        </div>
                                    </h4>
                                    <span class="vertical-timeline-element-date"></span>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Dấu chấm này có trạng thái thông tin</h4>
                                    <span class="vertical-timeline-element-date"></span>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon is-hidden"></span>
                                <div class="vertical-timeline-element-content is-hidden">
                                    <h4 class="timeline-title">Dấu chấm này có trạng thái thông tin</h4>
                                    <span class="vertical-timeline-element-date"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>

<script src="dashboard/assets/scripts/jquery-3.2.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript" src="./dashboard/assets/scripts/main.js"></script>
<script type="text/javascript" src="./dashboard/assets/scripts/my_script.js"></script>
</body>

</html>
