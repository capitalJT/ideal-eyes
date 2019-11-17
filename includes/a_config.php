<?php
	switch ($_SERVER["SCRIPT_NAME"]) {

		case "/services.php":
			$CURRENT_PAGE = "Services";
			$PAGE_TITLE = "Services";
			break;
		case "/doctor.php":
			$CURRENT_PAGE = "Doctor";
			$PAGE_TITLE = "Doctor";
			break;
		case "/staff.php":
			$CURRENT_PAGE = "Staff";
			$PAGE_TITLE = "Staff";
			break;
		case "/eyewear.php":
			$CURRENT_PAGE = "Eyewear";
			$PAGE_TITLE = "Eyewear";
			break;
		case "/location.php":
			$CURRENT_PAGE = "Location";
			$PAGE_TITLE = "Location";
			break;
		case "/parking.php":
			$CURRENT_PAGE = "Parking";
			$PAGE_TITLE = "Parking";
			break;
		case "/contact.php":
			$CURRENT_PAGE = "Contact and Hours";
			$PAGE_TITLE = "Contact & Hours";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
	}
?>