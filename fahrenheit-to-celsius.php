<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Farhenheit to Celsius CONVERSION </title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <style>
        p{
            color:red;
        }
    </style>
</head>

<body>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 m-auto">
                    <form action="#" method="POST">
                        <label for="inputPassword3" class=" col-form-label">Input Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="number" class="form-control" id="inputPassword3">
                        </div>

                        <div class="">
                            <input class="mt-5" type="radio" name="radio" id="gridRadios1" value="cel"
                                checked>
                            <label class="form-check-label" for="gridRadios1">
                                Far
                            </label>
                        </div>
                        <div class="">
                            <input class="" type="radio" name="radio" id="gridRadios2" value="far">
                            <label class="form-check-label" for="gridRadios2">
                                Cel
                            </label>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">CONVERSION </button>
                    </form>

            <?php
           
            if(isset($_POST["submit"])){
                $num = $_POST["number"];
                $teamp = $_POST["radio"];

                if ($teamp == "cel") {
                    $result = ($num / 5) * 9 - 32;
                    // echo $result;
                    echo "<p>The Convertet Result is {$result} C <sup>0</sup></p>";
                } else {
                    $result2 = ($num - 32) * 5 / 9;
                    // echo $result2;
                    echo "<p>The Convertet Result is {$result2} F <sup>0</sup> </p>";
                }
                
            };

            

            ?> 
                </div>
            </div>
        </div>
    </section>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>