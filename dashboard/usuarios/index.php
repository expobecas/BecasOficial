<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Usuarios");
require_once("../../app/controllers/dashboard/usuarios/index_controller.php");
Page::templateFooter();
?>