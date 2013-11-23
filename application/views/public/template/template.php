<?php
$keywords = "";
$title = "";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Jasa Pembelian Tiket" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/costum.css" type="text/css" />
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/carousel.js"></script>
        <script src="assets/js/setup.js"></script>
    </head>
    <body>
        <?php $this -> load -> view("public/template/top_menu"); ?>        
        <?php $this -> load -> view("public/template/sub_head"); ?>    
        <?php $this -> load -> view("public/template/second_menu"); ?>    
            <div class="container">
                <!-- slide mulai -->
                    
                <!-- slide end -->
            </div>
            <div class="container">
                <div class="body-content">
                <!-- content mulai -->
                <?php $this -> load -> view("public/content/content-example"); ?>
                <!-- content selesai -->
                 </div>
            </div>
       <?php $this -> load -> view("public/template/footer"); ?>
    </body>
</html>    