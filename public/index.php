<?php

ob_start();

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../routes/web.php';

ob_end_flush();
