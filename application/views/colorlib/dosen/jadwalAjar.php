<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $title;?></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php if (isset($row)): ?>  
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $form;?></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <?php $atrib = array('id' => 'jadwalAjar', 'class' => 'form-vertical form-label-left'); ?>
                        <?= form_open_multipart($this->uri->segment(1).'/update',$atrib); ?>
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <label>Kode MK <span class="required">*</span></label>
                                    <input type="text" value="<?= (isset($row)) ? $row->kode_mk : null; ?>" id="first-name" required="required" class="form-control" disabled>
                                </div>
                                <div class="form-group col-md-7">
                                    <label>Nama MK <span class="required">*</span></label>
                                    <input type="text" value="<?= (isset($row)) ? $row->nama_mk : null; ?>" id="first-name" required="required" class="form-control" disabled>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Semester <span class="required">*</span></label>
                                    <input type="text" value="<?= (isset($row)) ? $row->semester : null; ?>" id="first-name" required="required" class="form-control" disabled>
                                </div>
                                <div class="form-group col-md-1">
                                    <label>SKS <span class="required">*</span></label>
                                    <input type="text" value="<?= (isset($row)) ? $row->sks : null; ?>" id="first-name" required="required" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="id_jadwal" value="<?= (isset($rowA)) ? $rowA->id_jadwal : null; ?>">
                                <div class="form-group col-md-1">
                                    <label>Kelas <span class="required">*</span></label>
                                    <input type="text" name="kelas" value="<?= (isset($rowA)) ? $rowA->kelas : null; ?>" id="first-name" required="required" class="form-control">
                                </div>
                                <div class="form-group col-md-1">
                                    <label>Ruangan <span class="required">*</span></label>
                                    <input type="text" name="ruangan" value="<?= (isset($rowA)) ? $rowA->ruangan : null; ?>" id="first-name" required="required" class="form-control">
                                </div>
                                <div class="form-group col-md-1">
                                    <label>Hari <span class="required">*</span></label>
                                    <input type="text" name="hari" value="<?= (isset($rowA)) ? $rowA->hari : null; ?>" id="first-name" required="required" class="form-control">
                                </div>
                                <div class="form-group col-md-1">
                                    <label>Waktu <span class="required">*</span></label>
                                    <input type="text" name="waktu" value="<?= (isset($rowA)) ? $rowA->waktu : null; ?>" id="first-name" required="required" class="form-control">
                                </div>
                                <div class="form-group col-md-7">
                                    <label>Keterangan </label>
                                    <input type="text" name="ket" value="<?= (isset($rowA)) ? $rowA->ket : null; ?>" id="first-name" class="form-control">
                                </div>
                                <div class="form-group col-md-1">
                                    <label>Kuota <span class="required">*</span></label>
                                    <input type="text" name="kuota" value="<?= (isset($rowA)) ? $rowA->kuota : null; ?>" id="first-name" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="ln_solid col-md-12"></div>
                            <div class="form-group col-md-12">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a href="<?= site_url($this->uri->segment(1));?>" type="submit" class="btn btn-primary">Cancel</a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                            <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $table;?></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Matakuliah</th>
                                    <th>Nama Matakuliah</th>
                                    <th>Smt.</th>
                                    <th>SKS</th>
                                    <th>Nama Dosen</th>
                                    <th>Kls</th>
                                    <th>Ruangan</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Ket</th>
                                    <th>Kuota</th>
                                    <th>Peserta</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rows->result() as $value): $no++?>
                                <tr>
                                    <th scope="row">
                                        <?= $no; ?>
                                    </th>
                                    <td><?= $value->kode_mk; ?></td>
                                    <td><?= $value->nama_mk; ?></td>
                                    <td><?= $value->semester; ?></td>
                                    <td><?= $value->sks; ?></td>
                                    <td><?= $value->nama_dosen; ?></td>
                                    <td><?= $value->kelas; ?></td>
                                    <td><?= $value->ruangan; ?></td>
                                    <td><?= $value->hari; ?></td>
                                    <td><?= $value->waktu; ?></td>
                                    <td><?= $value->ket; ?></td>
                                    <td><?= $value->kuota; ?></td>
                                    <td><?= $value->peserta; ?></td>
                                    <td>
                                        <a href="<?= site_url($this->uri->segment(1).'/select/'.$value->id_jadwal);?>">Edit </a> |
                                        <a href="<?= site_url($this->uri->segment(1).'/delete/'.$value->id_jadwal);?>">Delete </a>
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
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
