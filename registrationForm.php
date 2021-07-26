<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Registration form </title>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
    <?php include 'css/style.php' ?>
    <?php include 'links/link.php' ?>



    <style>
        body{
            font-family: 'Roboto', sans-serif;
        }
        
    </style>

    <?php
    include 'dataBaseConnection.php';
    if(isset($_POST['submit'])){
        $userName = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

        $hashPassword = password_hash($password, PASSWORD_BCRYPT);
        $hashCpassword = password_hash($cpassword, PASSWORD_BCRYPT);

        $emailQuery = "select * form signup where eamil = '$email";
        $quey = mysqli_query($con, $emailQuery);
        $emailCount = mysqli_num_rows($quey);

        if($emailCount>0){
            echo "Email already Exists";
        }else{
            if ($password === $cpassword) {
                $insertQurery = "insert into signup(username, email, number, password, cpassword) values('$userName','$email','$phoneNumber','$hashPassword','$hashCpassword' )";

                $iquery = mysqli_query($con, $insertQurery);

                if ($con) {
                    ?>
                       <script>
                           alert("Insertet Succeseful");
                       </script> 
                    <?php
                } else {
                    ?>
                       <script>
                           alert("No Connection");
                       </script> 
                    <?php
                }
                

            } else {
                echo "Password are not matching";
            }
            
        }
    }

    ?>


</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-4 m-auto">
                    <div class="form text-center">
                        <h2>Create account</h2>
                        <p>Get start your free account</p>
                        <div class="login">
                            <a class="google" href="#"><i class="fab fa-google"></i> Login via Gmail</a>
                            <a class="facebook" href="#"><i class="fab fa-facebook-f"></i> Login via Facebook</a>
                        </div>
                        <span class="or">OR</span>

                        <form action="" methot="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fal fa-envelope"></i></span>
                                <input type="text" name="email" class="form-control" placeholder="Email address" aria-label="emailAddress" aria-describedby="basic-addon2" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fal fa-phone-alt"></i></span>
                                <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number" aria-label="phoneNumber" aria-describedby="basic-addon3" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Create password" aria-label="Create password" aria-describedby="basic-addon4" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-lock"></i></span>
                                <input type="password" name="cpassword" class="form-control" placeholder="Repeat password" aria-label="Repeat password" aria-describedby="basic-addon5" required>
                            </div>
                            <button class="btn btn-info bubmit_btn" type="submit" name="submit">Create Account</button>
                            <p>Have an account ? <a href="#">Log in</a></p>
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- ALL JS Files Here -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>