<body>
    <a id="problem_btn" href="#">आपकी समस्या दर्ज करें</a>
    <a href="https://wa.me/{whatsapp_number}" id="phone_btn" target="_blank"><img
            src="https://img.icons8.com/color/70/000000/whatsapp--v1.png" alt=""></a>
    <a href="#" id="donation_btn" target="_blank">Donate</a>
    <!--=============================================navbar start======================================================-->
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .navbar_margin {
            margin-top: 110px;
        }

        body {
            overflow-x: hidden;
        }

        .main_navbar,
        .card1,
        .right-div-p,
        .left-div-p,
        .buttons button,
        .contact-footer,
        .head_item2,
        .head_item3 span,
        .member_slider .carousel-inner .card,
        .navar_small_img {
            background: rgb(154, 31, 136);
            background: radial-gradient(circle, rgba(154, 31, 136, 1) 0%, rgba(84, 0, 72, 1) 100%);
        }

        .blur_main_div {
            height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, .7);
            z-index: 99999;
            display: none;
        }

        .main_navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9999;
        }

        .navbar_relative {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px;
        }

        #menu_toggle_btn {
            display: none;
        }

        .website_logo {
            cursor: pointer;
            z-index: 999;
        }

        .website_logo img {
            height: 50px;

        }

        .website_title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: bold;
            font-size: 25px;
            width: 100%;
            text-align: center;
            color: #fff;
        }

        .website_social_icon {
            display: flex;
            align-items: center;
            justify-content: center;
            grid-column-gap: 12px;
            margin-right: 10px;
            z-index: 999;
        }

        .website_social_icon a {
            font-size: 25px;
            color: #fff;
            cursor: pointer;
            transition: all .3s;
        }

        .website_social_icon a:hover {
            font-size: 25px;
            color: #ebe534;
            transition: all .3s;
        }

        /*=============================*/
        .navar_small_img {
            display: none;
            position: relative;
        }

        .nav-bar {
            top: 0;
            z-index: 111;
        }

        .social_link {
            display: flex;
            justify-content: space-around;
        }

        .social_link a {
            text-decoration: none;
        }

        .nav-item img {
            height: 40px;
            width: 40px;
            margin-left: 10px;
            margin-top: 5px;
        }

        .sidenav2 {
            position: absolute;
            top: 60px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            text-align: center;
            padding: 0;
            margin: 0;
            width: 100%;
            box-shadow: 0 0 6px 0 rgba(232, 0, 0, 1);
            border-bottom: solid 3px transparent;
            background-image: linear-gradient(rgba(232, 0, 0, 1), rgba(61, 0, 0, 1)), linear-gradient(101deg, rgba(232, 0, 0, 1), #ff48fa);
            background-origin: border-box;
            background-clip: content-box, border-box;
            box-shadow: 2px 1000px 1px #fff inset;
        }

        .sidenav2 a {
            padding: 12px 16px;
            text-decoration: none;
            font-size: 15px;
            margin: 0;
            font-weight: 600;
            color: #000;
            text-align: center;
            transition: 0.3s;

        }

        .sidenav2 a .fa {
            margin-left: 6px;
            text-align: center;
        }

        .sidenav2 a:hover {
            color: white;

        }

        .category {
            display: none;
        }

        .fa-home {
            font-size: 34px !important;
        }

        /* ========================= */
        li a,
        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 10px 10px 10px !important;

            text-decoration: none;
        }

        li a:hover,
        .dropdown:hover .dropbtn {
            background-color: rgb(74, 100, 108);
            color: #fff;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 190px;
            box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
            z-index: 999;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content i {
            margin-right: 8px !important;
        }

        .dropdown-content a:hover {
            background-color: rgb(74, 100, 108);

        }

        .dropdown:hover .dropdown-content {
            display: block;
        }


        @media only screen and (max-width:768px) {
            .navbar_margin {
                margin-top: 65px;
            }

            .dropdown_open {
                background-color: #0A1C1C !important;
                color: #fff !important;
                transition all .3s;
            }

            .dropdown_open a {
                color: #fff !important;
            }

            .dropdown_open .dropdown-content a {
                color: #fff !important;
                background-color: rgb(74, 100, 108) !important;
                transition all .3s;
            }

            .dropdown_open_none {
                display: none !important;
            }

            .navar_small_img {
                display: flex;
                justify-content: space-between;
                padding: 10px;
                width: 100%;
                color: #fff;
            }

            .navar_small_img img {
                height: 70px;
                width: auto;
                margin: 0;
                padding: 0;

            }

            .sidenav2 {
                position: fixed;
                top: 0;
                height: 100%;
                width: 250px;
                flex-wrap: inherit;
                flex-direction: column;
                justify-content: inherit;
                align-items: start;
                overflow-Y: auto;
                left: -100%;
                z-index: 99999;
                transition: all .3s;
            }

            .sidenav2 .dropdown,
            .sidenav2 a {
                width: 100%;
                text-align: left !important;

            }

            .dropbtn {
                padding-left: 15px;
            }

            .sidenav2 a:hover {
                color: unset;
            }

            li a:hover,
            .dropdown:hover .dropbtn {
                background-color: unset;
                color: unset;
            }

            .dropdown-content a:hover {
                background-color: unset;
            }

            .dropdown:hover .dropdown-content {
                /*display: none;*/
            }

            .navar_small_img a {
                color: #fff;
                font-size: 30px;
                padding: 0;
                padding-left: 10px;
                text-align: right !important;
            }

            .dropdown-content {
                display: none;
                position: static;
            }


            /*=============================*/
            #menu_toggle_btn {
                position: absolute;
                display: block;
                top: 50%;
                left: 10px;
                font-size: 20px;
                transform: translateY(-50%);
                color: #fff;
            }

            .website_logo {
                margin-left: 30px;
            }

            .website_title {
                position: static;
                top: 0%;
                right: 0px;
                transform: translate(0, 0);
                font-weight: bold;
                font-size: 20px;
                color: #fff;

                width: 100%;
                text-align: center;
            }

            .website_social_icon {
                display: none;
            }
        }

        @media only screen and (max-width:480px) {
            .website_title {
                font-size: 17px;
            }
        }
    </style>


    <div class="blur_main_div"></div>
    <div class="main_navbar">
        <div class="navbar_relative">
            <i class="fa fa-bars" id="menu_toggle_btn" onclick="openNav()" aria-hidden="true"></i>
            <div class="website_logo">
                <a href="{base_url}"><img src="{assets}{logo}"></a>
            </div>
            <div class="website_title">{title}</div>
            <div class="website_social_icon">
                <a href="{facebook}" class="" target="_blank"><i class="fa fab fa-facebook"></i></a>
                <a href="{twitter}" class="" target="_blank"><i class="fa fab fa-twitter"></i></a>
                <a href="{youtube}" class=""><i class="fa fab fa-youtube"></i></a>
                <a href="{instagram}" class=""><i class="fa fab fa-instagram"></i></a>
                <a href="{linkedin}" class=""><i class="fa fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
    <div class="nav-bar" id="nav-bar">
        <div class="sidenav2">
            <div class="navar_small_img"><a href="{base_url}"><img src="{assets}{logo}"></a>
                <a href="javascript:void(0)" id="close-btn" class="closebtn menu" onclick="closeNav()"><i
                        class="fa fa-times" aria-hidden="true"></i></a>
            </div>

            <?php
            $pageCount = 0;
            function get_menu($items, $class = '', $liClass = '', $linkClass = '', $boxID = '', $attr = '')
            {
                $html = "";
                foreach ($items as $key => $value) {
                    $activeCss = $value['isActive'] ? 'active' : ''; //getActiveMenu($value['page_id'],'active');
                    $link = $value['link'];
                    $iconWithTExt = $value['label'];
                    if ($class == 'dropdown') {
                        $html .= '<a href="' . $link . '" ' . $value['target'] . ' class="menu-css ' . $linkClass . '">' . $iconWithTExt . '</a>';
                    } else {
                        if (array_key_exists('child', $value)) {
                            $html .= '<li class="' . $activeCss . ' dropdown"><a href="#" ' . $value['target'] . ' class="menu-css ' . $linkClass . ' " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $iconWithTExt . ' <i
                                        style="margin-top:1.5px!important;" class="fa fa-sort-desc" aria-hidden="true"></i></a>';
                        } else
                            $html .= '<li class="' . $activeCss . ' dropdown dropdown_open"><a href="' . $link . '" ' . $value['target'] . ' class="menu-css ' . $linkClass . '">' . $iconWithTExt . '</a>';
                    }
                    if (array_key_exists('child', $value)) {
                        $html .= '<div class="dropdown-content">';
                        $html .= get_menu($value['child'], 'dropdown', '', '');
                        $html .= '</div>';
                    }
                    $html .= "</li>";
                }
                return $html;
            }
            echo get_menu($menus, '');
            ?>


        </div>
    </div>
    <div class="navbar_margin"></div>


    {output}


    <!-- ================================================================================== -->
    <!-- ================================================================================== -->
    <!-- ================================================================================== -->
    <script type="text/javascript">
        // number count for stats, using jQuery animate

        $('.counting').each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');

            $({
                countNum: $this.text()
            }).animate({
                countNum: countTo
            },

                {

                    duration: 3000,
                    easing: 'linear',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum + '+');
                        //alert('finished');
                    }

                });


        });

        function prev() {
            document.getElementById('slider-container').scrollLeft -= 270;
        }

        function next() {
            document.getElementById('slider-container').scrollLeft += 270;
        }


        // $(".slide img").on("click", function() {
        //     $(this).toggleClass('zoomed');
        //     $(".overlay").toggleClass('active');
        // })
        // $(".overlay").on("click" , function(){
        // 	$(".overlay").hide();
        // })



        function preview() {

            $('.preview').html(
                `
        <style>
        .image_preview{
         position: fixed;
         top: 50%;
         left: 50%;
         transform:translate(-50%,-50%);
         height: 100vh;
         width: 100vw;
         background: rgba(0,0,0,.9);
         box-shadow: 0px 0px 5px 1px lightgray;
         border-radius: 10px;
         z-index: 999;
         overflow: hidden;
         display: none;
        z-index: 999999999999;
     }
     .image_preview div{
         height: 100%;
         width: 100%;
         position: relative;
         margin:auto;
         overflow-y:auto;


     }
     .image_preview img{
         width: 50%;
         height: auto;
         position: absolute;
         top: 20px;
         left:50%;
         transform:translatex(-50%);
         z-index: 99999999999;
     }
     .image_preview p{
        position:fixed;
        top:30px;
        right:30px;
         display:flex;
         align-items:center;
         justify-content:center;
         height:50px;
         width:50px;
         background: rgb(255,255,255);
         border-radius:50%;
         text-align: center;
         color: #000;
         font-size: 25px;
         transition: .3s;
         cursor: pointer;
         z-index: 9999999999999;
     }
     img{
         cursor: pointer;
     }
     .image_preview p:hover{
         background: #e8524a;
         transition: .3s;
     }
     @media only screen and (max-width:700px){
         .image_preview img{
         width: 90%;
         top:80px;
         height: auto;
         position: absolute;
         
     }
     }
        </style>
         
        <div class="image_preview">
         <div class="">
             <p id="preview_cancel">x</p>
             <img src="complain_img/Screenshot (2)_0412022140228.png" alt="">
         </div>
     </div>
        `
            );
            $(document).on('click', '#gallery_slider img', function () {
                var src = $(this).attr('src');
                $('.image_preview img').attr('src', src);
                $('.image_preview').css('display', 'block');
            })
            $(document).on('click', '#preview_cancel', function () {
                $('.image_preview').css('display', 'none');
            })
        }
        preview();

    </script>



