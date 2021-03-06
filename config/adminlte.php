<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Cloudelivery',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<i class="fa fa-cloud"></i> <b>Cloud</b>elivery&nbsp;',

    'logo_mini' => '<i class="fa fa-cloud"></i>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'red',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'Recursos',
        [
            'text' => 'Painel',
            'icon'  => 'dashboard',
        ],
        [
            'text' => 'Perfil',
            'icon'  => 'user-circle',
        ],
        [
            'text' => 'Chat',
            'icon'  => 'comments',
        ],
        [
            'text' => 'Mensagens',
            'icon'  => 'envelope',
        ],
        [
            'text' => 'Calendário',
            'icon'  => 'calendar',
        ],
        'Logística',
        [
            'text' => 'Loja',
            'icon'  => 'shopping-cart',
            'submenu' => [
                [
                    'text' => 'Ir para a loja',
                ],
                [
                    'text' => 'Personalizar',
                ],
            ]
        ],
        [
            'text' => 'CRM',
            'icon'  => 'users',
            'submenu' => [
                [
                    'text' => 'Clientes',
                ],
                [
                    'text' => 'Leads',
                ],
            ]
        ],
        [
            'text' => 'SRM',
            'icon'  => 'truck',
            'submenu' => [
                [
                    'text' => 'Fornecedores',
                ],
                [
                    'text' => 'Prestadores de Serviços',
                ],
                [
                    'text' => 'Portal do Fornecedor',
                ],
            ]


        ],
        [
            'text' => 'Financeiro',
            'icon'  => 'dollar',
            'submenu' => [
                [
                    'text' => 'Pagamentos',
                ],
                [
                    'text' => 'Recebimentos',
                ],
                [
                    'text' => 'Compras',
                    'submenu' => [
                        [
                            'text' => 'Cotações',
                        ],
                        [
                            'text' => 'Requisições de Compra',
                        ],
                        [
                            'text' => 'Ordens de Compra',
                        ],
                    ]
                ],
                [
                    'text' => 'Custos e Tributos',
                ],
            ],
        ],
        [
            'text' => 'Produtos',
            'icon'  => 'tags',
        ],
        [
            'text' => 'Estoque',
            'icon'  => 'cubes',
            'submenu' => [
                [
                    'text' => 'Entradas de Itens',
                ],
                [
                    'text' => 'Baixas',
                ],
                [
                    'text' => 'Itens no Estoque',
                ],
                [
                    'text' => 'Produção',
                    'submenu' => [
                        [
                            'text' => 'Ordens de Produção',
                        ],
                        [
                            'text' => 'Composições',
                        ],
                    ]
                ],
            ],
        ],
        [
            'text' => 'Pedidos',
            'icon'  => 'shopping-basket',
        ],
        [
            'text' => 'Entregas',
            'icon'  => 'motorcycle',
            'submenu' => [
                [
                    'text' => 'Ocorrências',
                ],
                [
                    'text' => 'Área de abrangência',
                ],
                [
                    'text' => 'Entregadores',
                ],
                [
                    'text' => 'Rotas',
                ],

            ],
        ],
        'Análise',
        [
            'text' => 'Riscos e Oportunidades',
            'icon'  => 'line-chart',
            'submenu' => [
                [
                    'text' => 'Estratégias',
                    'submenu' => [
                        [
                            'text' => 'Decisões',
                        ],
                        [
                            'text' => 'Vendas',
                        ],
                        [
                            'text' => 'Metas',
                        ],
                    ]
                ],
                [
                    'text' => 'Tendências',
                    'submenu' => [
                        [
                            'text' => 'Em alta',
                        ],
                        [
                            'text' => 'Em baixa',
                        ],
                        [
                            'text' => 'Previsões',
                        ],
                    ]
                ],
                [
                    'text' => 'Benchmarking',
                    'submenu' => [
                        [
                            'text' => 'Concorrentes',
                        ],
                        [
                            'text' => 'Critérios e Indicadores',
                        ],
                        [
                            'text' => 'Monitoria',
                        ],
                    ]
                ],
                [
                    'text' => 'Fraudes',
                ],
            ],
        ],
        [
            'text' => 'Classificações',
            'icon'  => 'list-ol',
        ],
        [
            'text' => 'Relatórios',
            'icon'  => 'bar-chart',
            'submenu' => [
                [
                    'text' => 'Gráficos',
                ],
                [
                    'text' => 'Tabelas',
                ],
            ],
        ],
        [
            'text' => 'Processos de Negócio',
            'icon'  => 'recycle',
            'submenu' => [
                [
                    'text' => 'Processos',
                ],
                [
                    'text' => 'Indicadores',
                ],
                [
                    'text' => 'Metas',
                ],
            ]
        ],
        'Sistema',
        [
            'text' => 'Logs',
            'icon'  => 'terminal',
        ],
        [
            'text' => 'Usuários do sistema',
            'icon'  => 'user',
            'submenu' => [
                [
                    'text' => 'Usuários',
                ],
                [
                    'text' => 'Papéis',
                ],
                [
                    'text' => 'Permissões',
                ],
            ],
        ],
        [
            'text' => 'Armazenamento',
            'icon'  => 'hdd-o',
            'submenu' => [
                [
                    'text' => 'Gerenciador de Arquivos',
                    'submenu' => [
                        [
                            'text' => 'Arquivos',
                        ],
                        [
                            'text' => 'Compartilhados',
                        ],
                    ]
                ],
                [
                    'text' => 'Backup',
                    'submenu' => [
                        [
                            'text' => 'Efetuar Backup',
                        ],
                        [
                            'text' => 'Restaurar de Backup',
                        ],
                    ],
                ],
                [
                    'text' => 'Downloads',
                ],
            ],
        ],
        [
            'text' => 'Ajustes',
            'icon'  => 'cogs',
        ],
        [
            'text' => 'Documentação',
            'icon'  => 'book',
        ],
        [
            'text' => 'Ajuda',
            'icon'  => 'question-circle',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
    ],
];
