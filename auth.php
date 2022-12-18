<?php
    if($_COOKIE['user']=='Да')
        setcookie('user','Да', time()-3600,'/');
    else
        setcookie('user','Да', time()+3600,'/');

    header('Location: /');
?>