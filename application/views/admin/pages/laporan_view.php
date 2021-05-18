

<!-- HEADER TITLE -->
<div class="main-content">
    <div class="main-content-inner">

        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-desktop"></i>
                    <a href="#">Master Web</a>
                </li>
                <li class="active">Laporan</li>
            </ul><!-- /.breadcrumb -->
            <div class="nav-search" id="nav-search">
            </div><!-- /.nav-search -->
        </div>
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="clearfix">
                        <h4 class="pink">
                            <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
                            Laporan
                            <div class="pull-right tableTools-container"></div>
                        </h4>
                    </div>
                    <div class="table-header">
                            Hasil untuk "Laporan"
                    </div>
                    <!-- BATAS HEADER TITLE -->
                    <div class="ln_solid"></div>

                    <!-- PAGE CONTENT BEGINS -->
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" name="f_modal" id="f_modal" action="<?php echo base_url('laporan/proses'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right"> Periode Laporan </label>    
                                <div class="col-sm-3">
                                    <input type="date" name="tglawal" id="tglawal" class="form-control" />
                                </div>
                                <div class="col-sm-1">
                                    s.d
                                </div>
                                <div class="col-sm-3">
                                    <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right"> Jenis Laporan </label>    
                                <div class="col-sm-7">
                                    <select name="jenis" id="jenis" class="form-control">
                                        <option value="excel">Export Excel</option>
                                        <option value="pdf">Export PDF</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-7 control-label no-padding-right">
                                    <button class="btn btn-white btn-info btn-bold" id="btnSimpan" name="btnSimpan" type="submit"><i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Proses</button>
                                    <a href="<?php echo base_url(); ?>laporan" target="_self" class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true"><i class="fa fa-minus-circle"></i> Tutup</a>
                                </label>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>      


