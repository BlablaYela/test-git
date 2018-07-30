<?php


session_start();



require_once __DIR__ . '/models/m_products.php';

$productsOnSale = productsFetchAll('on_sale = 1', 'price DESC');

require_once __DIR__ . '/views/layout/header.php';
require_once __DIR__ . '/views/templates/t_index.php';

require_once __DIR__ . '/views/layout/footer.php';
