<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt">

	<?php include "head.php" ?>

	<body>

		<?php

		include "php_functions_lib.php";
		include "defines.php"; 
		include "test_login.php";

		include "nav_bar.php";

		switch ($_SERVER['REQUEST_URI']){

			case (INDEX_URI . "/index.php"):
			case (INDEX_URI . "/"):
				include "home_page.php";
				break;

			case (INDEX_URI . "/?contact"):
				include "contact.php";
				break;

			case (INDEX_URI . "/?register"):
				include "register.php";
				break;

			case (INDEX_URI . "/?about_us"):
				include "about_us.php";
				break;

			case (INDEX_URI . "/?haskell_post1"):
				include "posts/haskell/post1/post1.php";
				break;

			case (INDEX_URI . "/?haskell_post2"):
				include "posts/haskell/post2/post2.php";
				break;

			case (INDEX_URI . "/?linux_post1"):
				include "posts/linux/post1.php";
				break;

			case (INDEX_URI . "/?linux_post2"):
				include "posts/linux/post2.php";
				break;

			case (INDEX_URI . "/?admin"):
				include "editorPage.php";
				break;

			case (INDEX_URI . "/?editor"):
				include "editorPage.php";
				break;

			case (INDEX_URI . "/?linuxContent"):
				include "linuxContent.php";
				break;

			case (INDEX_URI . "/?haskellContent"):
				include "haskellContent.php";
				break;

			case (INDEX_URI . "/?logout"):
				include "logout.php";
				break;

			case (INDEX_URI . "/?login"):
				include "login.php";
				break;
		}
		
		
		?>

	</body>

	<?php include "footer.php"; ?>

</html>