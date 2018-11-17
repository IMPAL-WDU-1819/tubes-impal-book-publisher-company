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
        <div class="col pt-5">    

            
            <h4 class="mb-3 pl-3">Product</h4>

            <div class="row pl-4">
                <button class="btn btn-info">Insert New Book</button>
            </div>

            <!-- table history -->
            <div class="row px-4 mt-5">

                

                <table class="table text-center">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Writer</th>
                            <th scope="col">Publish Date</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php for ($i = 0; $i < 5; $i++) { ?>

                        <tr>
                            <th scope="row">Hello You</th>
                            <td>Hatta</td>
                            <td>20 OCT 2018</td>
                            <td>100</td>
                            <td>$ 50</td>
                            <td><button class="btn btn-info btn-sm mr-2">Edit</button><button class="btn btn-danger btn-sm">Delete</button></td>
                        </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <!-- load JS-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>
</html>