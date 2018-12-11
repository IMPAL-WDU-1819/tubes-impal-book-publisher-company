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
                <form id="formLoginCustomer" class="form mb-5" action="penerbit/login" method="POST">
                    <div class="form-group">
                        <input type="text" name="username" id="uname" class="form-control" placeholder="username">
                        <p id="usernameLoginHelper" class="form-text text-danger">Please input your username.</p>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="pwd" class="form-control" placeholder="password">
                        <p id="passwordLoginHelper" class="form-text text-danger">Please input your password.</p>
                    </div>
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
                    <p id="loginHelper" class="mt-2 text-center text-danger">Maaf username atau password salah.</p>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal berhasil login --> 
    <div class="modal fade" id="loginValid" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2 text-center">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p class="mt-5"><i class="fas fa-check-circle fa-5x text-success"></i><br/><br/>Anda berhasil login.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- modal belanja -->
    <div class="modal fade" id="modalBelanja" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2 text-center">

                <div class="modal-header">
                    <h5 class="modal-title">Your Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- isi utama -->
                <div class="modal-body">

                    <!-- item cart head -->
                    <div class="row item-cart-head">
                        <div class="col-3 text-center">
                            <h6>BOOK</h6>
                        </div>
                        <div class="col-3 text-center">
                            <h6>TOTAL</h6>
                        </div>
                        <div class="col text-center">
                            <h6>PRICE</h6>
                        </div>
                    </div>

                    <!-- item cart utama-->
                    <div class="item-cart row mb-3">

                        <div class="col-3">
                            <img src="<?php echo base_url('images/art.png'); ?>" alt="">
                        </div>

                        <div class="col-3 item-count">
                            <input type="text" class="form-control" name="item-count" id="">
                        </div>

                        <div class="col item-price">
                            <span>$200</span>
                        </div>

                    </div>
                    <div class="item-cart row">

                        <div class="col-3">
                            <img src="<?php echo base_url('images/art.png'); ?>" alt="">
                        </div>

                        <div class="col-3 item-count">
                            <input type="text" class="form-control" name="item-count" id="">
                        </div>

                        <div class="col item-price">
                            <span>$200</span>
                        </div>

                    </div>

                    <!-- price view -->
                    <hr>
                    <div class="item-cart row mt-2">

                        <div class="col-6 item-price">
                            TOTAL PRICE
                        </div>

                        <div class="col-6 item-price">
                            <span>$400</span>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
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
        
        //hide helper first
        $('#usernameLoginHelper').hide();
        $('#passwordLoginHelper').hide();
        $('#loginHelper').hide();

        //button cart clicked
        $('#btnCart').click(function(){
            $('#modalBelanja').modal('show');
        })

    </script>

    <?php 
        //tampilkan helper jika ada field yang kosong
        if ($this->session->flashdata('login_customer') == 'allNull'){
            echo "<script>$('#usernameLoginHelper').show();$('#passwordLoginHelper').show();$('#login').modal('show');</script>";
        } else if ($this->session->flashdata('login_customer') == 'usernameNull'){
            echo "<script>$('#usernameLoginHelper').show();$('#login').modal('show');</script>";
        } else if ($this->session->flashdata('login_customer') == 'passwordNull'){
            echo "<script>$('#passwordLoginHelper').show();$('#login').modal('show');</script>";
        } else if ($this->session->flashdata('login') == 'invalid'){
            echo "<script>$('#loginHelper').show();$('#login').modal('show');</script>";
        } else if ($this->session->flashdata('login') == 'valid'){
            echo "<script>$('#loginValid').modal('show');</script>";
        }
    ?>