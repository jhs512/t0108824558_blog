<?
include 'config.php';
include 'header.php';

$name = "장희성";

$articles = getRows("SELECT * FROM article ORDER BY id DESC");
?>

<h1><?=$name?> 블로그 메인페이지 입니다.</h1>

<?
include 'footer.php';
?>