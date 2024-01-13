<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="stylesSignup.css">
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
                            <h1>Sign Up</h1>
                        </div>
                        <div class="content2">
                            <form>
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="firstName">
                                </div>
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="password" class="form-control" id="last_name" name="lastName">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="Cpassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="Cpassword" name="confirmPassword">
                                </div>
                                
                                <button type="submit" class="btn btn-primary" style="width:100%">Signup</button>
                                <div class="mt-3">
                                    <p>Already have an account?<a id="forget_pass" href="login.php">login here</a></p>
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