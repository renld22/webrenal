<?php
include_once './komponen/header.php';

if ($_GET['page'] == 'about') {
    include_once './komponen/page/about.php';
} elseif ($_GET['page'] == 'service') {
    include_once './komponen/page/service.php';
} elseif ($_GET['page'] == 'skills') {
        include_once './komponen/page/skills.php';
} elseif ($_GET['page'] == 'experiences') {
        include_once './komponen/page/experiences.php';
} elseif ($_GET['page'] == 'portfolio') {
        include_once './komponen/page/portofolio.php';
} elseif ($_GET['page'] == 'contact') {
        include_once './komponen/page/contact.php';
} else {
        include_once './komponen/page/home.php';
}
    
include_once './komponen/footer.php';
    
?>   