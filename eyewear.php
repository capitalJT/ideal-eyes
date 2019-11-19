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

                <!-- start home_image -->
                <div class="image mb-3">
                    <img class="d-block mx-auto" src="images/eyewear_03.jpg" alt="Eyewear Image">
                </div>
                <!-- end home_image -->

                <div class="text-center">
                    <h3 class="mb-3">All of our frames are hand selected to provide our patients with a wide variety of styles and price points.</h3>
                    <p class="mb-0 font-weight-bold">Some of the designers we carry:</p>
                    <ul class="list-unstyled">
                        <li>Bottega Veneta</li>
                        <li>Celine</li>
                        <li>Dita</li>
                        <li>Fendi</li>
                        <li>Hugo Boss</li>
                        <li>Kate Spade</li>
                        <li>Oliver Peoples</li>
                        <li>Prada</li>
                        <li>Ray Ban</li>
                        <li>Saint Laurent</li>
                        <li>Silhouette</li>
                        <li>Thierry Lasry</li>
                        <li>Zero G</li>
                    </ul>

                    <img src="images/Instagram_Icon_Small.jpg" alt="Instagram Logo">
                    <p class="title">Check out our Instagram page <a href="https://www.instagram.com/idealeyesoptometry/" target="_blank">@idealeyesoptometry</a></br>for the latest styles and new arrivals</p>

                </div>
            </div>
            <!-- end main_content -->
        </div>
        <!-- end container -->

        <?php include("includes/footer.php");?>
    </body>
</html>
