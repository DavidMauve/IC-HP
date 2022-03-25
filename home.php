<?php
include("./header.php");
?>
<h1 class="my-5"><?php echo $page->page_title ?></h1>
            <img src="<?PHP echo($config->urls->templates); ?>images/alberto-restifo.jpg" alt="alberto-restifo" class="main-picture">
            <h2 class="mt-5 mb-3"><?php echo $page->heading_1 ?></h2>
			<?php echo $page->textfield_1 ?>
            <strong class="gold"><?php echo $page->textfield_1_special_style ?></strong>
            <h2 class="mt-5 mb-3"><?php echo $page->heading_2 ?></h2>
            <?php echo $page->textfield_2 ?>
            <strong class="gold"><?php echo $page->textfield_2_special_style?> <a href="https://bethechangeyouwant.ch/program/">Programme</a>.</strong>
            </main>
<?php
include("./footer.php");
?>