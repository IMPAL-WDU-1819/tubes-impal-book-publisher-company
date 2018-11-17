<?php $this->load->view('parts/head'); ?>

    <title>Admin Panel | Book Publisher</title>

    <style>
        html, body{
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .fa-cx{
            font-size: 21px;
        }
    </style>

</head>
<body>

    <div class="row pr-3" style="min-height: 100%;">

        <!-- sidebar -->
        <div class="col-2 bg-dark justify-content-center sidebar" style="min-height: 100%;">
            <ul class="nav flex-column px-1">
                <li class="nav-item text-center pt-4 pb-5">
                    <a href="<?php echo base_url(); ?>" class="navbar-brand mx-0 px-0 text-light">
                        <img src="<?php echo base_url('assets/images/book.png'); ?>" alt="book" width="30">
                        Book Publisher
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="#"><i class="fas fa-home fa-cx mr-2"></i> Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="#"><i class="fas fa-users fa-cx mr-2"></i> Clients</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="#"><i class="fas fa-pencil-alt fa-cx mr-3"></i> Writers</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="#"><i class="fas fa-book fa-cx mr-3"></i> Products</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-light" href="#"><i class="fas fa-cogs fa-cx mr-2"></i> Configuration</a>
                </li>
            </ul>
        </div>

        <!-- main view -->
        <div class="col pt-5 px-5">
            <h1 class="mb-5 text-center">Editor Panel</h1>
            <h5 class="mb-4">Edit</h5>
            <form>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Writer Name</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="nama" value="Muhammad Hatta Eka Putra">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="email" value="hatta.eka.p@gmail.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <textarea name="content" id="content" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-info btn-lg px-5 ml-auto mr-3">Save</button>
                </div>
            </form>
        </div>

    </div>


    <!-- load JS-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>
</html>jika di klik makan akan menuju halaman utama (antarmuka 1)