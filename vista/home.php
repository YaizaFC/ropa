<?php
include 'header.php';

?>

<main>
    <div class="galeria">
        <div>
            <div class="contImgHome"><img class="imgHome" src="../img/psj1.jpg"></div>
            <div class="contImgHome"><img class="imgHome" src="../img/psj2.jpg"></div>
            <div class="contImgHome"><img class="imgHome" src="../img/psj3.jpg"></div>
        </div>
        <div>
            <button type="button" onclick="pasar(-1)">Atrás</button>
            <button type="button" onclick="pasar(1)">Siguiente</button>
        </div>

        <div>
            <button class="btnNum" type="button" onclick="ponerIndice(1)">1</button>
            <button class="btnNum" type="button" onclick="ponerIndice(2)">2</button>
            <button class="btnNum" type="button" onclick="ponerIndice(3)">3</button>
        </div>
    </div>
</main>

<?php
include 'footer.php';

?>

<script>
    var indice = 1;

    imgVisible(indice);

    function ponerIndice(n) {
        imgVisible(indice = n);
    }

    function imgVisible(n) {
        var imgs = document.getElementsByTagName("img");
        var nums = document.getElementsByClassName("btnNum");
        console.log(indice);

        if (n > imgs.length) {
            console.log("indice " + indice + " mayor que " + imgs.length);
            indice = 1;
            console.log(indice);
        }

        if (n < 1) {
            indice = imgs.length;
        }

        for (var i = 0; i < imgs.length; i++) {
            imgs[i].style.display = "none";
        }

        for (var i = 0; i < nums.length; i++) {
            nums[i].className = nums[i].className.replace(" rojoFondo", "");
        }

        imgs[indice - 1].style.display = "block";
        nums[indice - 1].className += " rojoFondo";
    }


    function pasar(i) {
        imgVisible(indice += i);
    }
</script>
</body>

</html>