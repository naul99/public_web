<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Login</title>
</head>
<style type="text/css">
    .box {
        width: 500px;
        margin: 200px 0;
    }

    .shape1 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #0074d9;
        border-radius: 80px;
        float: left;
        margin-right: -50px;
    }

    .shape2 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #0074d9;
        border-radius: 80px;
        margin-top: -30px;
        float: left;
    }

    .shape3 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #0074d9;
        border-radius: 80px;
        margin-top: -30px;
        float: left;
        margin-left: -31px;
    }

    .shape4 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #0074d9;
        border-radius: 80px;
        margin-top: -25px;
        float: left;
        margin-left: -32px;
    }

    .shape5 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #0074d9;
        border-radius: 80px;
        float: left;
        margin-right: -48px;
        margin-left: -32px;
        margin-top: -30px;
    }

    .shape6 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #0074d9;
        border-radius: 80px;
        float: left;
        margin-right: -20px;
        margin-top: -35px;
    }

    .shape7 {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #0074d9;
        border-radius: 80px;
        float: left;
        margin-right: -20px;
        margin-top: -57px;
    }

    .float {
        position: absolute;
        z-index: 2;
    }

    .form {
        margin-left: 145px;
    }
</style>

<body>


    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form class="form" autocomplete="off" action="<?php echo BASE_URL ?>/login/authentication_login" method="POST">
                            <div class="form-group">
                                <label for="username" class="text-white">Username:</label><br>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Password:</label><br>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>







<!-- <form autocomplete="off" action="<?php echo BASE_URL ?>/login/authentication_login" method="POST">

    <table>
    <tr>
        <td>Username</td>
        <td><input type="text" required="1" name="username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" required="1" name="password"></td>
    </tr>
    <tr>
        
        <td><input type="submit" name="login" value="login"></td>
    </tr>

</table>

</form> -->