<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h2 style="text-align:center; font-size:40px;"><b>BMX49 DANCER CONTEST</b></h2>
        <p style="text-align:center; color:lime; font-size:20px;">Voting Score</p>
        <form id="form" name="form" action="" method="POST" style="width:600px; margin-left:auto; margin-right:auto;">
            <div class="row">
                <div class="col-11">
                    <select id="select" name="select" class="form-control">
                        <option id="Default" name="Default" selected>Select Number</option>
                        <option id="1" name="1">1</option>
                        <option id="2" name="2">2</option>
                        <option id="3" name="3">3</option>
                        <option id="4" name="4">4</option>
                        <option id="5" name="5">5</option>
                        <option id="6" name="6">6</option>
                        <option id="7" name="7">7</option>
                        <option id="8" name="8">8</option>
                        <option id="9" name="9">9</option>
                        <option id="10" name="10">10</option>
                    </select>
                </div>
            </div>
        </form>
        <?php 
            $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
            $response = file_get_contents($url);
            $result = json_decode($response);
        ?>
    </div>
</body>
</html>