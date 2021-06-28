<!-- HEADER TITLE -->
<div class="main-content">
    <div class="main-content-inner">
        <script>
            function ubahData(id) {
                $("#m_modal").modal('show');
                $.ajax({
                    url: '<?php echo base_url('MKeuangan/edit'); ?>',
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        var i;
                        for (i = 0; i < data.length; i++) {
                            $("#id").val(data[i].id_kk);
                            $("#penerima").val(data[i].no_kk);
                            $("#jumlah").val(data[i].kepala_kk);
                            $("#keterangan").val(data[i].telp_kk);
                            $("#alamat").val(data[i].alamat_kk);
                            if (data[i].domisili_kk == "Y") {
                                $("#domisili").attr("checked", "checked");
                            }
                        }
                    }
                });
                return false;
            }

            function tambahData() {
                $("#id").val('');
                $("#penerima").val('');
                $("#jumlah").val('');
                $("#keterangan").val('');
                $("#alamat").val('');
                $("#domisili").val('');
                return true
            }
        </script>
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-desktop"></i>
                    <a href="#">Master</a>
                </li>
                <li class="active">Keuangan</li>
            </ul><!-- /.breadcrumb -->
            <div class="nav-search" id="nav-search">
            </div><!-- /.nav-search -->
        </div>
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="clearfix">
                        <h4 class="pink">
                            Keuangan
                            <div class="pull-right tableTools-container"></div>
                        </h4>
                    </div>

                    <div>
                        <a href="#m_modalIn" onclick="tambahData();" class="btn btn-primary" data-toggle="modal" data-rel="tooltip" title="Tambah">
                            <i class="ace-icon fa fa-plus bigger-120"></i> Cash In
                        </a>
                        <a href="#m_modalOut" onclick="tambahData();" class="btn btn-primary" data-toggle="modal" data-rel="tooltip" title="Tambah">
                            <i class="ace-icon fa fa-minus bigger-120"></i> Cash Out
                        </a>
                    </div>

                    <!-- BATAS HEADER TITLE -->
                    <div class="ln_solid"><br></div>

                    <div class="table-header">
                        Daftar Cash Flow
                    </div>

                    <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                    <table id="dataTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="20%" class="center">Tanggal</th>
                                <th width="20%">Penerima</th>
                                <th width="10%">Masuk</th>
                                <th width="10%">Keluar</th>
                                <th width="10%">Saldo</th>
                                <th width="30%">Keterangan</th>
                            </tr>
                        </thead>
                        <?php
                        $saldo = 0;
                        foreach ($data as $row) {
                            $saldo += ($row->in_transaksi - $row->out_transaksi);
                        ?>
                            <tr>
                                <td><?= $row->tgl_transaksi; ?></td>
                                <td><?= $row->penerima_transaksi; ?></td>
                                <td><?= $row->in_transaksi; ?></td>
                                <td><?= $row->out_transaksi; ?></td>
                                <td><?= $saldo; ?></td>
                                <td><?= $row->keterangan_transaksi; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cash In Modal -->
<div class="modal fade" id="m_modalIn" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white">&times;</span>
                    </button>
                    Add Penerimaan Uang
                </div>
            </div>
            <form class="form-horizontal" role="form" name="f_modal" id="f_modal" action="<?php echo base_url('MKeuangan/addCashIn'); ?>" method="post" enctype="multipart/form-data">
                <div id="konfirmasi"></div>
                <table class="table table-form">
                    <input type="hidden" class="form-control" name="id" id="id" value="">
                    <tr>
                        <td style="width: 25%">
                            <label for="penerima">penerima</label>
                        </td>
                        <td style="width: 75%">
                            <input type="text" class="form-control" name="penerima" id="penerima" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%">
                            <label for="jumlah">Jumlah</label>
                        </td>
                        <td style="width: 75%">
                            <input type="number" class="form-control" name="jumlah" id="jumlah" required value="">
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%">
                            <label for="keterangan">Keterangan</label>
                        </td>
                        <td style="width: 75%">
                            <input type="text" class="form-control" name="keterangan" id="keterangan" required value="">
                        </td>
                    </tr>
                </table>
        </div>
        <div class="modal-footer">
            <button class="btn btn-white btn-info btn-bold" type="submit">
                <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
            <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                <i class="fa fa-minus-circle"></i> Tutup</button>
        </div>
        </form>
    </div>
</div>

<!-- Cash Out Modal -->
<div class="modal fade" id="m_modalOut" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white">&times;</span>
                    </button>
                    Add Penarikan Uang
                </div>
            </div>
            <form class="form-horizontal" role="form" name="f_modal" id="f_modal" action="<?php echo base_url('MKeuangan/addCashOut'); ?>" method="post" enctype="multipart/form-data">
                <div id="konfirmasi"></div>
                <table class="table table-form">
                    <input type="hidden" class="form-control" name="id" id="id" value="">
                    <tr>
                        <td style="width: 25%">
                            <label for="penerima">penerima</label>
                        </td>
                        <td style="width: 75%">
                            <input type="text" class="form-control" name="penerima" id="penerima" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%">
                            <label for="jumlah">Jumlah</label>
                        </td>
                        <td style="width: 75%">
                            <input type="number" class="form-control" name="jumlah" id="jumlah" required value="">
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%">
                            <label for="keterangan">Keterangan</label>
                        </td>
                        <td style="width: 75%">
                            <input type="text" class="form-control" name="keterangan" id="keterangan" required value="">
                        </td>
                    </tr>
                </table>
        </div>
        <div class="modal-footer">
            <button class="btn btn-white btn-info btn-bold" type="submit">
                <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
            <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                <i class="fa fa-minus-circle"></i> Tutup</button>
        </div>
        </form>
    </div>
</div>