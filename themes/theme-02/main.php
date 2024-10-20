<style>
    <?php
    if (in_array(PATH, ['sewaedu'])) {
        ?>
        :root {
            --primary: #E22B2B;
            --theme-primary: white;
            --text-color: #11446b;
        }

        .overlay_bg_50::before {
            background-color: var(--text-color) !important;
        }

        .logo_dark.head-logo {
            width: 351px;
        }

        .bg_light_green {
            background-color: var(--text-color) !important;
        }

        .head-text-logo {
            display: none;
        }

        .main-heading.center-heading {
            color: var(--text-color) !important
        }

        .top-header.light_skin .contact_detail li,
        .top-header.light_skin .contact_detail li a,
        .top-header.light_skin .contact_detail li a i {
            color: var(--text-color) !important;
            font-weight: 900;
            font-size: 19px;
        }

        .footer_dark {
            background-color: var(--text-color) !important;
        }

        .navbar-expand-lg .navbar-nav>li>.nav-link,
        .dark_skin .navbar-expand-lg .navbar-nav .dropdown-item,
        .dark_skin .navbar-expand-lg .navbar-nav .dropdown-header,
        .dark_skin .cart_quantity,
        .dark_skin .cart_total {
            color: var(--text-color) !important;
            font-size: 15px;
            font-weight: 900;
        }

        <?php
    } else if (in_array(PATH, ['zcc','skycrownworld'])) {
        $primaryC = PATH == 'skycrownworld' ? '002448' :'E22B2B';
        ?>
            :root {
                --primary: #<?=$primaryC?>;
                --theme-primary: #<?=$primaryC?>
            }

            .bg_light_green {
                background-color: var(--primary) !important;
            }

            .overlay_bg_50::before {
                background-color: var(--primary) !important;
            }

        <?php
    } else {
        ?>
            :root {
                --primary: #07294d;
                --theme-primary: #07294d
            }

            .overlay_bg_50::before {
                background-color: var(--primary) !important;
            }

        <?php
    }
    ?>
    .bg_blue_dark {
        background-color: var(--theme-primary) !important;
    }

    .btn-default,
    .page-item.active .page-link,
    .page-item .page-link:hover,
    .custome-checkbox .form-check-label::before,
    .custome-checkbox input[type="checkbox"]+.form-check-label::after,
    .tags a:hover,
    .fancy_box::before {
        border-color: var(--primary) !important
    }

    .btn-default,
    .bg_default,
    .scrollup:hover,
    .page-item.active .page-link,
    .page-item .page-link:hover,
    .sidebar .widget_title::before,
    .tags a:hover,
    .item_meta.duration,
    .course_rate .review_bar .rating,
    .cat_style1 a:hover,
    .sub_heading::before,
    .carousel_style2 .carousel-control-next:hover,
    .carousel_style2 .carousel-control-prev:hover {
        background-color: var(--primary) !important;
    }

    @media only screen and (min-width: 992px) {
        .navbar-nav {
            flex-wrap: wrap;
        }
    }

    h2 span,
    h1 span {
        color: #ffbc09 !important
    }

    .theme-back {
        background-color: var(--primary) !important;
        color: white;
    }

    .theme-btn:hover {
        outline: medium none;
        color: white
    }

    .theme-btn:hover::before {
        -webkit-transform: skewX(-45deg) translateX(40em);
        transform: skewX(-45deg) translateX(40em);
    }

    .theme-btn::before {
        content: "";
        background-color: rgba(255, 255, 255, 0.5);
        height: 100%;
        width: 2em;
        display: block;
        position: absolute;
        top: 0;
        left: -4.5em;
        -webkit-transform: skewX(-45deg) translateX(0);
        transform: skewX(-45deg) translateX(0);
        transition: all 0.8s ease-in-out;
    }

    .theme-border {
        border: 1px solid var(--primary) !important;
    }
