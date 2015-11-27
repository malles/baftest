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
    <style>
        .float-left {

            background: #f4f4f4;
            float: left;
        }
        .width50 {
            width: 50%;
        }
        .space {
            padding: 10px;
        }
    </style>
</head>
<body>
<div>
    <div class="float-left width50">
       <div class="space">
           ietd gsdf gsd hdfg df jd hgsdg dfgsdh dfj ghjfkfghjdfhfhgh fgh dfgsdf gsd hdfg df jd hgsdg dfgsdh dfj ghjfkfghjdfhfhgh fgh dfhdf hf hf hf ghfg
           f hf gh fdhdh fgh fdhf fhfh h fgs
       </div>
    </div>
    <div class="float-left width50">
        <div class="space">
            erf h fgh fgfgh g h fg hhfg hfg hfh fg hf gfhf hj in
        </div>
    </div>
</div>




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