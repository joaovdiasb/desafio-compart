<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?= CONF_SITE_NAME ?> - Início</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"/>
        </svg>
        <span class="fs-4"><?= CONF_SITE_NAME ?></span>
    </a>
</header>
<body>
<main class="container">
    <div class="alert alert-primary" role="alert">
        <h4 class="alert-heading">Observações</h4>
        Os dados estão sendo enviados via post no formato JSON, basta clicar em <strong>Gerar formulário</strong>
    </div>
    <form method="post" action="/form">
        <?php
        $formStructure = [
            'formName'         => 'Cadastro de funcionário',
            'submitButtonText' => 'Salvar dados',
            'sections'         => [
                [
                    'name'   => 'Dados pessoais',
                    'inputs' => [
                        [
                            'cols'        => 'col-lg-6 col-12',
                            'label'       => 'Nome',
                            'type'        => 'text',
                            'placeholder' => 'Digite seu nome',
                            'name'        => 'name',
                            'props'       => 'required',
                        ],
                        [
                            'cols'        => 'col-lg-6 col-12',
                            'label'       => 'Email',
                            'type'        => 'email',
                            'placeholder' => 'Digite seu email',
                            'name'        => 'email',
                            'props'       => 'required',
                        ],
                        [
                            'cols'        => 'col-lg-4 col-6',
                            'label'       => 'Idade',
                            'type'        => 'number',
                            'placeholder' => 'Digite sua idade',
                            'name'        => 'age',
                            'props'       => 'required min="18" max="100"',
                        ],
                        [
                            'cols'  => 'col-12',
                            'label' => 'Experiência profissional',
                            'type'  => 'textarea',
                            'name'  => 'description',
                            'props' => 'required rows="4"',
                        ],
                    ],
                ],
                [
                    'name'   => 'Endereço',
                    'inputs' => [
                        [
                            'cols'        => 'col-6',
                            'label'       => 'CEP',
                            'type'        => 'text',
                            'placeholder' => 'Digite seu CEP',
                            'name'        => 'zipcode',
                            'props'       => 'required',
                        ],
                        [
                            'cols'        => 'col-6',
                            'label'       => 'Cidade',
                            'type'        => 'text',
                            'placeholder' => 'Digite sua cidade',
                            'name'        => 'city',
                            'props'       => 'required',
                        ],
                        [
                            'cols'        => 'col-lg-12 col-12',
                            'label'       => 'Rua/Avenida',
                            'type'        => 'text',
                            'placeholder' => 'Digite sua rua/avenida',
                            'name'        => 'district',
                            'props'       => 'required',
                        ],
                        [
                            'cols'        => 'col-6',
                            'label'       => 'Estado',
                            'type'        => 'select',
                            'placeholder' => 'Selecione seu estado',
                            'name'        => 'state',
                            'props'       => 'required',
                            'value'       => '',
                            'options'     => [
                                ''   => 'Selecione',
                                'AC' => 'Acre',
                                'AL' => 'Alagoas',
                                'AP' => 'Amapá',
                                'AM' => 'Amazonas',
                                'BA' => 'Bahia',
                                'CE' => 'Ceará',
                                'DF' => 'Distrito Federal',
                                'ES' => 'Espírito Santo',
                                'GO' => 'Goiás',
                                'MA' => 'Maranhão',
                                'MT' => 'Mato Grosso',
                                'MS' => 'Mato Grosso do Sul',
                                'MG' => 'Minas Gerais',
                                'PA' => 'Pará',
                                'PB' => 'Paraíba',
                                'PR' => 'Paraná',
                                'PE' => 'Pernambuco',
                                'PI' => 'Piauí',
                                'RJ' => 'Rio de Janeiro',
                                'RN' => 'Rio Grande do Norte',
                                'RS' => 'Rio Grande do Sul',
                                'RO' => 'Rondônia',
                                'RR' => 'Roraima',
                                'SC' => 'Santa Catarina',
                                'SP' => 'São Paulo',
                                'SE' => 'Sergipe',
                                'TO' => 'Tocantins',
                            ],
                        ],
                        [
                            'cols'        => 'col-6',
                            'label'       => 'Bairro',
                            'type'        => 'text',
                            'placeholder' => 'Digite seu bairro',
                            'name'        => 'district',
                            'props'       => 'required',
                        ],
                        [
                            'cols'        => 'col-lg-4 col-6',
                            'label'       => 'Número',
                            'type'        => 'text',
                            'placeholder' => 'Digite o número',
                            'name'        => 'number',
                            'props'       => 'required',
                        ],
                        [
                            'cols'        => 'col-lg-8 col-6',
                            'label'       => 'Complemento',
                            'type'        => 'text',
                            'placeholder' => 'Digite o complemento',
                            'name'        => 'complement',
                        ],
                    ],
                ],
            ],
        ];
        ?>
        <input type="hidden" name="form" value='<?= json_encode($formStructure, true) ?>'>
        <button type="submit" class="btn btn-sm btn-primary">Gerar formulário</button>
    </form>
</main>
</body>
</html>
