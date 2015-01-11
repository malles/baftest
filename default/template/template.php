<?php
/**
 * @var array $data
 */
if (!isset($data['title'])) {
    $data['title'] = 'Stamboom';
}
if (!isset($data['view'])) {
    $data['view'] = 'home';
}

?>

<!DOCTYPE html>
<html>
<head lang="nl-NL">
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
</head>
<body>
    <div class="container">
        <div class="header">
            <?php include 'header.php'; ?>
        </div>
        <div class="middle">
            <div class="menu">
                <?php include 'menu.php'; ?>
            </div>
            <div class="content">
                <?php include 'views/' . $data['view'] . '.php'; ?>
            </div>
            <br class="clear"/>
        </div>
        <div class="footer">
            <?php include 'footer.php'; ?>
        </div>
    </div>
</body>
</html>