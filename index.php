<?php
include("conn.php");
include("query.php");
        ?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Login Page</title>
</head>

<body>

    <div class="container" style="background-color:beige;margin-top:140px;border-radius:20px;width:60%;">
        <legend>
            <h2 style="text-align: center;color:darkred;">Register here.</h2>
        </legend>
        <form class="form-group" method="POST" action="#">
            <br>
            <div class="row">
                <div class="col"><label for="name">Name</label></div>
                <div class="col"><input type="text" class="form-control" name="name" id="name" placeholder="enter name" required></div>
            </div>
            <div class="row">
                <div class="col"><label for="mobile">Mobile</label></div>
                <div class="col"><input type="integer" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" required></div>
            </div>
            <div class="row">
                <div class="col"><label for="course">Select course</label></div>
                <div class="col">
                    <select class="form-control" name="course" id="course" required>
                        <option>C/C++</option>
                        <option>Java</option>
                        <option>PHP</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col"><label for="qualification">Highest Qualification</label></div>
                <div class="col">
                    <select class="form-control" name="qualification" id="qualification" required>
                        <option>MCA</option>
                        <option>BCA</option>
                        <option>B.Sc/B.A</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <button class="btn btn-primary" type="submit" name="submit" id="submit">Submit</button>
                    <button class="btn btn-dark" type="reset" name="reset" id="reset">Reset</button>
                </div>
            </div>

        </form>
    </div>

</body>

</html>