</body>

</html>
<style>
    .footer_bootom {

        position: relative;
    }

    .footer_bootom p {
        font-size: 16px !important;
    }

    .footer_bootom h5 {
        font-size: 20px !important;
        font-weight: bold;
    }

    .footer_bootom::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(154, 31, 136, 1) 0%, rgba(84, 0, 72, 1) 100%);
        opacity: 1;
        /* Low opacity for the image */
        z-index: -1;
        /* Place the image behind the content */
    }

    .footer_bootom::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{assets}{logo}');
        background-size: 300px 300px;
        /* Adjust as needed */
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.3;
        /* Low opacity for the image */
        z-index: -1;
        /* Place the image behind the content */
    }

    .color_shine {
        color: #F4CE50;
    }

    .footer_bootom .footer_first_div p,
    .footer_bootom .footer_third_div p {
        margin: 0;
        color: #F4CE50;
    }

    .footer_links {
        flex-wrap: wrap;

    }

    .footer_links a {
        margin: 0px 10px 0px 0px;
        text-decoration: underline !important;
        font-size: 14px;
    }

    .footer_contact_div p,
    .footer_contact_div a {
        margin: 0;
        color: #fff;
        font-size: 14px;
    }
</style>
<div class="footer_bootom py-3">
    <div class="container">
        <!-- <div class="row">
            <div class="col-md-12 text-center">
                <div class="footer_first_div">
                    <p>Unique Id of VO/NGO :- </p>
                    <p>Registration No :- </p>
                    <p>Your donations are tax exempted under 80G of the Indian Income Tax Act.</p>
                </div>
            </div>
        </div> -->
        <div class="row mt-3 mx-0 justify-content-between">
            <div class="col-md-8">
                <div class="footer_second_div">
                    <h5 class="color_shine">Disclaimer</h5>
                    <div class="text-white text-justify">
                        <p>No third party agency is working on behalf of MAMATVA FOUNDATION for any recruitment,
                            trainings, camps or other activities related to MAMATVA FOUNDATION. Please check/consult
                            with MAMATVA FOUNDATION directly to get correct information or assistance. Please beware of
                            any unwarranted claims made by anyone on our behalf. Kindly bring any such claims to our
                            notice for immediate attention and action.</p>
                        <p>MAMATVA FOUNDATION doesn't charge any money from anyone for these activities. So if you come
                            across any individual/ organization making a monetary demand in our name please bring it to
                            our notice immediately on <a href="#"><span
                                    class="color_shine">contact@mamatvafoundation.org</span></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-3 pl-md-5">
                <h5 class="color_shine">Reach Us</h5>
                <div class="footer_contact_div">
                    <!-- <p>We'd love to hear from you</p> -->
                    <p>{address}</p>
                    <p>{email}</p>
                    <p>{number}</p>
                </div>
                <h5 class="color_shine mt-3">Connect with us</h5>
                <div class="footer_contact_div">
                    <p><a href="{facebook}" class="" target="_blank"><i class="fa fab fa-facebook"></i> Facebook</a>
                    </p>
                    <p><a href="{twitter}" class="" target="_blank"><i class="fa fab fa-twitter"></i> Twitter</a> </p>
                    <p><a href="{youtube}" class=""><i class="fa fab fa-youtube"></i> Youtube</a></p>
                    <p><a href="{instagram}" class=""><i class="fa fab fa-instagram"></i> Instagram</a></p>
                    <p><a href="{linkedin}" class=""><i class="fa fab fa-linkedin"></i> Linkedin</a></p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <div class="footer_third_div">
                    <p>Your donation transactions are completely safe and secure</p>
                    <p>Copyright © Hyper Pro Webtech</p>
                    <p>All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on("click", ".delete_cmt", function (e) {
        var id = $(this).attr('data-cmt_id');
        var conf = confirm('Do you want to delete this comment?');
        if (conf == true) {
            $.ajax({
                url: "ajax/delete_comment.php",
                type: 'post',
                data: {
                    id: id
                },
                success: function (data) {
                    if (data == 1) {
                        loadTable();
                    }
                }
            });
        }
    });

    $(document).on('click', '.timeline_data img', function () {
        var Event_id = $(this).attr('data-id');
        $(`#${Event_id}`).submit();
    });
    $(document).on('click', '.timeline_data .timeline_img', function () {
        var Event_id = $(this).attr('data-id');
        $(`#${Event_id}`).submit();
    });
    // about us read more
    function read_less() {
        var len = $('#pre_content').text().length;
        if (len > 1000) {
            $('#pre_msg').html($('#pre_content').text().substr(0, 800) + '...' + '<a class="blog-slider__button mt-5 text-white" onclick="read_more()" style="cursor:pointer;">READ MORE</a>');
        }
    }

    function read_more() {
        $('#pre_msg').html($('#pre_content').text() + '<a class="blog-slider__button mt-5 text-white" onclick="read_less()" style="cursor:pointer;">READ LESS</a>')
    }
    read_less();
</script>
</body>

</html>