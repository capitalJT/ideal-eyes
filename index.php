<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
    <head>
	    <?php include("includes/head-tag-contents.php");?>
    </head>

    <body class="<?php echo $PAGE_CLASS; ?>">
        <!-- start container -->
        <div id="container">

	        <?php include("includes/header.php");?>
	        <?php include("includes/navigation.php");?>

            <!-- start main_content -->
            <div class="main_content">
                <!-- begin announcements -->
                <section class="announcements"></section>
                <!-- end announcements -->

                <!-- start home_image -->
                <div class="image mb-4">
                    <img class="d-block mx-auto img-fluid" src="images/home.jpg" alt="Homepage image" />
                </div>
                <!-- end home_image -->
            </div>
            <!-- end main_content -->

        </div>
        <!-- end container -->

        <?php include("includes/footer.php"); ?>
    </body>
</html>