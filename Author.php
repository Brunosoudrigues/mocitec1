<?php
echo __DIR__;
require __DIR__ . "/source/Author.php";
$author = new Author(
    "bruno",
    "brunorodrigues@gmail.com",
    "1234",
    "13872",
    "rua general balbao",
    "ifsul"
);

var_dump($author);
