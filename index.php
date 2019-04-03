<?php
$pagina = isset($_GET['page']) ? $_GET['page'] : "Index";

require_once 'Includes/Header.php';

require_once 'Includes/Nav.php';

require_once 'Pages/' . $pagina . '.php';

require_once 'Includes/Footer.php';

