<?php
    require('../config/conn.php');

    $id = $_GET["id"];
    $sql = "SELECT heading1, title, description, content, robots FROM sites WHERE id=$id";
    $result = $conn->query($sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    require('../incl/head.php');
?>
    <title><?php echo $data[0]['title'] ?></title>
    <meta name="description" content="<?php echo $data[0]['description'] ?>">
    <meta name='robots' content="<?php echo $data[0]['robots'] ?>">
</head>
<body>
    <?php
        require('./incl/header.php');

        
     ?>

    <section id="main-content" class='push'>
        <div class="s-container">
            <h1>
                <?php echo $data[0]['heading1'] ?>
            </h1>
            <div class="s-content">
                <p class='screen scr-light'>
                    <?php echo $data[0]['content'] ?>
                </p>
            </div>
        </div>
    </section>
    <?php
        require('./incl/footer.php');
     ?>


</body>
</html>