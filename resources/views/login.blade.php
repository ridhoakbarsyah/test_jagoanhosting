<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Selamat Datang Di Management Keuangan RT <span
                                        class="font-weight-bold text-primary">Login</span></h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck" onclick="showPass()">Show
                                            Password</label>
                                    </div>
                                </div>
                                <a href="index.html" class="btn btn-primary btn-user btn-block">
                                    Login
                                </a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script>
        function showPass() {
            var pass = document.getElementById("password");
            if (pass.type === "password") {
                pass.type = "text";
            } else {
                pass.type = "password";
            }
        }
    </script>
    <!-- Bootstrap core JavaScript-->
    @include('partials.script')

</body>

</html>
