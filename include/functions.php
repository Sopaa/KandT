
<?php

function addActive($page, $text)
{
    $activeClass = '';
    if($page === basename($_SERVER['PHP_SELF'])){
        $activeClass = ' class="active"';
    }
    ?>
    <li<?=$activeClass?>><a href="<?=$page?>"><?=$text?></a></li>
    <?php
}