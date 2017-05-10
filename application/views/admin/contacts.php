 <style type="text/css">
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
</style> 

<div class="wrapper wrapper-content animated swing">
<div class="row">
    <?php foreach($data as $row) { ?>
    <div class="col-lg-4 card">
        <div class="widget-head-color-box navy-bg p-lg text-center">
            <div class="m-b-md">
                <h2 class="font-bold no-margins">
                <?php echo $row->nama_lengkap; ?>
                </h2>
                <small><b><?php echo $row->nama_struktur; ?></b>a</small>
            </div>
            <img style="width: 150px;height: 150px;" src="<?php echo base_url('assets/uploads/').$row->foto; ?>" class="img-circle circle-border m-b-md" alt="profile">
        
        <div>
            <span><?php echo $row->hp; ?></span> |
            <span><?php echo $row->email; ?></span> |
            <span><?php echo $row->jabatan; ?></span>
            </div>
        </div>
        <div class="widget-text-box">
            <h4 class="media-heading"><?php echo $row->nama_lengkap; ?></h4>
            <p><strong><?php echo $row->jabatan; ?></strong>.</p>
            <div class="text-right">
            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
            <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>