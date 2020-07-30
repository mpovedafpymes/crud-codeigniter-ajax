<!doctype html>
<html class="fixed sidebar-left-collapsed header-dark">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title class="text-capitalize"><?= $nav_module ?> | <?= $nav_section ?></title>
    <meta name="keywords" content="SGP" />
    <meta name="description" content="FocusPymes - SGP">
    <meta name="author" content="focuspymes.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <?= $this->renderSection("specific_vendor_css") ?>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <?= $this->renderSection("custom_css") ?>

    <!-- Head Libs -->
    <script src="<?= base_url() ?>/public/assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="#" class="logo">
                    <img src="<?= base_url() ?>/public/assets/img/logo.png" width="55" height="47" alt="Porto Admin" />
                </a>
                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">
                <!-- start: search & notifications -->
                <!-- end: search & notifications -->
                <!-- start: user box -->
                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="<?= base_url() ?>/public/assets/img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="<?= base_url() ?>/public/assets/img/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">John Doe Junior</span>
                            <span class="role">administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fas fa-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fas fa-lock"></i> Lock Screen</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fas fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end: user box -->
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: navigation -->
            <?= view_cell('App\Libraries\Components::navigation') ?>
            <!-- end: navigation -->

            <!-- start: page -->

            


                <?= $this->renderSection('page_content') ?>
                
            

            <!-- end: page -->
        </div>

        <!-- start: sidebar right -->
        <!-- end: sidebar right -->

    </section>

    <!-- Vendor -->
    <script src="<?= base_url() ?>/public/assets/vendor/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>/public/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?= base_url() ?>/public/assets/vendor/popper/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/public/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url() ?>/public/assets/vendor/common/common.js"></script>
    <script src="<?= base_url() ?>/public/assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?= base_url() ?>/public/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="<?= base_url() ?>/public/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <?= $this->renderSection("specific_vendor_js") ?>

    <!-- Theme Base, Components and Settings -->
    <script src="<?= base_url() ?>/public/assets/js/theme.js"></script>

    <!-- Theme Custom -->
    <?= $this->renderSection("custom_js") ?>

    <!-- Theme Initialization Files -->
    <script src="<?= base_url() ?>/public/assets/js/theme.init.js"></script>

    <!-- Specific Page JS -->

</body>

</html>