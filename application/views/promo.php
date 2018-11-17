<?php $this->load->view('parts/head'); ?>

    <title>Book Publisher | Promo</title>

    <style>
        .card-img-top{
            height: 250px;
            object-fit: cover;
            filter: grayscale(50%);
        }
        .icon-search{
            position: absolute;
            right: 2%;
            top: 30%;
            color: gray;
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

    <!-- promo list -->
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-6 position-relative p-0">
                <input type="search" name="search_promo" class="form-control" placeholder="Search Promo . . .">
                <i class="fas fa-search icon-search"></i>
            </div>
        </div>

        <div class="row py-5 justify-content-center">

            <?php for ($i=0; $i<6; $i++) { ?>

            <div class="col-5 mb-3 px-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url('assets/images/promo.jpeg'); ?>" alt="Promo">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Buy 500 Book Get Discount Up To 50%</h4>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <p class="mb-0">Valid Period</p>
                                <p class="mb-0"><small>16 Feb 18 - 06 Mei 18</small></p>
                            </div>
                            <div class="col text-right align-items-center d-flex">
                                <a href="" class="btn btn-info ml-auto">See Promo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>

    </div>

<?php $this->load->view('parts/footer'); ?>

</body>

</html>