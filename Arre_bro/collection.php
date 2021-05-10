<html lang="en">

<!-- HEAD -->
<?php
include('head.php');
?>

<body>


    <!-- HEADER -->
    <?php
    include('header.php');

    include('banner.php');
    ?>
    <script>
        var a = document.querySelector("#collection");
        a.classList.add("active");
        var b = document.querySelector('.banner');
        b.style.background = 'url("used/collections_banner.png")'
        var b = document.querySelector('.banner h1');
        b.innerHTML = "";
    </script>

    <!-- heading -->
    <div class="col-12 writeup" style="padding-top: 0px;">
        <h3 class="fw-bolder" style="font-size: 2.2em; font-weight: bolder;">Collections</h3>
    </div>


    <!-- Collections -->


    <div class="container mb-5">
        <div class="row mb-4">
            <div class="col-6 col-md-4 cat mb-4">
                <a href="" class="">
                    <img src="used\printed.png" width="100%" alt="">
                    <h3 class=""> Printed T-shirts</h3>
                </a>
            </div>
            <div class="col-6 col-md-4 cat mb-4">
                <a href="" class="">
                    <img src=" used\solid.png" width="100%" alt="">
                    <h3> Solid T-shirts</h3>
                </a>
            </div>
            <div class="col-6 col-md-4 cat mb-4">
                <a href="" class="">
                    <img src="used/minimal.png" width="100%" alt="">
                    <h3 class=""> Minimal</h3>
                </a>
            </div>
            <div class="col-6 col-md-4 cat mb-4">
                <a href="" class="">
                    <img src="used/office.png" width="100%" alt="">
                    <h3 class="">The Office</h3>
                </a>
            </div>
            <div class="col-6 col-md-4 cat mb-4">
                <a href="" class="">
                    <img src="used/valorant.png" width="100%" alt="">
                    <h3 class="">Valorant</h3>
                </a>
            </div>
        </div>
    </div>






    <!-- FOOTER -->

    <footer class="footer">

        <div class="footer-content mb-5">
            <div class="container"></div>
            <div class="row">
                <div class="col-12 col-md-3" id="quick-links">
                    <h4>Quick links</h4>
                    <ul class="list-unstyled">
                        <li class="footer-li py-3 py-md-0" id="">
                            <a href="" class="under">Shop</a>
                        </li>
                        <li class="footer-li py-3 py-md-0">
                            <a href="" class="under">About Us</a>
                        </li>
                        <li class="footer-li py-3 py-md-0">
                            <a href="" class="under">Contact Us</a>
                        </li>

                    </ul>
                </div>
                <div class="col-12 col-md-6 " id="newsletter">
                    <h4>Newsletter</h4>
                    <form action="">
                        <input class="form-control mb-2" type="email" placeholder="Email Address">
                        <button type="submit" class="btn btn-dark">SUBSCRIBE</button>
                    </form>
                </div>
                <div class="col-12 col-md-3" id="contact">
                    <h4>Contact</h4>
                    <p>Arre Bro Apparels</p>
                    <p>B-9, Vasant Kunj, New Delhi, IN 110070</p>
                    <p>
                        <a href="mailto:info@arrebro.com">info@arrebro.com</a>
                    </p>
                </div>
            </div>
        </div>

        <hr class="mb-3">

        <div class="footer-content pt-3">

            <ul class="list-unstyled pull-left" id="handles">
                <li class="px-3">
                    <a href="">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </a>


                </li>
                <li class="px-3">
                    <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>

                    </a>
                </li>

                <li class="px-3">
                    <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>

            <small class="pull-right">
                © 2021, Arre!Bro. All Right reserver
            </small>
        </div>

    </footer>
</body>

</html>