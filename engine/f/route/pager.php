<?php namespace x\panel\route\__test;

function pager($_) {
    $_['title'] = 'Pager';
    $lot = [];
    $lot['pager-0'] = [
        'chunk' => 10,
        'count' => 1000,
        'current' => ($_['part'] ?? 0) ?: 1,
        'stack' => 10,
        'type' => 'pager'
    ];
    $lot['pager-2'] = [
        'chunk' => 10,
        'count' => 1000,
        'current' => $current = $_GET['page'] ?? 1,
        'route' => '?page=%d',
        'stack' => 20,
        'type' => 'pager'
    ];
    $_['lot']['desk']['lot']['form']['lot'][1]['lot'] = $lot;
    return $_;
}