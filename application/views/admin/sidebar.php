<!--Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="<?=base_url("assets/admin")?>/images/demo/users/face11.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold"><?php echo $this->session->userdata("session_fullname");?></span>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <!-- Main -->
                    <li <?php if(isset($home)) {echo $home;} ?>><a href="<?=base_url("admin/home")?>"><i class="icon-home4"></i> <span>Home</span></a></li>
                    <li <?php if(isset($message)) {echo $message;} ?>><a href="<?=base_url("admin/message")?>"><i class="fa fa-comments-o" aria-hidden="true"></i> <span><?=$this->lang->line('message'); ?></span></a></li>
                    <li <?php if(isset($about)) {echo $about;} ?>><a href="<?=base_url("admin/about")?>"><i class="fa fa-info-circle" aria-hidden="true"></i> <span><?=$this->lang->line('about'); ?></span></a></li>
                    <li <?php if(isset($service)) {echo $service;} ?>><a href="<?=base_url("admin/service")?>"><i class="fa fa-cogs" aria-hidden="true"></i> <span><?=$this->lang->line('service'); ?></span></a></li>
                    <li <?php if(isset($ntd_index)) {echo $ntd_index;} ?>>
                        <a href="#"><i class="fa fa-user-secret"></i> <span>Nhà tuyển dụng</span></a>
                        <ul>
                            <li <?php if(isset($ntd_list)) {echo $ntd_list;} ?>><a href="<?php echo base_url("admin/admin")?>"><i class="fa fa-users"></i> Danh sách</a></li>
                            <li <?php if(isset($ntd_add)) {echo $ntd_add;} ?>><a href="<?php echo base_url("admin/admin/add")?>"><i class="fa fa-user-plus"></i> Thêm mới</a></li>
                        </ul>
                    </li>

                    <!-- /page kits -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->