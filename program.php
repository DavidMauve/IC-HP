<?php
include("./header.php");
?>
<main>
    <a href="https://www.amazon.fr/Fontaine-Bonheur-trouvait-source-nous/dp/2310048666/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=1645522882&sr=8-1" target="_blank">
        <img src="<?PHP echo ($config->urls->templates); ?>/images/book.png" alt="Design" class="book mb-5">
        <!--Loading is to SLOW-->
    </a>
    <h1 class="my-5"><?php echo $page->page_title ?>
    </h1>
    <div class="row featurette mt-program">
        <hr class="featurette-divider">
        <div>
            <h2 class="featurette-heading"><?php echo $page->heading_1 ?></h2>
            <figure class="figure-top">
                <img src="<?PHP echo ($config->urls->templates); ?>/images/au_coeur_.jpg" alt="au_coeur" class="figure-picture">
                <figcaption class="text-red figure-caption">
                    Au Cœur de notre Bien-Être<br>Notre bulle l’oxygène
                </figcaption>
            </figure>
            <!-- <img src="<?PHP echo ($config->urls->templates); ?>/images/au_coeur_.jpg" alt="au_coeur" class="program-picture-top"> <br> -->
            <p class="text"><?php echo $page->textfield_1 ?>
            <!-- <p class="program-text-top text-red mt-3">Au Cœur de notre Bien-Être<br>Notre bulle l’oxygène</p> -->

        </div>

    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div>
            <h2 class="featurette-heading"><?php echo $page->heading_2 ?></h2>
            <figure class="figure-mid">
                <img src="<?PHP echo ($config->urls->templates); ?>/images/au_sommet1.jpg" alt="au_coeur" class="figure-picture">
                <figcaption class="text-red figure-caption">
                Au Sommet de notre Potentiel<br>Sortir du lot
                </figcaption>
            </figure>
            <?php echo $page->textfield_2 ?>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div>
            <h2 class="featurette-heading"><?php echo $page->heading_3 ?></h2>
            <figure class="figure-bottom">
                <img src="<?PHP echo ($config->urls->templates); ?>/images/pour_transmettre0.jpg" alt="au_coeur" class="figure-picture">
                <figcaption class="text-red figure-caption">
                Pour Transmettre l'étincelle<br>Faire toute la clarté
                </figcaption>
            </figure>
            <?php echo $page->textfield_3 ?>
        </div>
    </div>
</main>
<?php
include("./footer.php");
?>