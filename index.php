<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>


<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php if(isset($_GET['token'])){
    include 'includes/unsubpop.php';
} ?>
    

        <?php include 'includes/navbar.php'; ?>
        <?php 
        include 'includes/howto_pop.php';
        include 'includes/contact_pop.php';
        include 'includes/apropos_pop.php';
?> 

        <div class="content-wrapper">
            <div class="container">

                <!-- Main content -->


                <section class="content">
                    <div class="row">
                        <div class="col-sm-9">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/first%20carousel.png" alt="First slide">
                                        <div class="new-carousel carousel-caption">
                                            <h3>This is just a test 1</h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/second%20carousel.png" alt="Second slide">
                                        <div class="new-carousel carousel-caption">
                                            <h3>This is just a test 2</h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/third%20carousel.png" alt="Third slide">
                                        <div class="new-carousel carousel-caption">
                                            <h3>This is just a test 3</h3>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                </a>
                            </div>
                        </div>


                        <?php include 'includes/tickets.php'; ?>



                        <div class="col-sm-3 width100">
                            <?php include 'includes/sidebar.php'; ?>
                        </div>
                    </div>
                </section>

            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>
</body>

</html>
