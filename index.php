<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

#formsetting {
    padding: 10px;
    border-radius: 10px;
}

    <script>
        function content1() {
            document.getElementById('div1').style.display="block";
            document.getElementById('div2').style.display="none";
        }
        function content2() {
            document.getElementById('div1').style.display="none";
            document.getElementById('div2').style.display="block";
        }

    </script>

    <title>Student Management System</title>
</head>

<body>
    <h1 class="text-center text-danger pt-5 font-weight-bold">Student Management System</h1>

    <div class="container">
        <h3 class="text-white bg-success text-center py-3" id="formsetting">Admin Login | Register Panel</h3>

        <div class="d-flex align-items-center">
            <div class="col-md-7 col-sm-7 col-12">
                <img src="Image/student.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-5 col-sm-5 col-12">
                <div class="d-flex justify-content-between mb-5 mt-3">
                    <button class="btn btn-info" onclick="content1()">Register</button>
                    <button class="btn btn-info" onclick="content2()">Login</button>
                </div>

                <div id="div1" style="display: block">
                    <form method="post" action="">
                        <div class="form-group">
                            <label class="text-danger">Full Name</label>
                            <input type="text" name="fname" placeholder="Enter Your Name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="text-danger">Email</label>
                            <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="text-danger">Password</label>
                            <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="text-danger">Confirm Password</label>
                            <input type="password" name="cpassword" placeholder="Re-enter Your Password" class="form-control">
                        </div>

                        <input type="submit" name="submit" value="Register" class="btn btn-primary btn-lg btn-block"></input>
                    </form>
                </div>

                <div>
                    <div id="div2" style="display: none;">
                        <form method="post" action="">
                            <div class="form-group">
                                <label class="text-danger">Email</label>
                                <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="text-danger">Password</label>
                                <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
                            </div>
                            <input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg btn-block"></input>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>