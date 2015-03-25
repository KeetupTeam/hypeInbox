<?php

namespace hypeJunction\Inbox;

$entity = elgg_extract('entity', $vars);

echo '<div class="col-sm-1">';
echo elgg_view('input/checkbox', array(
	'name' => 'guids[]',
	'default' => false,
	'value' => $entity->guid,
));
echo '</div>';