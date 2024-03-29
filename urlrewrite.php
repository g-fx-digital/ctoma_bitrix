<?php
$arUrlRewrite = array(
    1 =>
        array(
            'CONDITION' => '#^/clinics/#',
            'RULE' => '',
            'ID' => 'bitrix:catalog',
            'PATH' => '/clinics/index.php',
            'SORT' => 100,
        ),
    2 =>
        array(
            'CONDITION' => '#^/stomatology/#',
            'RULE' => '',
            'ID' => 'bitrix:catalog',
            'PATH' => '/stomatology/index.php',
            'SORT' => 100,
        ),
    3 =>
        array(
            'CONDITION' => '#^/reviews/#',
            'RULE' => '',
            'ID' => 'bitrix:catalog',
            'PATH' => '/reviews/index.php',
            'SORT' => 100,
        ),
    4 =>
        array(
            'CONDITION' => '#^/#',
            'RULE' => '',
            'ID' => NULL,
            'PATH' => '/pages/index.php',
            'SORT' => 100,
        ),
);
