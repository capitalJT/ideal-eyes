<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("includes/head-tag-contents.php");?>
    </head>

    <body>
        <!-- start container -->
        <div id="container">
            <?php include("includes/header.php");?>
            <?php include("includes/navigation.php");?>
        </div>

        <div class="container pt-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="image mb-3">
                        <img class="d-block mx-auto" src="images/dog.jpg" alt="office dog">
                    </div>
                </div>

                <div class="col-12 col-md-5">
                    <h3>Business Hours</h3>
                    <ul>
                        <li>Sunday: closed</li>
                        <li>Monday: closed</li>
                        <li>Tuesday: 10 am - 6 pm</li>
                        <li>Wednesday: 10 am - 6 pm</li>
                        <li>Thursday: 11 am - 8 pm</li>
                        <li>Friday: 10 am- 6 pm</li>
                        <li>Saturday: 10 am - 6 pm</li>
                    </ul>
                </div>

                <div class="col-12 col-md-5">
                    <h3>Contact Info</h3>
                    <ul>
                        <li>phone: <a href="tel:650-347-2200">650-347-2200</a></li>
                        <li>fax: 650-347-2210</li>
                        <li>address: <a href="https://goo.gl/maps/EJ8wRSkKamnimZNo9" target="_blank">1403 Burlingame Ave, Burlingame, CA 94010</a></li>
                        <li>email: <a href="mailto:idealeyesoptometry@gmail.com?Subject=Hello%20there">idealeyesoptometry@gmail.com</a></li>
                    </ul>
                    <p>We are available 7 days a week via email appointment requests and insurance questions.</p>
                </div>
            </div>
        </div>
        <!-- end container -->
        <?php include("includes/footer.php");?>
    </body>
</html>