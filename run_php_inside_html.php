<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Run PHP inside HTML</title>
  </head>
  <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-6 m-auto text-center">
                    <h1 style="color:<?php
                                            if(isset($_POST['submit'])){
                                                $favColor = $_POST['color'];
                                                echo $favColor;
                                            }
                                        ?>; ">Run PHP inside HTML</h1>
                    <form method="POST" class="input-group mb-3 text-center">
                        <input name="color" type="text" class="form-control" placeholder="Favrete Colorme" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button name="submit" class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>  
                    </form>
                    <p>
                        My faverit Color is 
                        <span style="color:<?php
                                            if(isset($_POST['submit'])){
                                                $favColor = $_POST['color'];
                                                echo $favColor;
                                            }
                                        ?>; ">
                        <?php
                            if(isset($_POST['submit'])){
                                $favColor = $_POST['color'];
                                echo $favColor;
                                // switch ($favColor ){
                                //     case 'red' : echo ' my feverite color is red';
                                //     break;
                                //     case 'black' : echo ' my feverite color is Black';
                                //     break;
                                //     case 'blue' : echo ' my feverite color is Blue';
                                //     break;
                                //     case 'yellow' : echo ' my feverite color is Yellow';
                                //     break;
                                //     default  : echo ' i am not sure about your favrite Color';
                                // }
                            }
                        ?>
                        </span>
                    </p>
                </div>
            </div>
        </section>
</div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
