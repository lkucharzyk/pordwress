<?php
  require('./config/conn.php');
  $query0 = "SELECT id, heading1, ordering FROM sites ORDER BY ordering";
  $result0 = $conn->query($query0);
  $data0 = mysqli_fetch_all($result0, MYSQLI_ASSOC);
?>

<aside>
            <div class="container">
                <nav id="main-nav">
                    <ul>
                        <li><a href='index.php'>Strona startowa</a></li>
                        <li>Strony
                            <ul id="pages-list-aside" class="screen scr-dark">
                                <?php foreach($data0 as $element): ?>
                                    <li>
                                        <a href="edit.php?id=<?php echo $element['id']; ?>"><?php echo $element['heading1'] ?></a>
                                        <div class="icons">
                                            <a href="strona/strona.php?id=<?php echo $element['id']; ?>"><i class="fas fa-eye"></i></a>
                                            <a href="edit.php?id=<?php echo $element['id']; ?>"><i class="fas fa-edit"></i></a>   
                                            <a href="./incl/delete.php?id=<?php echo $element['id']; ?>"> <i class="fas fa-trash"></i></a>  
                                        </div>                            
                                    </li>
                                <?php endforeach; ?>
                            </ul> 
                        </li>
                        <li>
                            <a href='nowa-strona.php'>Nowa Strona</a>
                         </li>
                         <li>
                            <a href='edytuj-menu.php'>Edytuj menu</a>
                         </li>

                        <li>
                           <a>Konta</a>
                        </li>
                        <li>
                            <a>Ustawienia</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>