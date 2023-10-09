<?php namespace x\panel\route\__test;

function links($_) {
    $_['title'] = 'Links';
    $lot = [];
    $lot['links-0'] = [
        'description' => 'Links description.',
        'lot' => [
            0 => [
                'stack' => 10,
                'title' => 'Link 1',
                'url' => '/'
            ],
            1 => [
                'description' => 'Description for Link 2.',
                'lot' => [
                    0 => [
                        'stack' => 10,
                        'title' => 'Menu 2.1',
                        'url' => '/'
                    ],
                    1 => [
                        'stack' => 20,
                        'status' => 24, // Test badge
                        'title' => 'Menu 2.2',
                        'url' => '/'
                    ],
                    2 => [
                        'lot' => [
                            0 => [
                                'stack' => 10,
                                'title' => 'Menu 2.3.1',
                                'url' => '/'
                            ],
                            1 => [
                                'lot' => [
                                    0 => [
                                        'stack' => 10,
                                        'title' => 'Menu 2.3.1.1',
                                        'url' => '/'
                                    ],
                                    1 => [
                                        'stack' => 20,
                                        'title' => 'Menu 2.3.1.2',
                                        'url' => '/'
                                    ]
                                ],
                                'stack' => 20,
                                'title' => 'Menu 2.3.2',
                                'url' => '/'
                            ],
                            2 => [
                                'stack' => 30,
                                'title' => 'Menu 2.3.3',
                                'url' => '/'
                            ]
                        ],
                        'stack' => 30,
                        'title' => 'Menu 2.3',
                        'url' => '/'
                    ]
                ],
                'stack' => 20,
                'title' => 'Link 2',
                'url' => '/'
            ],
            3 => [
                'description' => 'Description for Link 3.',
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'stack' => 10,
                                'title' => 'Menu 3.1.1',
                                'url' => '/'
                            ],
                            1 => [
                                'stack' => 20,
                                'title' => 'Menu 3.1.2',
                                'url' => '/'
                            ],
                            2 => [
                                'stack' => 30,
                                'title' => 'Menu 3.1.3',
                                'url' => '/'
                            ]
                        ],
                        'stack' => 10,
                        'title' => 'Menu 3.1',
                        'url' => '/'
                    ],
                    1 => [
                        'stack' => 20,
                        'status' => 24, // Test badge
                        'title' => 'Menu 3.2',
                        'url' => '/'
                    ],
                    2 => [
                        'stack' => 30,
                        'title' => 'Menu 3.3',
                        'url' => '/'
                    ]
                ],
                'stack' => 20,
                'title' => 'Link 3',
                'url' => '/',
                // Enable description and title in sub-menu
                'with' => [
                    'description' => 'Menu description.',
                    'title' => 'Menu Title'
                ]
            ],
            4 => [
                'lot' => [
                    0 => [
                        'stack' => 10,
                        'title' => 'Menu 4.1',
                        'url' => '/'
                    ],
                    1 => [
                        'stack' => 20,
                        'title' => 'Menu 4.2',
                        'url' => '/'
                    ],
                    2 => [
                        'stack' => 30,
                        'title' => 'Menu 4.3',
                        'url' => '/'
                    ],
                ],
                'stack' => 30,
                'title' => 'Link 4',
                'url' => '/',
                'width' => 250
            ],
            '4.5' => [
                'stack' => 30.5,
                'type' => 'separator'
            ],
            5 => [
                'description' => 'Default.',
                'stack' => 40,
                'title' => 'Link 5',
                'url' => '/'
            ],
            6 => [
                'current' => true,
                'description' => 'Current.',
                'stack' => 40.1,
                'title' => 'Link 6',
                'url' => '/'
            ],
            7 => [
                'active' => false,
                'description' => 'Disabled.',
                'stack' => 40.2,
                'title' => 'Link 7',
                'url' => '/'
            ],
            8 => [
                'active' => false,
                'current' => true,
                'description' => 'Current, disabled.',
                'stack' => 40.3,
                'title' => 'Link 8',
                'url' => '/'
            ],
        ],
        'title' => 'Links Title',
        'type' => 'links'
    ];
    $lot['links-1'] = [
        'lot' => ['Foo', 'Bar', 'Baz'],
        'type'=> 'links'
    ];
    $lot['links-2'] = [
        'lot' => [
            0 => [
                'stack' => 10,
                'title' => 'Foo',
                'url' => '/'
            ],
            '1.5' => [
                'stack' => 15,
                'type' => 'separator'
            ],
            1 => [
                'stack' => 20,
                'title' => 'Bar',
                'url' => '/'
            ],
            2 => [
                'lot' => [
                    0 => [
                        'stack' => 10,
                        'title' => 'Baz 1',
                        'url' => '/'
                    ],
                    '1.5' => [
                        'stack' => 15,
                        'type' => 'separator'
                    ],
                    1 => [
                        'stack' => 20,
                        'title' => 'Baz 2',
                        'url' => '/'
                    ],
                    2 => [
                        'stack' => 30,
                        'title' => 'Baz 3',
                        'url' => '/'
                    ]
                ],
                'stack' => 30,
                'title' => 'Baz',
                'url' => '/'
            ]
        ],
        'type'=> 'links'
    ];
    $_['lot']['desk']['lot']['form']['lot'][1]['lot'] = $lot;
    return $_;
}