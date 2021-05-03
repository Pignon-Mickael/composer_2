    <?php

    use HelloWorld\SayHello;

    require __DIR__ . '/../vendor/autoload.php';

    $wilder = new SayHello();
    echo $wilder->world();


