<?php 

	class Dashboard{

		public function main()
		{

			// Verificar si el usuario está logueado y si tiene un rol admin (1 o 2)
			if (!isset($_SESSION['user']) || ($_SESSION['user']['user_charge'] != 1 && $_SESSION['user']['user_charge'] != 2)) {
				header("Location: index.php?c=Auth&a=login");
				exit;
			}

			require_once "views/charges/admin/modules/1_header.php";
			require_once "views/charges/admin/modules/2_nav_lat.php";
			require_once "views/charges/admin/modules/3_nav_sup.php";
			require_once "views/charges/admin/modules/4_content.php";
			require_once "views/charges/admin/modules/5_footer.php";
		}

	}

?>