<?php namespace x\panel\route\__test;

function sortable($_) {
    $_['title'] = 'Sortable';
    $lot = [];
    $lot['fields'] = [
        'can' => ['sort' => true],
        'lot' => [
            'title' => [
                'stack' => 10,
                'type' => 'title',
                'width' => true
            ],
            'description' => [
                'stack' => 20,
                'type' => 'description',
                'width' => true
            ],
            'content' => [
                'height' => true,
                'stack' => 30,
                'type' => 'source',
                'width' => true
            ],
            'items' => [
                'can' => ['sort' => true],
                'lot' => ['Item 1', 'Item 2', 'Item 3', [
                    'active' => false,
                    'title' => 'Item 4'
                ]],
                'stack' => 40,
                'type' => 'items'
            ],
            'items-block' => [
                'can' => ['sort' => true],
                'flex' => false,
                'lot' => ['Item 1', 'Item 2', 'Item 3', [
                    'active' => false,
                    'title' => 'Item 4'
                ]],
                'stack' => 41,
                'title' => 'Items',
                'type' => 'items'
            ]
        ],
        'type' => 'fields'
    ];
    $_['lot']['desk']['lot']['form']['lot'][1]['lot'] = $lot;
    return $_;
}