<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculator in PHP</title>
  </head>
  <body>
    

    <section>
        <div class="container">
            <div class="row">
                <div class="col-6 m-auto">
                <h1>Calculator<h1>
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="num1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="num2" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <select name="operation" class="form-select" aria-label="Default select example">
                    <option value="add">ADD</option>
                    <option value="sub">SUB</option>
                    <option value="multi">MULTI</option>
                    <option value="div">DIV</option>
                    </select>
                    <button name="result" type="submit" class="btn btn-primary">Submit</button>
                </form>

                <p>
                    <?php
                        if(isset($_POST['result'])){
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $operation = $_POST['operation'];

                            // switch ($operation){
                            //     case 'add': $add = $num1 + $num2;
                            //         echo 'the result is '.$add;
                            //     break;

                            //     case 'sub': $sub = $num1 - $num2;
                            //         echo 'the result is '.$sub;
                            //     break;

                            //     case 'multi': $multi = $num1 * $num2;
                            //         echo 'the result is '.$multi;
                            //     break;

                            //     case 'div': $div = $num1 / $num2;
                            //         echo 'the result is '.$div;
                            //     break;

                            //     default : echo 'I do not no';
                            // }

                            
                        }
                    ?>
                </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
