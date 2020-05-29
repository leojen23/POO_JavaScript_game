<?php

// retrieves products info and vote count ordered by DEScending vote count

    $getProductsStatement = $db->query("SELECT
    `products`.`id`,
    `products`.`name`,
    `l_description`,
    `s_description`AS `description`,
    `logo`,
    `video`,
    `category_id`,
    `categories`.`name` AS `category_name`,
    `created_at`,
    COUNT(`votes`.`product_id`) AS `vote_count`

    FROM
    `products`
    LEFT JOIN `votes`
    ON `products`.`id` = `votes`.`product_id`
    LEFT JOIN `categories`
    ON `products`.`category_id`= `categories`.`id`
    GROUP BY `products`.`id`
    ORDER BY `vote_count` DESC");

    $products = $getProductsStatement->fetchAll(); 


    // retrieves products info and vote count ordered by DESC dates

    $getNewProductsStatement = $db->query("SELECT
    `products`.`id`,
    `products`.`name`,
    `l_description`,
    `s_description`AS `description`,
    `logo`,
    `video`,
    `category_id`,
    `categories`.`name` AS `category_name`,
    `created_at`,
    COUNT(`votes`.`product_id`) AS `vote_count`

    FROM
    `products`
    LEFT JOIN `votes`
    ON `products`.`id` = `votes`.`product_id`
    LEFT JOIN `categories`
    ON `products`.`category_id`= `categories`.`id`
    GROUP BY `products`.`id`
    ORDER BY `created_at` DESC");

    $newProducts = $getNewProductsStatement->fetchAll(); 


    

