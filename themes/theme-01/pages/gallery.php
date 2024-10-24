
<!--==============================================Gallery And Testinomailas=======================-->
<!-- start count stats -->
<!-- ==================================CSS ====================================================== -->
<!-- ==================================CSS ====================================================== -->

<style media="screen">
    @import "https://fonts.googleapis.com/css?family=Open+Sans:800&amp;display=swap";

    .main_slider_2 {
        width: 100%;
        margin: 0;
        padding: 0;
        font-family: open sans;
        height: 330px;
        background: #f8f8f8;
    }

    .testimonial h3 {
        text-align: center;
        margin: 6% auto;
        font-size: 1.8rem;
        font-weight: 800;
        color: #444;
    }

    #test_head {
        margin: 20px 0px;
    }

    .main_slider_2 .slider {
        display: flex;
        height: auto;
        max-height: auto;
        overflow-y: hidden;
        overflow-x: scroll !important;
        padding: 16px;
        transform: scroll(calc(var(--i, 0)/var(--n)*-100%));
        scroll-behavior: smooth;
    }

    .slider::-webkit-scrollbar {
        height: 5px;
        width: 150px;
        display: none;
    }

    .main_slider_2r::-webkit-scrollbar-track {
        background: transparent;
    }

    .main_slider_2r::-webkit-scrollbar-thumb {
        /* background: #888; */
    }

    .main_slider_2r::-webkit-scrollbar-thumb:hover {
        /* background: #555; */
    }

    .main_slider_2r img:hover {
        transform: scale(1.05);
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.15);
    }

    .main_slider_2 {

        position: relative;
    }

    .main_slider_2 img {
        height: 80%;
        width: 250px;
        margin: 0 10px;
        object-fit: cover;
        border-radius: 15px;
        cursor: pointer;
        transition: .25s ease-in-out;
    }

    .control-prev-btn {
        position: absolute;
        top: 26%;
        left: 0;
        background-color: rgba(255, 255, 255, 0.55);
        height: 100px;
        line-height: 100px;
        width: 45px;
        text-align: center;
        box-shadow: 0 1px 3px #888;
        user-select: none;
        color: #444;
        cursor: pointer;
    }

    .control-next-btn {
        position: absolute;
        top: 26%;
        right: 0;
        background-color: rgba(255, 255, 255, 0.55);
        height: 100px;
        line-height: 100px;
        width: 45px;
        text-align: center;
        box-shadow: 0 1px 3px #888;
        user-select: none;
        color: #444;
        cursor: pointer;
    }

    .main_slider_2 img.zoomed {
        width: 500px;
        height: auto;
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
        /* transform: scale(1) translatey(0) !important; */

    }

    .overlay {
        position: absolute;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, .45);
        top: 0;

        display: none;
    }

    .overlay.active {
        display: block;
    }

    @media only screen and (max-width: 420px) {
        .main_slider_2r {
            padding: 0;
        }

        .main_slider_2 {
            padding: 16px 10px;
        }

        .main_slider_2 img {
            margin: 0;
        }

        .control-prev-btn {
            top: 37%;
        }

        .control-next-btn {
            top: 37%;
        }
    }
</style>
<div class="preview">
</div>
<div class="head_item3 mt-4"><span>Gallery </span></div>
<div class="main_slider_2">
    <div id="slider-container" class="slider" id="gallery_slider">

        <div onclick="prev()" class="control-prev-btn">
            <i class="fa fa-arrow-left"></i>
        </div>
        <div onclick="next()" class="control-next-btn">
            <i class="fa fa-arrow-right"></i>
        </div>
    </div>
</div>