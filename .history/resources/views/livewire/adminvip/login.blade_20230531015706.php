<!doctype html>
<html lang="en">

<head>
    <base href="/dashboard/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login | Admin</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="CodeLean Design">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="./main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">

                                <form name="frm-login" method="POST" action="{{route('adminvip.login')}}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="h5 modal-title text-center">
                                            <h4 class="mt-2">
                                                <div>Chào mừng trở lại,</div>
                                                <span>Vui lòng đăng nhập vào tài khoản của bạn dưới đây.</span>
                                            </h4>
                                        </div>

                                        @include('admin.components.notification')

                                        <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="position-relative form-group">
                                                        <input name="email" id="exampleEmail" placeholder="Email..."
                                                            type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="position-relative form-group">
                                                        <input name="password" id="examplePassword"
                                                            placeholder="Mật khẩu..." type="password"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="position-relative form-check">
                                                <input name="remember" id="exampleCheck" type="checkbox"
                                                    class="form-check-input">
                                                <label for="exampleCheck" class="form-check-label">Giữ tôi luôn đăng nhập</label>
                                            </div>
                                    </div>
                                    <div class="modal-footer clearfix">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Đăng nhập vào Bảng điều khiển</button>
                                    </div>
                                </div>
                                </form>

                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © TanTy 2022</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>
