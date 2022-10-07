<body class="bg-image position-relative" style="background-image:url(_assets/images/indexbackgroundblur.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh;">
    <!-- navbar -->
<nav class="navbar navbar-expand-md justify-content-center">
    <div class="container-sm p-0">
        <a href="<?php echo base_url('') ?>" class="navbar-brand mx-auto d-block"><img src="_assets/images/FINAL LOGO.png" alt="logo" width="250"></a>
    </div>
</nav>

<!-- form box -->
<div class="form-box my-5">
    <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="residentlogin()">Resident Login</button>
        <button type="button" class="toggle-btn" onclick="adminlogin()">Admin Login</button>
    </div>

    <!-- RESIDENT LOGIN -->
<form action="../BackEnd/database/Login.php" method="POST" id="login-resident" class="input_group login-resident needs-validation" novalidate="">
    <input type="text" name="username" class="input-field" placeholder="Enter Building & Unit #" required="" value="">
    <div class="invalid-feedback">
        Please enter username
    </div>
    <input type="password" name="password" class="input-field" placeholder="Password" required="" value="">
    <div class="invalid-feedback">
        Please enter password
    </div>
    <input type="checkbox" name="remember" class="checkbox"><span>Remember me</span>
    <div class="mb-2">
    <a href="forgotPass.php" class="nav-link align-items-center me-3">Forgot Password</a>
    </div>
        <button class="btn submit-btn" type="submit" name="resLogin">Login</button>
</form>

<!-- ADMIN LOGIN -->
<form action="../BackEnd/database/Login.php" id="login-admin" class="input_group login-admin needs-validation" method="POST" novalidate="">
    <input type="text" class="input-field" name="username" placeholder="Username" required="">
    <div class="invalid-feedback">
        Please enter username
    </div>
    <input type="password" class="input-field" name="password" placeholder="Password" required="">
    <div class="invalid-feedback">
        Please enter password
    </div>
    <input type="checkbox" class="checkbox" name="remember"><span>Remember me</span>
    <a href="forgotPass.php" class="nav-link align-items-center me-3">Forgot Password</a>
    <button class="btn submit-btn" type="submit" name="adminLogin">Login</button>
</form>
</div>
<script>
    var x = document.getElementById("login-resident");
    // var a = document.getElementById("residentError");
    var y = document.getElementById("login-admin");
    var z = document.getElementById("btn");
    var xxx = window.matchMedia('(max-width: 576px)');
    var xx = window.matchMedia('(max-width: 407px)')
    function adminlogin(){
        x.style.left="-25rem";
        // a.style.left="-25rem";
        y.style.left="3.125rem";
        z.style.left="12rem";
    }

    function residentlogin(){
        x.style.left="3.125rem";
        // a.style.left="5.125rem";
        y.style.left="28.125rem";
        z.style.left="0rem";
    }
    if(xxx.matches) {
        function adminlogin(){
            x.style.left="-80rem";
            // a.style.left="-80rem";
            y.style.left="3rem";
            z.style.left="50%";
        }
        function residentlogin(){
        x.style.left="3rem";
        // a.style.left="3rem";
        y.style.left="40rem";
        z.style.left="0rem";
        }
    }
    if(xx.matches) {
        function adminlogin(){
            x.style.left="-80rem";
            // a.style.left="-80rem";
            y.style.left="0rem";
            z.style.left="50%";
        }
        function residentlogin(){
        x.style.left="0rem";
        // a.style.left="0rem";
        y.style.left="40rem";
        z.style.left="0rem";
        }
    }
</script>
</body>