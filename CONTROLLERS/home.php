<?php

$config = require basePath('config/db.php');

$db = new Database($config);

$listings = $db->Query('SELECT * FROM listings Limit 6') ->fetchAll();

inspect($listings);
