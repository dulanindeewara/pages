<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="stylesLogin.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card1">
                    <div class="content1">
                        <img id="user_img" src="images/user3.jpg" alt="user-image">
                        <h1>LOGIN</h1>
                    </div>
                    <div class="content2">
                        <?php
                        extract($_POST);
                        if ($_SERVER['REQUEST_METHOD'] == "POST" && @$action == "next") {
                            

                            //create array
                            $messages = array();

                            //required validation
                            if (empty($userName) || empty($Password)) {
                                $messages['msg'] = "Please Enter Username and Password";
                            }
                            if (!($userName=="dulan" && $Password=="123")) {
                                $messages['msg'] = "Invalid Username or Password";
                            }


                            if (empty($messages)) {

                                header("Location:index.php");
                            }
                        }
                        ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <div class="text-danger" style="font-size:12px;font-weight: bold"><?php echo @$messages['msg']; ?></div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="userName">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="Password">
                            </div>
                            <div class="mb-3">
                                <a id="forget_pass" href="">Forget Password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary" name="action" value="next" style="width:100%">Login</button>
                            <div class="mt-3">
                                <p>Not a Member?<a id="forget_pass" href="signup.php">sign up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>


    </div>
</body>

</html>