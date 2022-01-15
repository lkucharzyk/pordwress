<?php
require('incl/validate.php');

$id = $_GET["id"];
if(isset($_POST['submit'])){
    $h1 = $_POST['h1'];
    $content = $_POST['content'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $robots = $_POST['robots'];

    $query2 = "UPDATE sites 
    SET 
        heading1 = '$h1',
        content = '$content',
        title = '$title',
        description = '$desc',
        robots = '$robots'
    WHERE
        id=$id;";
    mysqli_query($conn, $query2);

};


$sql = "SELECT id, heading1, title, description, content, robots FROM sites WHERE id=$id";
$result = $conn->query($sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);


require('incl/head.php');
?>
    <title>Edytuj stronę <?php echo $data[0]['heading1'] ?> - PordWress CMS</title>
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
                    <h1>Edytuj stronę <?php echo $data[0]['heading1']; ?> </h1>
                    <button>
                        <a href="incl/delete.php?id=<?php echo $data[0]['id']; ?>">
                            <div class='container'>
                                Usuń
                            </div>
                        </a>      
                    </button>
                </div>
                <form id='edit-form' method='POST' action="<?php $_SERVER['PHP_SELF']; ?>">
                    <h2>Nagłówek h1</h2>
                    <input type='text' id='h1' name='h1' class="screen scr-light" value="<?php echo $data[0]['heading1']; ?>">
                    <h2>Zawartość</h2>
                    <textarea id='page-content' name='content' form='edit-form' class="screen scr-light"><?php echo $data[0]['content']; ?></textarea>
                    <h2>Title</h2>
                    <input type='text' id='page-title' name='title' class="screen scr-light" value="<?php echo $data[0]['title']; ?>">
                    <h2>Description</h2>
                    <input type='text' id='page-desc' name='desc' class="screen scr-light" value="<?php echo $data[0]['description']; ?>">
                    <h2>Robots<h2>
                    <select name="robots" id="robots">
                        <option value="index, follow"
                        <?php 
                         if ($data[0]['robots'] == "index, follow"){
                             echo 'selected';
                         }; 
                        ?>
                        >index, follow</option>
                        <option value="index, nofollow" 
                        <?php 
                         if ($data[0]['robots'] == "index, nofollow"){
                             echo 'selected';
                         }; 
                        ?>
                        >index, nofollow</option>
                        <option value="noindex, follow"
                        <?php 
                         if ($data[0]['robots'] == "noindex, follow"){
                             echo 'selected';
                         }; 
                        ?>
                        >noindex, follow</option>
                        <option value="noindex, nofollow"
                        <?php 
                         if ($data[0]['robots'] == "noindex, nofollow"){
                             echo 'selected';
                         }; 
                        ?>
                        >noindex, nofollow</option>
                    </select>  
                    <input  type="submit" name="submit" value="Zatwierdź" class="btn">

                </form>   
            </section>
            <?php
                require('incl/footer.php');
            ?>
        </div>
    </div>
</body>
</html>