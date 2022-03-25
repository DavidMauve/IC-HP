<!DOCTYPE html>
<html lang="fr">
<?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'active';
}

?>
<head>
    <title><?php echo ($page->title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?PHP echo ($config->urls->templates); ?>styles.css" rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Notre demarche est explorative.
On essaie de VOIR la réalité avant que nos croyances ne l’aient déformée et avant que nos peurs n’aient jetté une ombre sur nos perspectives.
Au-delà du prisme de nos concepts et des théories, on VOIT la réalité telle qu’elle est, en toute limpidité.">
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?PHP echo ($config->urls->templates); ?>images/favicon.ico">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4HKN04G3F7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4HKN04G3F7');
    </script>
</head>

<body>
    <div class="container">
        <header class="sticky-top shadow">
            <!-- Navbar -->
            <!-- language Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <!--<a href="../../EasyRead/home_easyread.php" class="nav-link">easy read</a>-->
                            <a href="index.php" class="nav-link">FR</a>
                            <!--<a href="#" class="nav-link">EN</a> -->
                        </div>
                    </div>
            </nav>
            <!-- content Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="navbar-brand">Be The Change You Want</div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link nav-link-menu <?php echoActiveClassIfRequestMatches("") ?>" href="https://bethechangeyouwant.ch/index.php">Accueil</a>
                            <a class="nav-link nav-link-menu <?php echoActiveClassIfRequestMatches("program") ?>" href="https://bethechangeyouwant.ch/program/">Programme</a>
                            <a class="nav-link nav-link-menu <?php echoActiveClassIfRequestMatches("cursus") ?>" href="https://bethechangeyouwant.ch/cursus">Cursus</a>
                            <a class="nav-link nav-link-menu <?php echoActiveClassIfRequestMatches("contact") ?>" href="https://bethechangeyouwant.ch/contact">Contact</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
        </header>
        <main>

            <hr> <!-- Outside header to accomodate sticky-top atribute -->