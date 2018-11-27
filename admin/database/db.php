<?php
require("rb.php");

R::setup('mysql:host=localhost;dbname=tiger_page_db',
    'root', '');
R::setAutoResolve( TRUE ); //optional