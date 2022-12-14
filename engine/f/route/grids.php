<?php namespace x\panel\route\__test;

function grids($_) {
    $style = <<<CSS
.content\:column p,
.content\:row p {
  background: var(--fill-input);
  border: 1px solid;
  border-color: var(--stroke-input);
  color: var(--color-input);
  line-height: 1;
  padding: 1em;
  text-align: center;
}
CSS;
    $_['title'] = 'Rows and Columns';
    $_['asset']['preview'] = [
        'link' => 'data:text/css;base64,' . base64_encode($style),
        'stack' => 10
    ];
    $lot = [];
    $lot['rows-0'] = [
        'lot' => [
            'auto-0' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 10,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 10,
                'type' => 'row'
            ],
            'auto-1' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 20,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 20,
                'type' => 'row'
            ],
            'auto-2' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>auto</p>',
                                'stack' => 30,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 10,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 20,
                'type' => 'row'
            ],
            'auto-3' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>auto</p>',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>auto</p>',
                                'stack' => 40,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 10,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 40,
                'type' => 'row'
            ],
            'auto-4' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>auto</p>',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>auto</p>',
                                'stack' => 40,
                                'type' => 'column'
                            ],
                            4 => [
                                'content' => '<p>auto</p>',
                                'stack' => 50,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 10,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 40,
                'type' => 'row'
            ],
            'auto-5' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>auto</p>',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>auto</p>',
                                'stack' => 40,
                                'type' => 'column'
                            ],
                            4 => [
                                'content' => '<p>auto</p>',
                                'stack' => 50,
                                'type' => 'column'
                            ],
                            5 => [
                                'content' => '<p>auto</p>',
                                'stack' => 60,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 10,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 50,
                'type' => 'row'
            ],
            'auto-6' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>auto</p>',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>auto</p>',
                                'stack' => 40,
                                'type' => 'column'
                            ],
                            4 => [
                                'content' => '<p>auto</p>',
                                'stack' => 50,
                                'type' => 'column'
                            ],
                            5 => [
                                'content' => '<p>auto</p>',
                                'stack' => 60,
                                'type' => 'column'
                            ],
                            6 => [
                                'content' => '<p>auto</p>',
                                'stack' => 70,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 10,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 60,
                'type' => 'row'
            ],
            'auto-7' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>auto</p>',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>auto</p>',
                                'stack' => 40,
                                'type' => 'column'
                            ],
                            4 => [
                                'content' => '<p>auto</p>',
                                'stack' => 50,
                                'type' => 'column'
                            ],
                            5 => [
                                'content' => '<p>auto</p>',
                                'stack' => 60,
                                'type' => 'column'
                            ],
                            6 => [
                                'content' => '<p>auto</p>',
                                'stack' => 70,
                                'type' => 'column'
                            ],
                            7 => [
                                'content' => '<p>auto</p>',
                                'stack' => 70,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 10,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 70,
                'type' => 'row'
            ],
            'auto-8' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>auto</p>',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>auto</p>',
                                'stack' => 40,
                                'type' => 'column'
                            ],
                            4 => [
                                'content' => '<p>auto</p>',
                                'stack' => 50,
                                'type' => 'column'
                            ],
                            5 => [
                                'content' => '<p>auto</p>',
                                'stack' => 60,
                                'type' => 'column'
                            ],
                            6 => [
                                'content' => '<p>auto</p>',
                                'stack' => 70,
                                'type' => 'column'
                            ],
                            7 => [
                                'content' => '<p>auto</p>',
                                'stack' => 70,
                                'type' => 'column'
                            ],
                            8 => [
                                'content' => '<p>auto</p>',
                                'stack' => 80,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 10,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 80,
                'type' => 'row'
            ],
            'auto-9' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>auto</p>',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>auto</p>',
                                'stack' => 40,
                                'type' => 'column'
                            ],
                            4 => [
                                'content' => '<p>auto</p>',
                                'stack' => 50,
                                'type' => 'column'
                            ],
                            5 => [
                                'content' => '<p>auto</p>',
                                'stack' => 60,
                                'type' => 'column'
                            ],
                            6 => [
                                'content' => '<p>auto</p>',
                                'stack' => 70,
                                'type' => 'column'
                            ],
                            7 => [
                                'content' => '<p>auto</p>',
                                'stack' => 70,
                                'type' => 'column'
                            ],
                            8 => [
                                'content' => '<p>auto</p>',
                                'stack' => 80,
                                'type' => 'column'
                            ],
                            9 => [
                                'content' => '<p>auto</p>',
                                'stack' => 90,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 10,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 90,
                'type' => 'row'
            ],
            'auto-10' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>auto</p>',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>auto</p>',
                                'stack' => 40,
                                'type' => 'column'
                            ],
                            4 => [
                                'content' => '<p>auto</p>',
                                'stack' => 50,
                                'type' => 'column'
                            ],
                            5 => [
                                'content' => '<p>auto</p>',
                                'stack' => 60,
                                'type' => 'column'
                            ],
                            6 => [
                                'content' => '<p>auto</p>',
                                'stack' => 70,
                                'type' => 'column'
                            ],
                            7 => [
                                'content' => '<p>auto</p>',
                                'stack' => 70,
                                'type' => 'column'
                            ],
                            8 => [
                                'content' => '<p>auto</p>',
                                'stack' => 80,
                                'type' => 'column'
                            ],
                            9 => [
                                'content' => '<p>auto</p>',
                                'stack' => 90,
                                'type' => 'column'
                            ],
                            10 => [
                                'content' => '<p>auto</p>',
                                'stack' => 100,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 10,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 100,
                'type' => 'row'
            ],
            'auto-11' => [
                'lot' => [
                    0 => [
                        'lot' => [
                            0 => [
                                'content' => '<p>auto</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>auto</p>',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>auto</p>',
                                'stack' => 40,
                                'type' => 'column'
                            ],
                            4 => [
                                'content' => '<p>auto</p>',
                                'stack' => 50,
                                'type' => 'column'
                            ],
                            5 => [
                                'content' => '<p>auto</p>',
                                'stack' => 60,
                                'type' => 'column'
                            ],
                            6 => [
                                'content' => '<p>auto</p>',
                                'stack' => 70,
                                'type' => 'column'
                            ],
                            7 => [
                                'content' => '<p>auto</p>',
                                'stack' => 70,
                                'type' => 'column'
                            ],
                            8 => [
                                'content' => '<p>auto</p>',
                                'stack' => 80,
                                'type' => 'column'
                            ],
                            9 => [
                                'content' => '<p>auto</p>',
                                'stack' => 90,
                                'type' => 'column'
                            ],
                            10 => [
                                'content' => '<p>auto</p>',
                                'stack' => 100,
                                'type' => 'column'
                            ],
                            11 => [
                                'content' => '<p>auto</p>',
                                'stack' => 110,
                                'type' => 'column'
                            ]
                        ],
                        'stack' => 10,
                        'type' => 'columns'
                    ]
                ],
                'stack' => 110,
                'type' => 'row'
            ]
        ],
        'stack' => 10,
        'type' => 'rows'
    ];
    $lot['separator-0'] = [
        'stack' => 10.5,
        'type' => 'separator'
    ];
    $lot['rows-1'] = [
        'lot' => [
            '12/12' => [
                'lot' => [
                    '12/12' => [
                        'lot' => [
                            '12' => [
                                'content' => '<p>12/12</p>',
                                'stack' => 10,
                                'type' => 'column'
                            ]
                        ],
                        'type' => 'columns'
                    ]
                ],
                'type' => 'row'
            ],
            '1/12' => [
                'lot' => [
                    '1/12' => [
                        'type' => 'columns',
                        'lot' => [
                            '1' => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            '11' => [
                                'content' => '<p>11/12</p>',
                                'size' => '11/12',
                                'stack' => 20,
                                'type' => 'column'
                            ]
                        ]
                    ]
                ],
                'type' => 'row'
            ],
            '2/12' => [
                'lot' => [
                    '2/12' => [
                        'lot' => [
                            '2' => [
                                'content' => '<p>2/12</p>',
                                'size' => '2/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            '10' => [
                                'content' => '<p>10/12</p>',
                                'size' => '10/12',
                                'stack' => 20,
                                'type' => 'column'
                            ]
                        ],
                        'type' => 'columns'
                    ]
                ],
                'type' => 'row'
            ],
            '3/12' => [
                'lot' => [
                    '3/12' => [
                        'type' => 'columns',
                        'lot' => [
                            '3' => [
                                'content' => '<p>3/12</p>',
                                'size' => '3/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            '9' => [
                                'content' => '<p>9/12</p>',
                                'size' => '9/12',
                                'stack' => 20,
                                'type' => 'column'
                            ]
                        ]
                    ]
                ],
                'type' => 'row'
            ],
            '4/12' => [
                'lot' => [
                    '4/12' => [
                        'type' => 'columns',
                        'lot' => [
                            '4' => [
                                'content' => '<p>4/12</p>',
                                'size' => '4/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            '8' => [
                                'content' => '<p>8/12</p>',
                                'size' => '8/12',
                                'stack' => 20,
                                'type' => 'column'
                            ]
                        ]
                    ]
                ],
                'type' => 'row'
            ],
            '5/12' => [
                'lot' => [
                    '5/12' => [
                        'type' => 'columns',
                        'lot' => [
                            '5' => [
                                'content' => '<p>5/12</p>',
                                'size' => '5/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            '7' => [
                                'content' => '<p>7/12</p>',
                                'size' => '7/12',
                                'stack' => 20,
                                'type' => 'column'
                            ]
                        ]
                    ]
                ],
                'type' => 'row'
            ],
            '6/12' => [
                'lot' => [
                    '6/12' => [
                        'type' => 'columns',
                        'lot' => [
                            0 => [
                                'content' => '<p>6/12</p>',
                                'size' => '6/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>6/12</p>',
                                'size' => '6/12',
                                'stack' => 20,
                                'type' => 'column'
                            ]
                        ]
                    ]
                ],
                'type' => 'row'
            ],
            '2/~' => [
                'lot' => [
                    '2/~' => [
                        'lot' => [
                            '2' => [
                                'content' => '<p>2/12</p>',
                                'size' => '2/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            '~' => [
                                'content' => '<p>auto</p>',
                                'stack' => 20,
                                'type' => 'column'
                            ]
                        ],
                        'type' => 'columns'
                    ]
                ],
                'type' => 'row'
            ],
        ],
        'stack' => 20,
        'tags' => ['p' => true],
        'type' => 'rows'
    ];
    $lot['separator-1'] = [
        'stack' => 20.5,
        'type' => 'separator'
    ];
    $lot['rows-2'] = [
        'lot' => [
            '1/1/1/1/1/1/1/1/1/1/1/1' => [
                'lot' => [
                    '1/1/1/1/1/1/1/1/1/1/1/1' => [
                        'lot' => [
                            0 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 40,
                                'type' => 'column'
                            ],
                            4 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 50,
                                'type' => 'column'
                            ],
                            5 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 60,
                                'type' => 'column'
                            ],
                            6 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 70,
                                'type' => 'column'
                            ],
                            7 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 80,
                                'type' => 'column'
                            ],
                            8 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 90,
                                'type' => 'column'
                            ],
                            9 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 100,
                                'type' => 'column'
                            ],
                            10 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 110,
                                'type' => 'column'
                            ],
                            11 => [
                                'content' => '<p>1/12</p>',
                                'size' => '1/12',
                                'stack' => 120,
                                'type' => 'column'
                            ]
                        ],
                        'type' => 'columns'
                    ]
                ],
                'type' => 'row'
            ],
            '2/2/2/2/2/2' => [
                'lot' => [
                    '2/2/2/2/2/2' => [
                        'lot' => [
                            0 => [
                                'content' => '<p>2/12</p>',
                                'size' => '2/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>2/12</p>',
                                'size' => '2/12',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>2/12</p>',
                                'size' => '2/12',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>2/12</p>',
                                'size' => '2/12',
                                'stack' => 40,
                                'type' => 'column'
                            ],
                            4 => [
                                'content' => '<p>2/12</p>',
                                'size' => '2/12',
                                'stack' => 50,
                                'type' => 'column'
                            ],
                            5 => [
                                'content' => '<p>2/12</p>',
                                'size' => '2/12',
                                'stack' => 60,
                                'type' => 'column'
                            ]
                        ],
                        'type' => 'columns'
                    ]
                ],
                'type' => 'row'
            ],
            '3/3/3/3' => [
                'lot' => [
                    '3/3/3/3' => [
                        'lot' => [
                            0 => [
                                'content' => '<p>3/12</p>',
                                'size' => '3/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>3/12</p>',
                                'size' => '3/12',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>3/12</p>',
                                'size' => '3/12',
                                'stack' => 30,
                                'type' => 'column'
                            ],
                            3 => [
                                'content' => '<p>3/12</p>',
                                'size' => '3/12',
                                'stack' => 40,
                                'type' => 'column'
                            ]
                        ],
                        'type' => 'columns'
                    ]
                ],
                'type' => 'row'
            ],
            '4/4/4' => [
                'lot' => [
                    '4/4/4' => [
                        'lot' => [
                            0 => [
                                'content' => '<p>4/12</p>',
                                'size' => '4/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>4/12</p>',
                                'size' => '4/12',
                                'stack' => 20,
                                'type' => 'column'
                            ],
                            2 => [
                                'content' => '<p>4/12</p>',
                                'size' => '4/12',
                                'stack' => 30,
                                'type' => 'column'
                            ]
                        ],
                        'type' => 'columns'
                    ]
                ],
                'type' => 'row'
            ],
            '6/6' => [
                'lot' => [
                    '6/6' => [
                        'lot' => [
                            0 => [
                                'content' => '<p>6/12</p>',
                                'size' => '6/12',
                                'stack' => 10,
                                'type' => 'column'
                            ],
                            1 => [
                                'content' => '<p>6/12</p>',
                                'size' => '6/12',
                                'stack' => 20,
                                'type' => 'column'
                            ]
                        ],
                        'type' => 'columns'
                    ]
                ],
                'type' => 'row'
            ]
        ],
        'stack' => 30,
        'tags' => ['p' => true],
        'type' => 'rows'
    ];
    $_['lot']['desk']['width'] = true;
    $_['lot']['desk']['lot']['form']['lot'][1]['lot'] = $lot;
    return $_;
}