@extends('layout.cssMaster')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Peduli Diri</title>


</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <img src="../assets/img/peduli_diri_logo.png" alt="logo" width="80"
                            class="shadow-light rounded-circle mb-5 mt-2">
                        <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Peduli
                                Diri</span></h4>
                        <p class="text-muted">Before you get started, you must login or register if you don't already
                            have an account.</p>



                        <div class="form-group">
                            <a class="btn btn-primary btn-lg btn-icon icon-right" tabindex="1" href="/login">
                                Login
                            </a>
                            <a class="btn btn-primary btn-lg btn-icon icon-right" tabindex="2" href="/register">
                                Register
                            </a>
                        </div>


                        <div class="text-center mt-5 text-small">
                            Copyright &copy; Syadda Abdullah
                            <div class="mt-2">
                                <a href="#">Privacy Policy</a>
                                <div class="bullet"></div>
                                <a href="#">Terms of Service</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                    data-background="../assets/img/peduli_diri_login.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold">Welcome</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>
