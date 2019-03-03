<?php include "includes/header.php"; ?>
    <title>Lowbush History</title>
    <div class="cme">
        <h1>History of the Lowbush Blueberry Industry</h1>
    </div>
<div class="alignItems">
        <i>Housed in the DalSpace Repository the two-volume set by Gordon Kinsman, covers early practices of the
            industry :</i> <br/>
        <ul>
            <li><a href="https://dalspace.library.dal.ca/handle/10222/27987">The history of the lowbush blueberry
                    industry 1880 - 1950</a> [PDF-176MB]
            </li>
            <li><a href="https://dalspace.library.dal.ca/handle/10222/28451">The history of the lowbush blueberry
                    industry 1955 - 1990</a> [PDF- 233MB]
            </li>
        </ul>
</div>

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides ">
            <div class="numbertext">1 / 7</div>
            <img src="images/BeginningLC1.png" style="width:100%">
            <div class="text">Vegetative Phase Spring</div>
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 7</div>
            <img src="images/LifecyclePT2.png" style="width:100%">
            <div class="text">Vegetative Phase Summer</div>
        </div>

        <div class="mySlides ">
            <div class="numbertext">3 / 7</div>
            <img src="images/Veg.png" style="width:100%">
            <div class="text">Vegetative Phase Fall </div>
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 7</div>
            <img src="images/SpringLC.png" style="width:100%">
            <div class="text">Spring Year 2</div>
        </div>


        <div class="mySlides ">
            <div class="numbertext">5 / 7</div>
            <img src="images/LtSpring.png" style="width:100%">
            <div class="text">Late Spring Year 2</div>
        </div>


        <div class="mySlides">
            <div class="numbertext">6 / 7</div>
            <img src="images/BerryGrowth.png" style="width:100%">
            <div class="text">Fruit Set Early Summer</div>
        </div>


        <div class="mySlides">
            <div class="numbertext">7 / 7</div>
            <img src="images/RipeBerries.png" style="width:100%">
            <div class="text">Ripe Berries Late Summer</div>
        </div>


        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
    </div>



<style>
    * {box-sizing:border-box}

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
    }

    /* Next & previous buttons */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }
</style>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

<?php include "includes/footer.php"; ?>