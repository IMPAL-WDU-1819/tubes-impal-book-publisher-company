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
            <h1 class="mb-5 text-center">Edit Book</h1>
            <form action="" class="px-5">
                <div class="form-group">
                    <label for="name">Book Title</label>
                    <input type="text" class="form-control" id="name" placeholder="book title" value="Hello You">
                </div>
                <div class="form-group">
                    <label for="date">Publish Date</label>
                    <input type="text" class="form-control" id="date" placeholder="Date now" value="20 OCT 2018">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" id="stock" placeholder="book title" value="100">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="price" value="$ 50">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="10" class="form-control">this is the best book</textarea>
                </div>
                <button type="submit" class="btn btn-primary px-5 mt-3 mb-5">Save</button>
            </form>
        </div>

    </div>


    <!-- load JS-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>
</html>