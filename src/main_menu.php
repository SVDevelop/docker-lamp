<?php
$menu = [
    ['title' => 'Главная', 'path' => '/route/', 'sort' => 'abc'],
    ['title' => 'О нас', 'path' => '/route/about/', 'sort' => 'abc'],
    ['title' => 'Контакты', 'path' => '/route/contackts/', 'sort' => 'abc'],
    ['title' => 'Новости', 'path' => '/route/news/', 'sort' => 'abc'],
    ['title' => 'Каталог', 'path' => '/route/katalog/', 'sort' => 'abc']
];

function route ($menu)
{
    foreach ($menu as $key => $value) { ?>

        <li><a href="<?=$value['path'];?>"><?= $value['title'];?></a></li>

<?php }

}
