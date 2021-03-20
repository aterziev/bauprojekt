<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\bauprojekt\\bauprojekt\\bauprojekt/templates/g5_helium/blueprints/styles/base.yaml',
    'modified' => 1611633090,
    'data' => [
        'name' => 'Base Styles',
        'description' => 'Base styles for the Helium theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Color',
                    'default' => '#424753'
                ]
            ]
        ]
    ]
];
