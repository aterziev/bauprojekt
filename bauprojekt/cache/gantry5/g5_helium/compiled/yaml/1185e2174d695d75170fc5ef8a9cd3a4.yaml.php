<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\bauprojekt\\bauprojekt\\bauprojekt/templates/g5_helium/blueprints/styles/intro.yaml',
    'modified' => 1611633090,
    'data' => [
        'name' => 'Intro Styles',
        'description' => 'Intro section styles for the Helium theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f4f5f7'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#424753'
                ]
            ]
        ]
    ]
];
