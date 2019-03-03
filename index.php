<?php include "includes/header.php"; ?>

<title>Home</title>
<div class="cme">
    <h1>Welcome To Wild Blueberry Information Center</h1>
</div>
<br/>
<br/>

<div class="w3-content w3-display-container" style="max-width:800px">
    <img class="mySlides" src="images/PB2.jpg" style="width:100%" height="292px">
    <img class="mySlides" src="images/PeopleHdr1.jpeg" style="width:100%" height="292px">
    <img class="mySlides" src="images/wild%20blueberry%20experiment4%20new.jpg" style="width:100%" height="292px">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    </div>
</div>

<div class="alignItems">
    <p>The Wild Blueberry Network Information Centre is listed on the US AgNIC site as the repository of record for
        information on wild blueberries. It is a source of wild blueberry production and marketing information for
        producers, agricultural professionals, researchers and students.
    </p>
    <br/>
    <p>Originally, WBNIC was a combined effort of the Nova Scotia Department of Agriculture, MacRae Library of
        Nova Scotia Agricultural College (now the Faculty of Agriculture at Dalhousie University), the Nova Scotia
        Wild Blueberry Producers’ Association, and Agriculture and Agri-Food Canada, Research Branch. The MacRae
        Library continues to maintain the site.</p>
    <br/>

    <b>Disclaimer: The managers of this site assume no responsibility for the information on or linked to this site
        and provide it with no warranty or endorsement. The collection can be used for information or education
        purposes, provided the source is cited in full.</b>

</div>


<style>
    .mySlides {
        display: none
    }

    .w3-left, .w3-right, .w3-badge {
        cursor: pointer
    }

    .w3-badge {
        height: 13px;
        width: 13px;
        padding: 0;
    }
</style>


<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-white";
    }
</script>

<?php include "includes/footer.php"; ?>



