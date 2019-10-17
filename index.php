<?php require 'index-controller.php' ?>
<!doctype html>
<html lang='en'>

<head>
    <title>zipfoods</title>
    <meta charset='utf-8'>

    <link href='/css/app.css' rel='stylesheet'>

    <script src='/js/app.js' defer></script>
</head>

<body>

    <header>
        <h1>zipfoods</h1>
    </header>

    <section id='main'>
        <ul id='products'>
            <?php foreach ($products as $id => $product): ?>

            <li class='product'>
                <h2><?=$product->name ?>
                </h2>

                <div class='productPrice'>$<?=$product->price ?>
                </div>

                <img class='productImage' src='images/<?=$id?>.jpg'
                     alt='Product image for <?=$product->name ?>'>

                <p><?=$product->description ?>
                </p>

                <button>Add to cart</button>
            </li>
            <?php endforeach ?>
        </ul>
    </section>

</body>

</html>