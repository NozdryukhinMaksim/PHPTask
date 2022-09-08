<?php 
//Вызов первой ветки категорий - родительских категорий
echo renderTemplate('assets/menu_part.php', ['cats' => $cats], 0); ?>
