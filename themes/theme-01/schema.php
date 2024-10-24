<?php
if ($isPrimary) {
    $sliders = $this->SiteModel->slider();
    if ($sliders->num_rows()) {
        ?>
        <!--==============================================slider start=======================================================-->
        <div id="carouselExampleIndicators" class="carousel slide main_slider" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></li>
            </ol>

            <div class="carousel-inner">
                <?php
                $i = 1;
                foreach ($sliders->result() as $slider) {
                    $active = $i++ == 1 ? 'active' : '';
                    echo '<div class="carousel-item ' . $active . '">
                                <img src="{assets}' . $slider->image . '" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-md-block">
                                    <h5>India</h5>
                                    <!--<p>India, officially the Republic of India, is a country in South Asia. It is the seventh-largest country by area, the second-most populous country, and the most populous democracy in the world.</p>-->
                                </div>
                            </div>';
                }
                ?>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--==============================================slider end=======================================================-->


        <?php
    }
    ?>
    <script>
        $(document).on('click', '.sidenav2 .dropdown', function () {
            if (event.target !== this) {
                $('.dropdown').removeClass('dropdown_open');
                $(this).toggleClass('dropdown_open');
            }
        })
        $(document).on('click', '.sidenav2 .dropdown_open', function (event) {

            $(this).find('.dropdown-content').toggleClass('dropdown_open_none')


        })

        function openNav() {
            $(".sidenav2").eq(0).css("left", "0");
            $(".blur_main_div").eq(0).css("display", "inherit");
            $("#open-btn").css("display", "none");
        }

        function closeNav() {
            $(".sidenav2").eq(0).css("left", "-100%");
            $(".blur_main_div").eq(0).css("display", "none");
            $("#open-btn").css("display", "block");
        }

        function opensearch() {
            $("#search_div").css("top", "0");
        }

        function closesearch() {
            $("#search_div").css("top", "-100%");
        }
    </script>

    <!--=============================================navbar end======================================================-->


    <?php
    echo $this->parser->parse('pages/home_page',[],true);
}
?>




{content}


<div class="overlay"></div>