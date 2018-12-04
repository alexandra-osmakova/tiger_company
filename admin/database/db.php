<?php
require("rb.php");

R::setup('mysql:host=localhost;dbname=tiger_page_db',
    'root', '1234');
R::setAutoResolve( TRUE ); //optional