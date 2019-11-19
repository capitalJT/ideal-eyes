<?php
	switch ($_SERVER["SCRIPT_NAME"]) {

		case "/services.php":
			$CURRENT_PAGE = "Services";
			$PAGE_TITLE = "Services";
			$PAGE_CLASS = "page-services";
			break;
		case "/doctor.php":
			$CURRENT_PAGE = "Doctor";
			$PAGE_TITLE = "Doctor";
			$PAGE_CLASS = "page-doctor";
			break;
		case "/staff.php":
			$CURRENT_PAGE = "Staff";
			$PAGE_TITLE = "Staff";
			$PAGE_CLASS = "page-staff";
			break;
		case "/eyewear.php":
			$CURRENT_PAGE = "Eyewear";
			$PAGE_TITLE = "Eyewear";
			$PAGE_CLASS = "page-eyewear";
			break;
		case "/location.php":
			$CURRENT_PAGE = "Location";
			$PAGE_TITLE = "Location";
			$PAGE_CLASS = "page-location";
			break;
		case "/parking.php":
			$CURRENT_PAGE = "Parking";
			$PAGE_TITLE = "Parking";
			$PAGE_CLASS = "page-parking";
			break;
		case "/contact.php":
			$CURRENT_PAGE = "Contact and Hours";
			$PAGE_TITLE = "Contact & Hours";
			$PAGE_CLASS = "page-contact-hours";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
			$PAGE_CLASS = "page-home";
	}
?>