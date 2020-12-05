<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pharmacy</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/uploads/settings/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>


<div class="signupform">
    <div class="container">
        <!-- main content -->
        <div class="agile_info">
            <div class="w3l_form">
                <div class="left_grid_info">
                    <img src="assets/logo_1.jpg" alt="" />
                </div>
            </div>
            <div class="w3_info">
                <h2>Login to your Account</h2>
                <p>Enter your details to login.</p>
                <form action="?controller=account&action=login" method="POST" autocomplete="OFF">
                    <label>Email Address</label>
                    <div class="input-group">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <input type="email" name="email" placeholder="Enter Your Email" required="">
                    </div>
                    <label>Password</label>
                    <div class="input-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" name="password" placeholder="Enter Password" required="">
                    </div>
                    <button class="btn btn-danger btn-block" type="submit">Login</button >
                </form>
            </div>
        </div>
        <!-- //main content -->
    </div>
</div>

</body>
</html>