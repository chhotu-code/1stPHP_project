<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link src="style.css">
    </link>
    <style>
        .formstyle{
            height: 30rem;
            width: 30rem;
        }

        @media (max-width: 320px) { 
            .formstyle{
                height: 30rem;
                width: 20rem;
            }
         }
    </style>
</head>
<body>
    <div class="container formstyle">
        <h1 style="text-align:center">Registration Form</h1>
        <br>
<!-- 
        <fom action="function.php" name="registerform1" id="registerform1" method="POST">

            <Input type="text" name="username" id="username">
            <br>
            <input type="password" name="pass" id="pass">
            <br>
            <input type="hidden" name="registerform" id="registerform" value="submitted">
            <br>
            <input type="submit">

        </form>r -->
        <form class="row g-3" action="function.php" name="registerform1" id="registerform1" method="POST">
            <div class="col-md-12">
                <label for="input" class="form-label">Email</label>
                <input type="text" class=" form-control username" name="username" id="username">
            </div>
            <div class="col-md-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control pass" name="pass" id="pass">
            </div>     
            <div class="col-12" style="text-align:center">
                    <input type="hidden" name="registerform" id="registerform" value="submitted">
                <button style="height:3rem; width:7rem; font-size:1.5rem;" type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>
</html>