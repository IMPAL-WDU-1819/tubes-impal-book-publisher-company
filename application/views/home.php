<?php $this->load->view('parts/head'); ?>

    <title>Book Publisher</title>

    <style>
        .img-best{
            width: 210px;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.6);
        }
        .detail-img{
            width: 100%;
        }
        .fade-scale{
            opacity: 0;
            transition: all .3s ease;
            display: block !important;
            z-index: -1;
            transform: translateZ(0) scale(0.8,0.8);
            -webkit-backface-visibility: hidden;
        }
        .fade-scale.show{
            opacity: 1;
            z-index: 99999;
            transform: translateZ(0) scale(1.0,1.0);
            -webkit-transform: translateZ(0) scale(1.0,1.0);
        }
    </style>

<?php $this->load->view('parts/header'); ?>

    <!-- header -->
    <div class="jumbotron jumbotron-fluid px-5">
        <div class="row">
            <div class="col-lg-9 text-lg-left text-center order-lg-1 order-2">
                <h1 class="display-4 mb-5  mt-lg-0 mt-5">Promo Sale</h1>
                <p class="lead pt-5">Many item are in promo, buy now!</p>
                <p>We provide various types of books written by the best authors with high quality writing.</p>
                <p class="lead">
                    <a class="btn btn-info btn-lg " href="#" role="button">
                        <i class="fas fa-shopping-cart mr-3"></i>Buy Now
                    </a>
                </p>
            </div>
            <div class="col-lg-3 text-center order-lg-2 order-1">
                <img src="<?php echo base_url('assets/images/book.jpeg'); ?>" alt="the night gardener" class="img-best">
            </div>
        </div>
    </div>

    <!-- book menu -->
    <div class="container">

        <div class="row justify-content-center">

            <?php if (!empty($book)) { $i = 0; foreach ($book as $data) { ?>
            
            <div class="card mb-4 mx-2" style="width: 10rem;">
                <img class="card-img-top" src="<?php echo base_url('images/'.$data->images); ?>" alt="<?php $data->nama_buku; ?>">
                <div class="card-body text-center">
                    <button class="btn btn-sm btn-info px-3" data-toggle="modal" data-target="#details<?php echo $data->id_buku; ?>">Details</button>
                </div>
            </div>

            <!-- modal detail buku -->
            <div class="modal fade-scale" id="details<?php echo $data->id_buku; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content p-5">
                        
                        <div class="row">
                            <div class="col-5">
                                <img class="detail-img" src="<?php echo base_url('images/'.$data->images); ?>" alt="">
                                <button class="btn btn-primary w-100 mt-3">Buy now</button>
                            </div>
                            <div class="col-7">
                                <h3><?php echo $data->nama_buku; ?></h3>
                                <p>Penulis : Gading Martusion</p>
                                <p><?php echo $data->tanggal_terbit; ?></p>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>

            <?php $i = $i+1; if ($i == 6) {break;}  }} ?>

        </div>

    </div>

    <!-- book category -->
    <div class="container-fluid bg-light p-4">
    
        <h2 class="text-center my-4">Category</h2>

        <div class="row justify-content-center">
            
            <a href="" class="nav-link text-dark col-5 card p-5 mb-4 mr-4">

                <div class="row">
                    <div class="col-md-4 col-12 text-center">
                        <i class="fas fa-desktop fa-5x text-primary"></i>
                    </div>
                    <div class="col-md-8 col-12 align-items-center d-flex justify-content-md-start justify-content-center">
                        <p class="lead mt-md-0 mt-3 mb-0">Technology</p>
                    </div>
                </div>
                
            </a>

            <a href="" class="nav-link text-dark col-5 card p-5 mb-4 ">

                <div class="row">
                    <div class="col-md-4 col-12 text-center">
                        <i class="fas fa-paw fa-5x text-primary"></i>
                    </div>
                    <div class="col-md-8 col-12 align-items-center d-flex justify-content-md-start justify-content-center">
                        <p class="lead mt-md-0 mt-3 mb-0">Animal</p>
                    </div>
                </div>

            </a>

            <a href="" class="nav-link text-dark col-5 card p-5 mb-4 mr-4">

                <div class="row">
                    <div class="col-md-4 col-12 text-center">
                        <i class="fas fa-graduation-cap fa-5x text-primary"></i>
                    </div>
                    <div class="col-md-8 col-12 align-items-center d-flex justify-content-md-start justify-content-center">
                        <p class="lead mt-md-0 mt-3 mb-0">Knowledge</p>
                    </div>
                </div>

            </a>

            <a href="" class="nav-link text-dark col-5 card p-5 mb-4 ">

                <div class="row">
                    <div class="col-md-4 col-12 text-center">
                        <i class="fas fa-graduation-cap fa-5x text-primary"></i>
                    </div>
                    <div class="col-md-8 col-12 align-items-center d-flex justify-content-md-start justify-content-center">
                        <p class="lead mt-md-0 mt-3 mb-0">Education</p>
                    </div>
                </div>

            </a>

        </div>
    </div>

<?php $this->load->view('parts/footer'); ?>

</body>
</html>