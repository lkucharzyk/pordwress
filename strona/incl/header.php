<?php
  require('../config/conn.php');
  $query0 = "SELECT id, heading1, ordering FROM sites ORDER BY ordering";
  $result0 = $conn->query($query0);
  $data0 = mysqli_fetch_all($result0, MYSQLI_ASSOC);
?>


<header>
    <div class="s-container">
        <div class="logo">
            PordWress
        </div>
        <nav id='s-main-nav'>
            <ul>
                <?php foreach($data0 as $element): ?>

                    <li><a href='strona.php?id=<?php echo $element['id']; ?>'>
                        <?php echo $element['heading1'] ?>
                    </a></li>
                <?php endforeach; ?>
                <!-- <li><a href=''>Strona głowna</a></li>
                <li><a href=''>O nas</a></li>
                <li><a href=''>Kontakt</a></li>
                <li><a href=''>Rzeczy</a></li> -->
            </ul>
        </nav>
        <nav id='s-main-nav-hamburger'>
            <i id='ham-btn' class="fas fa-bars"></i>
            <ul class='h-closed'>
                <?php foreach($data0 as $element): ?>

                    <li><a href='strona.php?id=<?php echo $element['id']; ?>'>
                        <?php echo $element['heading1'] ?>
                    </a></li>
                <?php endforeach; ?>
                <!-- <li><a href=''>Strona głowna</a></li>
                <li><a href=''>O nas</a></li>
                <li><a href=''>Kontakt</a></li>
                <li><a href=''>Rzeczy</a></li> -->
            </ul>
        </nav>
    </div>    
</header>