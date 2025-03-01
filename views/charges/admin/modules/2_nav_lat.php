<?php
// Inicia la sesión si aún no está iniciada
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Verifica que exista la información del usuario en la sesión
if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
    header("Location: index.php?c=Auth&a=login");
    exit;
}

// Verifica que el rol sea 1 o 2 (Admin/Super Admin)
$userRole = (int) $_SESSION['user']['user_charge'];
if ($userRole !== 1 && $userRole !== 2) {
    header("Location: index.php?c=Auth&a=login");
    exit;
}

// Si pasa las validaciones, asigna los datos del usuario a variables para usarlos
$userName  = trim($_SESSION['user']['user_name'] . " " . $_SESSION['user']['user_last_name']);
$userImage = !empty($_SESSION['user']['user_image'])
    ? "assets/images/profile/" . htmlspecialchars($_SESSION['user']['user_image'])
    : "assets/dep/dashboard/img/default.jpg";

// Mapeo del rol (ya que aquí solo se espera 1 o 2, se puede simplificar)
$userRoleText = ($userRole === 1) ? "Super-Admin" : "Admin";
?>

<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>EmbajadaBike</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="<?php echo $userImage; ?>" alt="<?php echo htmlspecialchars($userName); ?>" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"><?php echo htmlspecialchars($userName); ?></h6>
                    <span><?php echo htmlspecialchars($userRoleText); ?></span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="?c=Dashboard&a=main" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <!-- Otras opciones del menú -->
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->
