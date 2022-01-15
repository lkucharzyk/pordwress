<?php
require('incl/validate.php');

if(isset($_POST['submit'])){
    $h1 = $_POST['h1'];
    $content = $_POST['content'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $robots = $_POST['robots'];

    $query = "INSERT INTO sites(heading1, title, description, content, robots) 
    VALUES ('$h1', '$title', '$desc','$content','$robots')";
    mysqli_query($conn, $query);

};




require('incl/head.php');
?>
    <title>Nowa strona - PordWress CMS</title>
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
                    <h1>Utwórz nową stronę</h1>
                    <button>
                        <div class='container'>
                            Usuń
                        </div>    
                    </button>
                </div>
                <form id='edit-form' method='POST' action="<?php $_SERVER['PHP_SELF']; ?>">
                    <h2>Nagłówek h1</h2>
                    <input type='text' id='h1' name='h1' class="screen scr-light">
                    <h2>Zawartość</h2>
                    <textarea id='page-content' name='content' form='edit-form' class="screen scr-light"></textarea>
                    <h2>Title</h2>
                    <input type='text' id='page-title' name='title' class="screen scr-light">
                    <h2>Description</h2>
                    <input type='text' id='page-desc' name='desc' class="screen scr-light">
                    <h2>Robots<h2>
                    <select name="robots" id="robots">
                        <option value="index, follow">index, follow</option>
                        <option value="index, nofollow">index, nofollow</option>
                        <option value="noindex, follow">noindex, follow</option>
                        <option value="noindex, nofollow">noindex, nofollow</option>
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