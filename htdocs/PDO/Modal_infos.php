<?php


// retrieves products info for MODAL part

$getModalInfosStatement= $db->prepare("SELECT
`category_id`,
`products`.`name`,
`l_description`,
`s_description`,
`logo`,
`video`,
`categories`.`name` AS `category_name`,
`created_at`,
COUNT(`votes`.`product_id`) AS `vote_count`

FROM
`products`
LEFT JOIN `votes`
ON `products`.`id` = `votes`.`product_id`
LEFT JOIN `categories`
ON `products`.`category_id`= `categories`.`id`

WHERE `products`.`id`= ?");

$getModalInfosStatement->execute([$products[$i]["id"]]);

$modalProductInfo = $getModalInfosStatement->fetch(); ?>
