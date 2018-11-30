<!-- footer -->
<div class="container-fluid p-5 bg-dark text-white">
        <div class="row">
            <div class="col-lg-4 col">
                <h5>Contact Us</h5>
                <p class="m-0 text-secondary">Customare Care</p>
                <p class="m-0 text-secondary">(+62) 21 4682 1089</p>
                <p class="m-0 text-secondary">Monday - Saturday (08:00 - 17.00)</p>
            </div>
            <div class="col-lg-2 col-md-4 col-5 ml-auto text-right">
                <h5>Follow Us</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="" class="nav-link p-0 text-secondary d-inline-block">Facebook <i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link p-0 text-secondary d-inline-block">Twitter <i class="fab fa-twitter-square"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link p-0 text-secondary d-inline-block">Instagram <i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-secondary px-4 py-2 text-light">
        <p class="m-0"><small>2018 &copy; PT. Penerbit Buku<small></p>
    </div>

    <!-- modal detail buku -->
    <div class="modal fade-scale" id="details" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content p-5">
                
                <div class="row">
                    <div class="col-5">
                        <img class="detail-img" src="<?php echo base_url('assets/images/book1.jpg'); ?>" alt="">
                        <button class="btn btn-primary w-100 mt-3">Buy now</button>
                    </div>
                    <div class="col-7">
                        <h3>The Martian</h3>
                        <p>Penulis : Gading Martusion</p>
                        <p>Tanggal Terbit : 20 Agustus 2017</p>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <!-- modal login -->
    <div class="modal fade-scale" id="login" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-5">
                <h2 class="text-center mb-5">Sign In</h2>
                <form class="form mb-5" action="penerbit/login" method="POST">
                    <input type="text" name="username" id="uname" class="form-control mb-3" placeholder="username">
                    <input type="password" name="password" id="pwd" class="form-control mb-4" placeholder="password">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="custom-control custom-checkbox text-left align-items-center d-flex">
                                <input type="checkbox" class="form-control custom-control-input" name="remember" id="remember">
                                <label class="custom-control-label text-secondary" for="remember">Remember me</label>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="penerbit" class="nav-link p-0 m-0">forgot password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info w-100">Sign In</button>
                </form>
            </div>
        </div>
    </div>

    <!-- load JS-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <script>

        //animation after modal
        function afterModal(e){
            e.setAttribute("style", "display: none !important");
        }

        $('#details').on('hide.bs.modal', function(e){
            setTimeout(() => {
                afterModal(this)
            }, 3000);
        })

    </script>