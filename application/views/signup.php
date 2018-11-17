<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Publisher</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/favicon.ico'); ?>">
</head>

<body>
    
    <div class="container pt-4 px-2">
        <h1 class="text-center mb-5"><img src="<?php echo base_url('assets/images/book.png'); ?>" alt="book" width="50"> Book Publisher</h1>
        <h4 class="text-center mb-4">Register</h4>
        
        <div class="row justify-content-center">
            <div class="col-5">

                <form class="px-5" action="">
                    <input type="text" name="fullname" class="form-control mb-4 py-2" placeholder="Full Name">
                    <input type="email" name="email" class="form-control mb-4 py-2" placeholder="Email">
                    <div class="custom-control custom-radio custom-control-inline mb-4">
                        <input type="radio" name="type" id="client" class="custom-control-input" value="client">
                        <label class="custom-control-label" for="client">Client</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline mb-4">
                        <input type="radio" name="type" id="writer" class="custom-control-input" value="writer">
                        <label class="custom-control-label" for="writer">Writer</label>
                    </div>
                    <input type="text" name="username" class="form-control mb-4 py-2" placeholder="Username">
                    <input type="password" name="password" class="form-control mb-4 py-2" placeholder="Password">
                    <p class="text-center" >By clicking register, you accepted the <a href="" class="text-info">Terms of Use</a> and <a href="" class="text-info">Privacy Policy</a> from Book Publisher</p>
                    <button type="submit" class="btn btn-info w-100">Register</button>
                </form>

            </div>
        </div>
    </div>

    <!-- load JS-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>

</html>