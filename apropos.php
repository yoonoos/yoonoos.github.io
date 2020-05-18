<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>


<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php if(isset($_GET['token'])){
    include 'includes/unsubpop.php';
} ?>

        <?php include 'includes/navbar.php'; ?>

        <main class="container">
            <div class="row">
                <div class="col-9">
                    <div class="box-info">
                        <div class="box-info-heading">
                            <H1>Very Important Stuff</H1>
                        </div>
                        <div class="box-info-detail">
                            <div class="torrent-tabs">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="description">
                                        <p>First of all: <strong>PLEASE SEED</strong></p>
                                        &nbsp;
                                        <div class="divider"></div>
                                        &nbsp;
                                        <p>This Website is free however, we would really appreciate it if you would not use an <strong>adblocker</strong><br>Maintaining a site is not easy, and the money made on Musicoid goes straight back to it,<br>All that to provide to our users the best experience they could get.</p>
                                        &nbsp;
                                        <div class="divider"></div>
                                        &nbsp;
                                        <p>The albums and all the music provided by other users are free for you to enjoy of your own will<br>However, we <STRONG>HIGHLY RECOMMEND</STRONG> you to buy or purchase the album if you like it<br>especially from small musicians who barely survive doing what they love.</p>
                                        &nbsp;
                                        <div class="divider"></div>
                                        &nbsp;
                                        <p>If you didn't find an album or a musician, please <a href="http://www.musicoid.xyz/contact.html"><strong>CONTACT US</strong></a><br>and we will make sure that the album/musician would be up and ready for download in the future.</p>
                                        &nbsp;
                                        <div class="divider"></div>
                                        &nbsp;
                                        <p>You want to upload your favorite album to <a href="http://www.musicoid.xyz/"><strong>MUSICOID</strong></a> ??<br><a href="http://www.musicoid.xyz/contact.html"><strong>CONTACT US</strong></a> and we will tell you how.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-info-heading">
                            <H1><a href="http://www.musicoid.xyz/contact.html">Info@Musicoid.com</a></H1>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
