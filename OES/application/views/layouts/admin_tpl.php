<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $template['title'] ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <?php echo $template['partials']['styles'] ?>
</head>
<body class="skin-blue">
    <!-- Top header section. Contains the profile details -->
    <?php echo $template['partials']['header'] ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. Contains the navbar and content of the page -->
        <?php echo $template['partials']['sidebar'] ?>
        <aside class="right-side">                
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h4><?php echo $page_title; ?></h4>
            </section>
            <!-- Main content -->
            <section class="content">
             
             <?php echo $template['body'] ?>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div>
    <?php echo $template['partials']['footer'] ?>
</body>
</html>
