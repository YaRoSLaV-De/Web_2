<?php /***
$menu_ran = array(
  "<a href=\"index.php\">Главна  </a>", "<a href=\"university.php\">Університет  </a>",
  "<a href=\"subjects.php\">Навчальний план  </a>", "<a href=\"aboutme.php\">Про мене  </a>"
);
shuffle($menu_ran);
foreach ($menu_ran as $menu){
    echo "$menu ";
}
***/?>
<?php






$navigation_array = array(
    array(
        'text' => 'Головна',
        'link' => 'index.php'
    ),
    array(
        'text' => 'Університет',
        'link' => 'university.php'
    ),
    array(
        'text' => 'Навчальний план',
        'link' => 'subjects.php'
    ),
    array(
        'text' => 'Про мене',
        'link' => 'aboutme.php'
    )
);


    $shuffled_array = $navigation_array;
    shuffle($shuffled_array);
    foreach ($shuffled_array as $item) {
    echo '<li><a href="'.$item['link'].'">'.$item['text'].'</a></li>';
    }


?>