</style>
<?php
if (PATH == 'sewaedu') {
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-proxima-nova@1.0.1/style.min.css">
    <style>
        body,
        li,
        .title {
            font-family: 'Proxima Nova', sans-serif !important;
        }
    </style>
    <?php
}
?>

<body>
    <div class="modal fade lr_popup" id="Login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ion-android-menu"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- START HEADER -->
    <header class="header_wrap dark_skin">
        <div class="top-header light_skin bg_blue_dark">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="alertbox_content">
                            <img class="logo_dark head-logo"
                                src="{base_url}<?= UPLOAD . $this->ki_theme->config('logo') ?>" alt="RGYCSM">
                            <span class="head-text-logo">
                                <?= $this->ki_theme->config('title') ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="d-flex flex-wrap align-items-center justify-content-md-end justify-content-center mt-2 mt-md-0">
                            <ul class="contact_detail list_none text-center text-md-right">
                                <li><a href="#"><i class="ti-mobile"></i>
                                        <?= $this->ki_theme->config('number') ?>
                                    </a></li>
                                <li><a href="#"><i class="ti-email"></i>
                                        <?= $this->ki_theme->config('email') ?>
                                    </a></li>
                            </ul>
                            <!-- <ul class="list_none header_list border_list ml-1">
                                <li>
                                    <a href="branch/index.html">Login</a>
                                </li>
                                <li>
                                    <a href="franchise-free/index.html#franchise"
                                        class="btn btn-default btn-sm">Franchise Enquiry</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <?php
                    $pageCount = 0;

                    function get_menu($items, $class = '', $liClass = '', $linkClass = 'dropdown-toggle nav-link', $boxID = '')
                    {



                        $html = "<ul class=\"" . $class . "\" id=\"" . $boxID . "\">";



                        foreach ($items as $key => $value) {
                            $activeCss = $value['isActive'] ? 'active' : ''; //getActiveMenu($value['page_id'],'active');
                            $link = $value['link'];

                            $iconWithTExt = $value['label'];

                            if (array_key_exists('child', $value))

                                $html .= '<li class="' . $activeCss . ' dropdown"><a href="#" ' . $value['target'] . ' class="menu-css ' . $linkClass . '" data-toggle="dropdown">' . $iconWithTExt . '</a>';
                            else

                                $html .= '<li class="' . $activeCss . '"><a href="' . $link . '" ' . $value['target'] . ' class="menu-css dropdown-item nav-link nav_item">' . $iconWithTExt . '</a>';



                            if (array_key_exists('child', $value)) {
                                $html .= '<div class="dropdown-menu">';
                                $html .= get_menu($value['child'], '', '', 'dropdown-item menu-link dropdown-toggler');
                                $html .= '</div>';
                            }

                            $html .= "</li>";

                        }

                        $html .= "</ul>";



                        return $html;



                    }
                    echo get_menu($menus, 'navbar-nav');
                    ?>

                    <?php
                    /*
                    <ul class="navbar-nav">
                        <li>
                            <a class="dropdown-item nav-link nav_item" href="index.html">Home</a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-link nav_item" href="about.html">About Us</a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-link nav_item" href="verification/centers.html">Centers</a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-link nav_item" href="courses.html">Course</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Student Zone</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <a class="dropdown-item nav-link nav_item"
                                            href="verification/check-registration.html">
                                            Check Your Registration</a></li>

                                    <li class="dropdown">
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">Download</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="verification/certificate-verification.html">Download Your
                                                        Certificate</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="verification/check-result.html">Download Your
                                                        Marksheet</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="verification/download_your_id_card.html">Download your ID
                                                        Card</a></li>
                                                <!-- <li><a class="dropdown-item nav-link nav_item" href="https://www.rgycsm.org/verification/check-result_ntt.php">NTT/PTT or 2 Years Marksheet</a></li> 
                                            <li><a class="dropdown-item nav-link nav_item" href="https://www.rgycsm.org/verification/certificate-verification.php">NTT/PTT or 2 Years Certificate</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="https://www.rgycsm.org/verification/download_your_ndsm_certificate.php">Download NDSM Certificate</a></li> 
                                            <li><a class="dropdown-item nav-link nav_item" href="https://www.rgycsm.org/verification/download_your_itlm_certificate.php">Download ITLM Certificate</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="https://www.rgycsm.org/verification/suggestion-verification.php">Download RGYCSM EXAM SUGGESTION</a></li>  
                                            <li><a class="dropdown-item nav-link nav_item" href="https://www.rgycsm.org/prospectus2019.pdf">Download RGYCSM Prospectus 201+</a></li> -->
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="dropdown-item nav-link nav_item" href="online-exam/entry.html">Online
                                            Examination</a></li>
                                    <li><a class="dropdown-item nav-link nav_item"
                                            href="demo-online-exam/entry.html">Demo Online Exam</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="library.html">Library</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Gallery</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="photo-gallery.html">Image
                                            Gallery</a></li>
                                    <!--<li><a class="dropdown-item nav-link nav_item" href="https://www.rgycsm.org/insta-gallery">Insta Gallery</a></li>-->
                                    <li><a class="dropdown-item nav-link nav_item" href="video-gallery.html">Video
                                            Gallery</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="dropdown-item nav-link nav_item"
                                href="franchise-free/index.html#franchise">Franchise</a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-link nav_item" href="bank.html">Bank A/C</a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-link nav_item" href="blog/index.html">Blog</a>
                        </li>
                        <li>
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Placement</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="recruiters.html">For
                                            Company</a></li>
                                    <li><a class="dropdown-item nav-link nav_item"
                                            href="student-placement-form.html">Student Placement Form</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    */
                    ?>
                </div>

                <ul class="navbar-nav attr-nav align-items-center">
                    <li>
                        <div class="search-overlay">
                            <div class="search_wrap">
                                <form>
                                    <input type="text" placeholder="Search" class="form-control" id="search_input" />
                                    <button type="submit" class="search_icon">
                                        <i class="ion-ios-search-strong"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    {output}
    <a href="https://wa.me/<?= $this->ki_theme->config('whatsapp_number') ?>" class="float" target="_blank">
        <i class="fab fa-whatsapp  my-float"></i>
    </a>
    <!--<a href="tel:919831164756" class="getin">
