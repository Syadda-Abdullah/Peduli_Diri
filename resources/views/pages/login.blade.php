@extends('layout.cssMaster')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Peduli Diri | Login</title>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="../assets/img/peduli_diri_logo.png" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="/postlogin">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="email">NIK</label>
                                        <input id="email" type="text" class="form-control" name="NIK" tabindex="1"
                                            required autofocus>
                                        <input id="password" type="hidden" name="password">
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Nama</label>
                                            <div class="float-right">
                                            </div>
                                        </div>
                                        <input id="nama" type="text" class="form-control" name="nama" tabindex="2"
                                            required>

                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input"
                                                tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Syadda 2022
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        window.onload = function() {
            var src = document.getElementById("email"),
                dst = document.getElementById("password");
            src.addEventListener('input', function() {
                dst.value = src.value;
            });
        };
    </script>

</body>

</html>
