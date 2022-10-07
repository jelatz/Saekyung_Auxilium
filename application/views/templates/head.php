<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- RESIDENT AND ADMIN LOGIN -->
        <script>
            var x = document.getElementById("login-resident");
            // var a = document.getElementById("residentError");
            var y = document.getElementById("login-admin");
            var z = document.getElementById("btn");
            var xxx = window.matchMedia('(max-width: 576px)');
            var xx = window.matchMedia('(max-width: 407px)');


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
         <!-- FORM VALIDATION -->
        <script> 
                var forms = document.querySelectorAll('.needs-validation')
                Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }
                form.classList.add('was-validated')
                }, false)
                })
        </script>
        <title>Saekyung Auxilium: Condominium Management Information System</title>
    </head>
</html>