<i class="fa fa-phone getin-call"></i>
</a>-->
    <!-- START FOOTER -->
    <footer class="bg-black footer_dark" style="background:<?=(PATH == 'skycrownworld') ? 'var(--primary)' : 'black'?>">
        <div class="top_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 mb-4 mb-lg-0">
                        <div class="footer_logo mt-3">
                            <?php
                            if (PATH != 'sewaedu') {
                                ?>
                                <a href="{base_url}"><img alt="logo" style="width:150px"
                                        src="{base_url}<?= UPLOAD . $this->ki_theme->config('logo') ?>" /></a>
                                <?php
                            }
                            ?>
                            <div>&nbsp;</div>

                            <ul class="contact_info contact_info_light list_none mb-3">
                                <li>
                                    <i class="fa fa-map-marker-alt"></i>
                                    <address style="text-align: justify;">
                                        <?= $this->ki_theme->config('address') ?>
                                    </address>
                                </li>
                                <?php
                                if (PATH == 'sewaedu') {
                                    ?>
                                    <li>
                                        <i class="fa fa-map-marker-alt"></i>
                                        <address style="text-align: justify;">
                                            <?= $this->ki_theme->config('alternate_address') ?>
                                        </address>
                                    </li>
                                    <?php
                                }
                                ?>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:<?= $this->ki_theme->config('email') ?>">
                                        <?= $this->ki_theme->config('email') ?>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-mobile-alt"></i>
                                    <p>
                                        <?= $this->ki_theme->config('number') ?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    $footer_sections = $this->ki_theme->config('footer_sections');
                    if ($footer_sections) {
                        foreach ($footer_sections as $index => $title) {
                            $myTitle = $this->SiteModel->get_setting($index . '_text', $title);
                            echo '<div class="col-lg col-sm mb-4 mb-lg-0">
                                <h6 class="widget_title">' . $myTitle . '</h6>
                                <ul  class="list_none widget_links links_style1">';
                            $fields = $this->SiteModel->get_setting($index . '_links', '', true);
                            if ($fields) {
                                foreach ($fields as $value) {
                                    $my_index = $value->title;
                                    $value = $value->link;
                                    echo "<li><a href='$value'><span>$my_index</span></a></li>";
                                }
                            }
                            echo '</ul></div>';
                        }
                    }

                    ?>
                    <!-- <div class="col-lg-5 col-sm-5 mb-4 mb-lg-0">
                        <h6 class="widget_title">Computer Course</h6>
                        <ul class="list_none widget_links links_style1">
                            <?php
                            foreach ($this->ki_theme->config('footer_first_links') as $linkRow) {
                                echo '<li><a href="' . $linkRow->link . '">' . $linkRow->title . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-lg col-sm mb-4 mb-lg-0">
                        <h6 class="widget_title">Vocational Course</h6>
                        <ul class="list_none widget_links links_style1">
                            <?php
                            foreach ($this->ki_theme->config('footer_second_links') as $linkRow) {
                                echo '<li><a href="' . $linkRow->link . '">' . $linkRow->title . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-lg col-sm mb-4 mb-lg-0">
                        <h6 class="widget_title">Industrial Course</h6>
                        <ul class="list_none widget_links links_style1">
                            <?php
                            foreach ($this->ki_theme->config('footer_third_links') as $linkRow) {
                                echo '<li><a href="' . $linkRow->link . '">' . $linkRow->title . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="bottom_footer bg_black p-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="copyright  text-center text-md-left">
                            <!-- ©
                            <script>document.write(new Date().getFullYear())</script> All Rights Reserved by RGYCSM.
                            ||
                            <span><a href="privacy-policy.html" style="color:#ffffff;">Privacy Policy</a></span> -->
                            <?php

                            if (PATH == 'sewaedu') {
                                echo '<p>Copyrights@ All Right Reserved. This is the official Website of Skill Education & Welfare Association (SEWA) Council of Skill and Vocational Studies Designed by Sewa Tech</p>';
                            } 
                            else if(PATH == 'sewaeducation'){
                                echo 'Copyrights@ All Right Reserved . SKILL EDUCATION AND WELFARE ASSOCIATION';
                                echo '<br>
                            <p>Copyright@All Right Reserved . Jamai Urdu Aligarh</p>';
                            }else {
                                ?>
                            <p> Copyright @
                                <script>document.write(new Date().getFullYear())</script> {copyright}
                            </p>
                            <?php
                            }
                            ?>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list_none social_icons radius_social social_white social_style1 text-md-right">
                            <?php
                            $facebook = $this->ki_theme->config('facebook');
                            $instagram = $this->ki_theme->config('instagram');
                            $twitter = $this->ki_theme->config('twitter');
                            $linkedin = $this->ki_theme->config('linkedin');
                            $youtube = $this->ki_theme->config('youtube');

                            if ($facebook) {
                                ?>
                                <li>
                                    <a target="_blank" href="<?= $facebook ?>"><i class="ion-social-facebook"></i></a>
                                </li>
                                <?php
                            }
                            if ($twitter) {
                                ?>
                                <li>
                                    <a target="_blank" href="<?= $twitter ?>"><i class="ion-social-twitter"></i></a>
                                </li>
                                <?php
                            }
                            if ($linkedin) {
                                ?>
                                <li>
                                    <a href="<?= $linkedin ?>"><i class="ion-social-linkedin"></i></a>
                                </li>
                                <?php
                            }
                            if ($youtube) {
                                ?>
                                <li>
                                    <a target="_blank" href="<?= $youtube ?>"><i class="ion-social-youtube-outline"></i></a>
                                </li>
                                <?php
                            }
                            if ($instagram) {
                                ?>
                                <li>
                                    <a target="_blank" href="<?= $instagram ?>"><i
                                            class="ion-social-instagram-outline"></i></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- AJAY -->
    <a href="#" class="scrollup" style="display: none"><i class="ion-ios-arrow-up"></i></a> <!-- END FOOTER -->
    <a href="#" class="scrollup" style="display: none"><i class="ion-ios-arrow-up"></i></a>
    <!-- Latest jQuery -->
    <!-- jquery-ui -->
    <script src="{theme_url}assets/js/jquery-ui.js"></script>
    <!-- popper min js -->
    <script src="{theme_url}assets/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{theme_url}assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="{theme_url}assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="{theme_url}assets/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="{theme_url}assets/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="{theme_url}assets/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="{theme_url}assets/js/jquery.countdown.min.js"></script>
    <!-- jquery.counterup.min js -->
    <script src="{theme_url}assets/js/jquery.counterup.min.js"></script>
    <!-- imagesloaded js -->
    <script src="{theme_url}assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js -->
    <script src="{theme_url}assets/js/isotope.min.js"></script>
    <!-- jquery.parallax-scroll js -->
    <script src="{theme_url}assets/js/jquery.parallax-scroll.js"></script>
    <!-- scripts js -->
    <script src="{theme_url}assets/js/scripts.js"></script>
    <script src="{theme_url}assets/js/script-carrusal.js" async></script>
    <script>
        function validation() {
            var name = $("#name").val();
            // var message = $("#state").val();
            var message = $("#message").val();
            var mobile = $("#mobile").val();
            var mobile_pattern = /^((\+91?)|\+)?[7-9][0-9]{9}$/;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var email = $("#email").val();
            var course_name = $("#course_name").val();
            if (name == "") {
                $("#name").css('border-color', 'red');
                setTimeout(() => { $("#name").css('border-color', '#fff'); }, 2000);
                $("#name").focus();
                return false;
            }
            if (mobile == "") {
                $("#mobile").css('border-color', 'red');
                setTimeout(() => { $("#mobile").css('border-color', '#fff'); }, 2000);
                $("#mobile").focus();
                return false;
            } else if (!mobile_pattern.test(mobile)) {
                toastr.error("Invalid mobile.");
                return false;
            }
            if (email == "") {
                $("#email").css('border-color', 'red');
                setTimeout(() => { $("#email").css('border-color', '#fff'); }, 2000);
                $("#email").focus();
                return false;
            }
            else if (!emailRegex.test(email)) {
                toastr.error("Invalid Email.");
                return false;
            }
            if (message == "") {
                $("#message").css('border-color', 'red');
                setTimeout(() => { $("#message").css('border-color', '#fff'); }, 2000);
                $("#message").focus();
                return false;
            }
            // if (city == "") {
            //     $("#city").css('border-color', 'red');
            //     setTimeout(() => { $("#city").css('border-color', '#fff'); }, 2000);
            //     $("#city").focus();
            //     return false;
            // }
            if (course_name == "") {
                $("#course_name").css('border-color', 'red');
                setTimeout(() => { $("#course_nmae").css('border-color', '#fff'); }, 2000);
                $("#course_name").focus();
                return false;
            }
            var data = {
                name, email, mobile, course_name, message
            };
            $.AryaAjax({
                url: 'website/contact-us-action',
                data: data,
                success_message: 'Thank you for contact with us.',
                page_reload: true
            }).then((e) => {
                $("#name").val("");
                $("#mobile").val("");
                $("#email").val("");
                // $("#state").val("");
                $("#message").val("");
                $("#course_nmae").val("");
            });
            return false;
            // $.ajax({
            //     'url': '<?= base_url('site/contact-us-action') ?>',
            //     'type': 'POST',
            //     'data': data,
            //     'success': function (data) {
            //         toastr.success("Thank you for contact with us.");
            //         $("#name").val("");
            //         $("#mobile").val("");
            //         $("#email").val("");
            //         $("#state").val("");
            //         $("#city").val("");
            //         $("#area").val("");
            //     }
            // });
        }
    </script>
</body>

</html>