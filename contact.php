<?php include 'header.php' ?>
<main>
    <h1 class="my-5 center">Contactez-nous</h1>
    <p class="text mx-5 contact-subtext">Si vous êtes ouvert(e) à la possibilité que tout puisse être plus simple
        que ce que vous pensez et intéressé(e) à prendre place dans cette exploration, je vous offre 30 minutes
        d'échange pour répondre à toutes vos questions.
        <!--Chanel: write larger but not bolder: ex. in h3-->
    </p>
    <div class="row">
        <!-- Kontakt Informationen-->
        <div class="col-6">
            <h1>Contact</h1>
            <p>
                <a href="https://www.isabelle-caratti.ch/">Isabelle Caratti<br></a>
                Be The Change You Want<br>
                Coaching School<br>
                Berne, Suisse <br>
            </p>
        </div>
        <!-- Kontakt Formular-->
        <div class="col-6">
            <form class="row g-3 needs-validation" method="post" action="https://formspree.io/f/xknyzzop" >
                <input type="hidden" name="_language" value="fr" />
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="prename" id="validationCustom01" placeholder="Prénom" required>
                    <div class="valid-feedback">
                        Sieht gut aus!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="name" id="validationCustom02" placeholder="Nom" required>
                    <div class="valid-feedback">
                        Sieht gut aus!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Courriel</label>
                    <input type="email" class="form-control" name="email" id="validationCustom03" placeholder="youremail@email.com" required>
                    <div class="valid-feedback">
                        Ok
                        <!--Sieht gut aus!-->
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Sujet</label>
                    <input type="text" class="form-control" name="subject" id="validationCustom04" placeholder="Sujet" required>
                    <div class="valid-feedback">
                        Ok
                        <!--Sieht gut aus!-->
                    </div>
                    <div class="invalid-feedback">
                        Veuillez indiquer votre Sujet
                        <!--Original: Bitte geben Sie einen Betreff ein-->
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTextarea" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="validationTextarea" placeholder="your text here" required></textarea>
                        Veuillez préciser votre Message
                        <!--Bitte geben Sie Ihre Nachricht in die Textbox ein-->
                </div>
                <!-- <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Veuillez cliquer ici si vous n'êtes pas un robot! -->
                            <!--Akzeptieren Sie die Bedingungen und Konditionen.-->
                            <!--später mit AGB hier-->
                        <!--</label>
                        <div class="invalid-feedback">
                            Veuillez prouver que vous n'êtes pas un robot en cliquant ci-dessus! -->
                            <!--Sie müssen vor dem Senden zustimmen.-->
                        <!-- </div>
                    </div>
                </div> -->
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" value="submit">Envoyer</button>
                    <!--Senden-->
                </div>
            </form>
        </div>
    </div>
</main>
<?php
include("./footer.php");
?>