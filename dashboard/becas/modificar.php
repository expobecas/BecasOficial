<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Becas");
require_once("../../app/controllers/dashboard/becas/modificar_controller.php");
Page::templateFooter();
?>