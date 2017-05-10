  <div class="row">
            <div class="col-lg-9">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <a href="#" class="btn btn-white btn-xs pull-right">Edit project</a>
                                        <h2>Detail Program Kerja HIMATIF</h2>
                                    </div>
                                    <dl class="dl-horizontal">
                                        <dt>Status:</dt> <dd><span class="label label-primary">Active</span></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <dl class="dl-horizontal">

                                        <dt>Ketua:</dt> <dd>Alex Smith</dd>
                                        <dt>Jumlah Anggota:</dt> <dd>  12</dd>
                                        <dt>Departemen:</dt> <dd><a href="#" class="text-navy"> Mentri HUBLU</a> </dd>
                                        <dt>Periode:</dt> <dd> 	2016-2017 </dd>
                                    </dl>
                                </div>
                                <div class="col-lg-7" id="cluster_info">
                                    <dl class="dl-horizontal" >

                                        <dt>Tanggal Mulai:</dt> <dd>16.08.2014 12:15:57</dd>
                                        <dt>Tanggal Akhir:</dt> <dd> 	10.07.2014 </dd>
                                        <dt>Anggotas:</dt>
                                        <dd class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <dl class="dl-horizontal">
                                        <dt>Completed:</dt>
                                        <dd>
                                            <div class="progress progress-striped active m-b-sm">
                                                <div style="width: 60%;" class="progress-bar"></div>
                                            </div>
                                            <small>Project completed in <strong>60%</strong>. Remaining close the project, sign a contract and invoice.</small>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="row m-t-sm">
                                <div class="col-lg-12">
                                <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Personil Proker</a></li>
                                            <li class=""><a href="#tab-2" data-toggle="tab"> Aktivitas</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab-1">
                                            <div class="feed-activity-list">
                                                <div class="feed-element">

                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a2.jpg">
                                            </a>
                                            <?php foreach($dt as $row){ ?>
                                            <div class="media-body">
                                                <strong><?php $dt->nama_dep ?></strong> posted message on <strong>Monica Smith</strong> site. <br>
                                            </div>
                                            <?php } ?>
                                                </div>                             
                                            </div>
                                        </div>
                                    
                                <div class="tab-pane" id="tab-2">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Proker</th>
                                            <th>Waktu Mulai</th>
                                            <th>Waktu Selesai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                      
                                            <td>
                                                <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                            </td>
                                            <td>
                                               Create project in webapp
                                            </td>
                                            <td>
                                              
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                            <p class="small">
                                                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                            </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>