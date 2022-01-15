<?php
require('incl/validate.php');

// $id = $_GET["id"];
// if(isset($_POST['submit'])){
//     $h1 = $_POST['h1'];
//     $content = $_POST['content'];
//     $title = $_POST['title'];
//     $desc = $_POST['desc'];

//     $query2 = "UPDATE sites 
//     SET 
//         heading1 = '$h1',
//         content = '$content',
//         title = '$title',
//         description = '$desc'
//     WHERE
//         id=$id;";
//     mysqli_query($conn, $query2);

// };





$sql = "SELECT id, heading1, ordering FROM sites ORDER BY ordering";
$result = $conn->query($sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);



require('incl/head.php');
?>
    <title>Edytuj menu - PordWress CMS</title>
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
                <div id="edit-top">
                    <h1>Edytuj menu</h1>
                </div>
                <div class='manual'>
                    <i class="fas fa-info-circle"></i> <p>Przeciągnij by zmienić kolejność. Po każdej zmianie następuje automatyczny zapis.</p>
                </div>
                <ul id='menuSort'>

                    <?php foreach($data as $element): ?>
                        <li class='screen scr-light' data-id='<?php echo $element['id'] ?>'>
                            <?php echo $element['heading1'] ?>
                        </li>
                    <?php endforeach; ?>

                    </ul>   
            </section>
            <?php
                require('incl/footer.php');
            ?>
        </div>
    </div>
    <script src="js/sortable-master/sortable.min.js"></script>
    <?php require('incl/update.php') ?>
</body>
</html>