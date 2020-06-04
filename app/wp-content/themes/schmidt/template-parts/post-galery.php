<?php
/*
 * Template Name: Post Galeria
 * Template Post Type: post
 */
get_header(); ?>

<!-- BANNER-FLAGS -->
<div class="bnr-tpc">
    <div class="container" style="margin-top: 77px">
        <h1 class="ttl-tpc">Galeria</h1>
    </div>
</div><!-- banner-hero -->


<style>
    p {
        display: inline-block;
    }

    p > img {
        width: 250px;
        height: 250px;
        object-fit: cover;
        overflow: hidden;
        cursor: pointer;
    }

    p > img:hover {
        opacity: 0.7;
    }

    #img01 {
        z-index: 10;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        color: #fff;
    }

    .modal-background {
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(38, 50, 92, 0.8);
    }


    /* Modal Content (Image) */

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 1000px;
    }


    /* Caption of Modal Image (Image Text) - Same Width as the Image */

    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    @media only screen and (max-width: 768px) {
        p {
            width: 49%;
        }

        p > img {
            width: 100%;
        }
    }
</style>
<script>
    function getHighestResImg(element){
        if(element.getAttribute('srcset')){
            let highResImgUrl = '';
            let maxRes = 0;
            let imgWidth,urlWidthArr;
            element.getAttribute('srcset').split(',').forEach((item)=>{
                urlWidthArr = item.trim().split(' ');
                imgWidth = parseInt(urlWidthArr[1]);
                if(imgWidth > maxRes) {
                    maxRes = imgWidth;
                    highResImgUrl = urlWidthArr[0];
                }

            });

            return highResImgUrl;
        }else{
          return  element.getAttribute('src');
        }

    }

    function enlargeImage() {
        document.getElementById("img01").src = getHighestResImg(this);
        document.getElementById("caption").innerHTML = this.alt;
        document.getElementById('myModal').style.display = "block";
    }

    document.addEventListener('DOMContentLoaded', function() {
        var images = document.querySelectorAll('img[class*="wp-image"]');
        console.log(images)
        for (i = 0; i < images.length; i++) {
            images[i].onclick = enlargeImage;
        }
    }, false);
</script>

<!-- BOX-ATUAÇÃO -->
<section id="box-rounded-area">
    <div class="container">
        <div class="col-12 box-area box-area-row">

            <?php

            // Start the Loop.
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content/content', 'blog' );

                if (get_the_category()[0]->term_id == 1) {
                    $post_type = 'ARTIGOS';
                } elseif (get_the_category()[0]->term_id == 5) {
                    $post_type = 'VÍDEOS';
                }

                echo '<div style="text-align: center;"><a class="btn btn-metro shadow" href="/midia/galeria/" rel="noopener noreferrer" type="button">Voltar à Galeria</a></div>';

            endwhile; // End the loop.
            ?>

        </div><!-- ./box-flags -->
    </div><!-- ./container -->
</section>

<div id="myModal" class="modal">
    <div class="modal-background" onclick="document.getElementById('myModal').style.display='none'"></div>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<?php get_footer();