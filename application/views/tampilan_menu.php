<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                    <img  style="width: 48px;height: 48px;" alt="image" class="img-circle" src="<?php echo base_url(); ?>assets/img/logo-himatif.png" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear">
                    <span class="block m-t-xs">
                        <strong class="font-bold">HIMATIF Application</strong>
                    </span>
                    <span class="text-muted text-xs block">Halaman Utama <b class="caret"></b></span> </span>
                    </a>
                    
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/contacts">Contacts</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/logout">Logout</a></li>
                    </ul>
                </div>
            
                <div class="logo-element">AR+</div>
            </li>
        
            <li> 
                <a href="#"><i class="fa fa-sitemap"></i>
                <span class="nav-label">HIMATIF</span>
                <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                    <a href="<?php echo base_url()."index.php/departemen"; ?>">Department</a>
                    </li>
                    <li><a href="<?php echo base_url()."index.php/cproker"; ?>">Program Kerja</a></li>
                    <li>
                    <a href="<?php echo base_url()."index.php/cdocument_file"; ?>"><span class="nav-label">Dokumen</span></a>
                    </li>
                </ul>
            
                <li>   
                    <a href="<?php echo base_url()."index.php/struktur_div"; ?>"><i class="fa fa-building"></i> Struktur</a>
                </li>
            </li>

            <li>
                <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Anggota</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level collapse">
                <li><a href="<?php echo base_url()."index.php/contacts"; ?>">Contacts</a></li>
                <li><a href="profile.html">List</a></li>            
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-camera"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level collapse">
                <li><a href="<?php echo base_url()."index.php/gallery"; ?>">List</a></li>            
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Keuangan</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collaps">
                <li><a href="<?php echo base_url()."index.php/kas"; ?>">Kas</a></li>
                <li><a href="<?php echo base_url()."index.php/pengeluaran";?>">Pengeluaran</a></li>
                <li><a href="<?php echo base_url()."index.php/detail_keuangan";?>">Laporan</a></li>
                </ul>
            </li>

            <li>   
                <a href="<?php echo base_url()."index.php/doku"; ?>">
                <i class="fa fa-money"></i>
                <span class="pull-right label label-primary">SPECIAL</span> Pembayaran</a>
            </li>

            <li>
                <a><i class="fa fa-file"></i>
                    <span class="nav-label"></span> Surat
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a  href="<?php echo base_url()."index.php/csurat/Hometemplate"; ?>"> Templates</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url()."index.php/home/admin"; ?>"><i class="fa fa-users"></i>
                <span class="nav-label"></span>
                <span class="pull-right label label-primary">SO</span>Account User
                </a>
            </li>
        </ul>
    </div>
</nav>