<?php namespace x\panel\route\__test;

function dialog($_) {
    $_['title'] = 'Dialog';
    $lot = [];
    $lot['tasks'] = [
        'lot' => [
            0 => [
                '2' => ['onclick' => "return _.dialog('" . strtr('<p>This is a sample dialog content with custom <abbr title="Hyper Text Markup Language">HTML</abbr> markup. You can insert anything here, for example, you can insert a container to load <abbr title="Hyper Text Markup Language">HTML</abbr> response from <abbr title="Asynchronous JavaScript And XML">AJAX</abbr>, etc.</p><p>Press <kbd>Escape</kbd> to cancel the dialog.</p>', [
                    "'" => '\\x27',
                    '"' => '\\x22',
                    '&' => '\\x26',
                    '<' => '\\x3c',
                    '>' => '\\x3e'
                ]) . "').then(v => document.querySelector('output').value = v).catch(v => document.querySelector('output').value = v), false;"],
                'name' => false,
                'stack' => 10,
                'title' => 'Dialog (base)',
                'type' => 'button'
            ],
            1 => [
                '2' => ['onclick' => "return _.dialog.alert('Hey!').then(v => document.querySelector('output').value = v).catch(v => document.querySelector('output').value = v), false;"],
                'name' => false,
                'stack' => 20,
                'title' => 'Alert',
                'type' => 'button'
            ],
            2 => [
                '2' => ['onclick' => "return _.dialog.confirm('Are you sure?').then(v => document.querySelector('output').value = v).catch(v => document.querySelector('output').value = v), false;"],
                'name' => false,
                'stack' => 30,
                'title' => 'Confirm',
                'type' => 'button'
            ],
            3 => [
                '2' => ['onclick' => "return _.dialog.prompt('URL:', 'http://').then(v => document.querySelector('output').value = v).catch(v => document.querySelector('output').value = v), false;"],
                'name' => false,
                'stack' => 40,
                'title' => 'Prompt',
                'type' => 'button'
            ]
        ],
        'stack' => 10,
        'type' => 'tasks'
    ];
    $lot['values'] = [
        'content' => '<pre><code class="js"><output></output></code></pre>',
        'stack' => 20,
        'type' => 'content'
    ];
    $_['lot']['desk']['lot']['form']['lot'][1]['lot'] = $lot;
    return $_;
}