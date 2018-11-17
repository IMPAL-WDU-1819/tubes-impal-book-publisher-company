<?php $this->load->view('parts/head'); ?>

    <title>Book Publisher | Featured</title>

    <style>
        .carousel-indicators{
            bottom: -30px !important;
        }
        .carousel-indicators li{
            background-color: rgba(0,0,0,.4) !important;
        }
        .carousel-indicators .active{
            background-color: green !important;
        }
    </style>

<?php $this->load->view('parts/header'); ?>

<!-- header -->
<div class="jumbotron jumbotron-fluid px-5">
    <div class="row">
        
        <div class="col-3 px-4">

            <div id="featured-book" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#featured-book" data-slide-to="0" class="active"></li>
                    <li data-target="#featured-book" data-slide-to="1"></li>
                    <li data-target="#featured-book" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url('assets/images/featured.jpeg'); ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url('assets/images/featured2.jpg'); ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url('assets/images/featured3.jpg'); ?>" alt="Third slide">
                    </div>
                </div>
            </div>

        </div>

        <div class="col text-right px-4">
            <h1 class="mb-5 pt-5 pb-4">Best Sellers</h1>
            <p class="lead pt-5">We sell the best products to our customers</p>
            <p>Our Book is the best book products over the best book producs, just buy now and get the benefits.</p>
            <p class="lead pt-5">
                <a class="btn btn-info btn-lg " href="#" role="button">
                    <i class="fas fa-shopping-cart mr-3"></i>Buy Now
                </a>
            </p>
        </div>

    </div>
</div>


<div class="container p-5">
    
    <!-- book list -->
    <div class="row">

        <?php for ($i = 0; $i < 12; $i++) { ?>
    
        <div class="col-3">

            <div class="card mb-4 mx-2">
                <img class="card-img-top" src="<?php echo base_url('assets/images/book1.jpg'); ?>" alt="">
                <div class="card-body text-center">
                    <button class="btn btn-sm btn-info px-3" data-toggle="modal" data-target="#details">Details</button>
                </div>
            </div>

        </div>

        <?php } ?>

    </div>

</div>


<?php $this->load->view('parts/footer'); ?>

</body>
</html>