<?php
require('incl/head.php');
require('incl/validate.php');
?>

    <title>PordWress CMS</title>
</head>
<body>

    <?php
        require('incl/top-bar.php');
    ?>

    <div class="all">

        <?php
            require('incl/aside.php');
        ?>

        <div class="content">
            <section id="main-content">
                <h1>Witaj na PordWress!</h1>
                <h2>Moje strony...</h2>
                <ul id='pages-list-main'class="screen scr-light">
                    <?php foreach($data0 as $element): ?>
                        <li>
                             <a href="edit.php?id=<?php echo $element['id']; ?>"><?php echo $element['heading1'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <button>
                    <div class="container">
                        <a href='nowa-strona.php'> Nowa Strona...</a>
                    </div>
                </button>
            </section>
            <?php
                require('incl/footer.php');
            ?>
        </div>
    </div>
</body>
</html>