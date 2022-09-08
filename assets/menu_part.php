<?php
//Шаблон для вывода категорий
foreach ($cats as $cat) :
?>
	<li class="liclass"><a href="products.php?p_id=<?php echo $cat['id']; ?>"><?php echo $cat['title']; ?></a>
		<?php if (count($cat['children']) > 0) { ?>
			<button class="btn btn-primary btnsmall" id="a<?php echo $cat['id']; ?>" onclick="deleteButtonClickHandler(event)">+</button>
	</li>
	<?php echo renderTemplate('assets/menu_part.php', ['cats' => $cat['children']], ['id' => $cat['id']]); ?>
<?php  } else { ?>
	</li> <?php } ?>
<?php endforeach; ?>