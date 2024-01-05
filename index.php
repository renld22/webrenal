<?php
include './komponen/header.php';

if (isset($_GET['page'])) {
        if ($_GET['page'] == 'about') {
    include './komponen/page/about.php';
} elseif ($_GET['page'] == 'service') {
    include './komponen/page/service.php';
} elseif ($_GET['page'] == 'skills') {
        include './komponen/page/skills.php';
} elseif ($_GET['page'] == 'experiences') {
        include './komponen/page/experiences.php';
} elseif ($_GET['page'] == 'portfolio') {
        include './komponen/page/portofolio.php';
} elseif ($_GET['page'] == 'contact') {
        include './komponen/page/contact.php';
}elseif ($_GET['page'] == 'timeline') {
        include './komponen/page/timeline.php';
}
} else {
        include './komponen/page/home.php';
}
    
include './komponen/footer.php';
    
?>   