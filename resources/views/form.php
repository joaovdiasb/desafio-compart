<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?= CONF_SITE_NAME ?> - <?= $form['formName'] ?></title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"/>
        </svg>
        <span class="fs-4"><?= $form['formName'] ?></span>
    </a>
</header>
<body>
<main class="container pb-4">
    <a class="btn btn-sm btn-secondary mb-2" href="/">Voltar</a>
    <div class="form-row">
        <?php
        foreach ($form['sections'] as $section) {
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title">
                    <span class="ml-3"><?= $section['name'] ?></span>
                </h4>
                <div class="row">
                    <?php
                    foreach ($section['inputs'] as $input) {
                        component('Input', [
                            'label'       => $input['label'] ?? null,
                            'type'        => $input['type'] ?? null,
                            'placeholder' => $input['placeholder'] ?? null,
                            'name'        => $input['name'] ?? null,
                            'props'       => $input['props'] ?? null,
                            'class'       => $input['class'] ?? null,
                            'value'       => $input['value'] ?? null,
                            'cols'        => $input['cols'] ?? null,
                            'options'     => $input['options'] ?? null
                        ]);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <button type="submit" class="btn btn-primary"><?= $form['submitButtonText'] ?></button>
</main>
</body>
</html>
