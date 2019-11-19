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
                <!-- start image -->
                <div class="image mb-3">
                    <img class="d-block mx-auto img-fluid" src="images/service.jpg" alt="Service image" />
                </div>
                <!-- end image -->

                <ul class="services_content">
                    <li>Eye exams</li>
                    <li>Contact lenses & fitting</li>
                    <li>Glasses & sunglasses</li>
                    <li>Children's eye exams</li><br>
                    <li>LASIK co-management</li>
                    <li>Emergency eye care </li>
                    <li>Athletic and professional lines</li>
                </ul>

            </div>
            <!-- end main_content -->
        </div>
        <!-- end container -->

        <?php include("includes/footer.php");?>
    </body>
</html>
