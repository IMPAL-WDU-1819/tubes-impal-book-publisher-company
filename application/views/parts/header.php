</head>
<body>

    <!-- main navigation -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-md py-3 justify-content-sm-start justify-content-center">
        <a href="<?php echo base_url(); ?>" class="navbar-brand mr-4">
            <img src="<?php echo base_url('assets/images/book.png'); ?>" alt="book" width="30">
            Book Publisher
        </a>
        <form action="" class="form-inline" style="width: 300px;">
            <input type="search" name="search" id="search" class="form-control w-100" placeholder="search here . . .">
        </form>
        <div class="collapse navbar-collapse">

            <?php if ($this->session->userdata('user')): $user = $this->session->userdata('user'); ?>
            <ul class="navbar-nav ml-md-auto ml-0">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img src="<?php echo base_url('assets/images/user.png'); ?>" alt="" class="profile-img">
                        <?php echo ucfirst($user->username); ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="btnCart">0<i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item">
                    <a href="penerbit/logout" class="nav-link">Logout</a>
                </li>
            </ul>
            <?php else: ?>
            <ul class="navbar-nav ml-md-auto ml-0">
                <li class="nav-item">
                    <a href="" class="nav-link">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a href="#" role="button" class="nav-link" data-toggle="modal" data-target="#login">Login</a>
                </li>
            </ul>
            <?php endif; ?>

        </div>
    </nav>
    
    <!-- first navigation -->
    <ul class="nav bg-dark px-4 justify-content-sm-start justify-content-center">
        <li class="nav-item">
            <a href="" class="nav-link text-light">Category</a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url('penerbit/promo'); ?>" class="nav-link text-light">Promo</a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url('penerbit/featured'); ?>" class="nav-link text-light">Featured</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-light">Pricing</a>
        </li>
    </ul>