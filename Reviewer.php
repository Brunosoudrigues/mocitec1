<?php
echo __DIR__;
require __DIR__ . "/source/Reviewer.php";
$reviewer = new Reviewer(
    "814214525",
    "rua 1 ",
    "www.link.com.br",
    "bruno rodrigues",
    "brunorodrigues@gmail.com",
    "1234"
);

var_dump($reviewer);
