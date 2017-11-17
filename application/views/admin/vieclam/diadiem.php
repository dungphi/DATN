<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Việc làm</span> - <?=$title?></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modal_add_title" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span>Thêm địa điểm</span></a>
                    <!--<a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i><span>Export</span></a>-->
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url('admin')?>"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="<?=base_url('admin/vieclam')?>">Việc làm</a></li>
                <li class="active"><?=$title?></li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        <div class="col-md-6">
            <!-- HTML sourced data -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"><?=$title?></h5>

                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                </div>

                <table class="table datatable-html">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Địa điểm</th>
                        <th class="text-center">Chỉnh sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($diadiem as $dd) {?>
                            <tr>
                                <td><?=$dd['id_dd']?></td>
                                <td><?=$dd['ten_dd']?></td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                <a onclick="return xoa_dd(<?=$dd['id_dd']?>)" href="javascript:void(0)"><i class="icon-bin"></i> Xóa</a></li>
                                                <li><a onclick="return chinhsua_dd(<?=$dd['id_dd'] ?>);" data-toggle="modal" data-target="#modal_edit"><i class="icon-pencil7"></i> Chỉnh sửa</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <!-- /HTML sourced data -->
        </div>
    </div>
    <!-- /content area -->
</div>

<!-- /main content -->
<script type="text/javascript">
    function chinhsua_dd(id){
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('/admin/vieclam/chinhsua_dd'); ?>",
            data:{id:id},
            success: function(result){
                var html        = '<form class="form-horizontal">';
                    html        +=  '<div class="form-group">';
                    html        +=      '<label for="nganh_nghe" class="col-sm-3 control-label">Ngành nghề</label>';
                    html        +=      '<div class="col-sm-9">';
                    html        +=          '<input type="text" class="form-control" id="nganh_nghe" placeholder="Ngành nghề" value="'+result.ten_dd+'" required>';
                    html        +=          '<input type="text" class="hidden" id="id" value="'+result.id+'">';
                    html        +=      '</div>';
                    html        +=   '</div>';
                    html        +='</form>';
                $('#modal-body').html(html);
                $('.lis-data').attr('data-id',id);
            }
        });
    }
    function xoa_dd(id){
        if (confirm("Bạn có muốn xóa không?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('admin/vieclam/xoa_dd'); ?>",
                data:{id:id},
                success: function(result){
                    if(result == 1){
                        alert("Xóa thành công");
                        setTimeout(function(){
                            location.reload();
                        },1000);
                    }
                }
            });
        }
    }
    function luu_dd(){
        var id      = $('.lis-data').attr('data-id');
        var nganhnghe   = $('#nganh_nghe').val();

        $('.tag_i').html('<i class="icon-spidder2 spidder"></i> ');
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('/admin/vieclam/luu_dd'); ?>",
            data:{id:id,nganhnghe:nganhnghe},
            success: function(result){
                if(result == 1){
                    $('.tag_i').html('<i class="fa fa-check text-success" aria-hidden="true"></i> ');
                    setTimeout(function(){
                        location.reload();
                    }, 2000);
                }else{
                    $('.tag_i').html('<i class="fa fa-ban text-danger" aria-hidden="true"></i>');
                }
            }
        });
    }

</script>

<div id="modal_edit" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h6 class="modal-title">Chỉnh sửa ngành nghề</h6>
            </div>
            <div class="modal-body" id="modal-body">
            </div>
            <div class="modal-footer">
                <a class="tag_i"></a><button type="button" data-id="" data-lang="" class="btn btn-info lis-data" onclick="luu_dd();"> Lưu lại</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<div id="modal_add_title" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h6 class="modal-title">Thêm ngành nghề</h6>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="nganhnghe" class="col-sm-3 control-label">Ngành nghề</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nganhnghe" placeholder="Ngành nghề" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a class="tag_i"></a><button type="button" class="btn btn-info lis-data" onclick="return them_dd();"> Thêm</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function them_dd(){
        var nganhnghe   = $('#nganhnghe').val();
        $('.tag_i').html('<i class="icon-spidder2 spidder"></i> ');
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('admin/vieclam/them_dd'); ?>",
            data:{nganhnghe:nganhnghe},
            success: function(result){
                if(result == 1){
                    $('.tag_i').html('<i class="fa fa-check text-success" aria-hidden="true"></i> ');
                    setTimeout(function(){
                        location.reload();
                    }, 2000);
                }else{
                    $('.tag_i').html('<i class="fa fa-ban text-danger" aria-hidden="true"></i>');
                }
            }
        });
    }
</script>