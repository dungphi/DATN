<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$title?></title>
<!--        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>-->
        <?php $this->load->view('admin/scripts');?>
    </head>
    <body>
        <?php $this->load->view("admin/header");?>
        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">
                <?php $this->load->view("admin/sidebar");?>
                <?php $this->load->view($content);?>
            </div>
            <!-- /page content -->
        </div>
        <!-- /page container -->
        <!-- Footer -->
        <div class="navbar navbar-inverse">
            <div class="text-center text-footer">
                &copy; 2017. <a href="#">Việc làm online</a> by <a href="#" >admin</a>
            </div>
        </div>
        <!-- /footer -->
    </body>
</html>