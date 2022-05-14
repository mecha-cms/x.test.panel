<?php namespace x\panel\route\__test;

function stacks($_) {
    $_['title'] = 'Stacks';
    $lot = [];
    $lot['stacks-0'] = [
        'lot' => [
            0 => [
                'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
                'stack' => 10,
                'title' => 'Stack 1'
            ],
            1 => [
                'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
                'stack' => 20,
                'title' => 'Stack 2'
            ],
            2 => [
                'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
                'stack' => 30,
                'status' => 'Toggle',
                'title' => 'Stack 3',
                'toggle' => true
            ],
            3 => [
                'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
                'stack' => 40,
                'title' => 'Stack 4'
            ],
            4 => [
                'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
                'link' => 'http://example.com',
                'stack' => 50,
                'title' => 'Stack 5'
            ]
        ],
        'type' => 'stacks'
    ];
    $lot['stacks-1'] = [
        'lot' => [
            0 => [
                'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
                'icon' => 'M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z',
                'stack' => 10,
                'title' => 'Stack 1'
            ],
            1 => [
                'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
                'icon' => 'M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z',
                'stack' => 20,
                'title' => 'Stack 2'
            ],
            2 => [
                'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
                'icon' => 'M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z',
                'stack' => 30,
                'title' => 'Stack 3'
            ],
            3 => [
                'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
                'icon' => 'M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z',
                'stack' => 40,
                'title' => 'Stack 4'
            ]
        ],
        'type' => 'stacks'
    ];
    $lot['rows'] = [
        'lot' => [],
        'tags' => ['p' => true],
        'type' => 'rows'
    ];
    $lot['rows']['lot'][0] = [
        'lot' => [],
        'type' => 'columns'
    ];
    $lot['rows']['lot'][0]['lot'][0] = [
        'lot' => [
            0 => [
                'has' => ['gap' => true],
                'lot' => [
                    0 => [
                        'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
                        'icon' => 'M21 11H3V9H21V11M21 13H3V15H21V13Z',
                        'stack' => 10,
                        'title' => 'Widget 1'
                    ],
                ],
                'type' => 'stacks'
            ]
        ],
        'size' => '4/6',
        'stack' => 10
    ];
    $lot['rows']['lot'][0]['lot'][1] = [
        'lot' => [
            0 => [
                'current' => false, // Close all stack(s)
                'has' => ['gap' => true],
                'lot' => [
                    0 => [
                        'content' => '<p>Content goes here.</p>',
                        'icon' => 'M21 11H3V9H21V11M21 13H3V15H21V13Z',
                        'stack' => 10,
                        'title' => 'Widget 1',
                        'toggle' => true
                    ],
                    1 => [
                        'content' => '<p>Content goes here.</p>',
                        'icon' => 'M21 11H3V9H21V11M21 13H3V15H21V13Z',
                        'stack' => 20,
                        'title' => 'Widget 2',
                        'toggle' => true
                    ],
                    2 => [
                        'content' => '<p>Content goes here.</p>',
                        'icon' => 'M21 11H3V9H21V11M21 13H3V15H21V13Z',
                        'stack' => 30,
                        'title' => 'Widget 3',
                        'toggle' => true
                    ]
                ],
                'type' => 'stacks'
            ]
        ],
        'size' => '2/6',
        'stack' => 20
    ];
    $_['lot']['desk']['lot']['form']['lot'][1]['lot'] = $lot;
    return $_;
}