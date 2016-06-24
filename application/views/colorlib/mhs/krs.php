<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $title;?></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <?php $atrib = array('id' => 'krsMhs'); ?>
                <?= form_open_multipart($this->uri->segment(1).'/add',$atrib); ?>
                    <div class="x_title">
                        <h2><?= $table;?></h2>
                        <ul class="nav navbar-right panel_toolbox">
                        	<li><button type="submit" class="btn btn-default"><i class="fa fa-save"> Simpan KRS</i></button></li>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">#</th>
                                        <th class="column-title">No</th>
                                        <th class="column-title">Kode MK</th>
                                        <th class="column-title">Nama MK</th>
                                        <th class="column-title">Smt.</th>
                                        <th class="column-title">SKS</th>
                                        <th class="column-title">Nama Dosen</th>
                                        <th class="column-title">Kls</th>
                                        <th class="column-title">Ruangan</th>
                                        <th class="column-title">Hari</th>
                                        <th class="column-title">Waktu</th>
                                        <th class="column-title">Ket</th>
                                        <th class="column-title">Kuota</th>
                                        <th class="column-title">Peserta</th>
                                        <!-- <th class="column-title">Action</th> -->
                                        <th class="bulk-actions" colspan="14">
                                            <a class="antoo" style="color:#fff; font-weight:500;">KRS ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rows->result() as $value): $no++?>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="id_jadwal[]" value="<?= (isset($value)) ? $value->id_jadwal : null ; ?>">
                                        </td>
                                        <td>
                                            <?= $no; ?>
                                        </td>
                                        <td>
                                            <?= $value->kode_mk; ?>
                                        </td>
                                        <td>
                                            <?= $value->nama_mk; ?>
                                        </td>
                                        <td>
                                            <?= $value->semester; ?>
                                        </td>
                                        <td>
                                            <?= $value->sks; ?>
                                        </td>
                                        <td>
                                            <?= $value->nama_dosen; ?>
                                        </td>
                                        <td><?= $value->kelas; ?></td>
                                        <td>
                                            <?= $value->ruangan; ?>
                                        </td>
                                        <td>
                                            <?= $value->hari; ?>
                                        </td>
                                        <td>
                                            <?= $value->waktu; ?>
                                        </td>
                                        <td>
                                            <?= $value->ket; ?>
                                        </td>
                                        <td>
                                            <?= $value->kuota; ?>
                                        </td>
                                        <td>
                                            <?= $value->peserta; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="ln_solid col-md-12"></div>
                        <div class="row">
                            <div class="col-md-12" align="center">
                                <?php echo $pagination; ?>
                            </div>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
</div>
