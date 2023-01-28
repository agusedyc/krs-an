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
                    <div class="x_title">
                        <h2><?= $table;?></h2>
                        <ul class="nav navbar-right panel_toolbox">                        
                        <li><a href="<?= site_url('krs/cetakKrs');?>" class="btn btn-default" target="_blank"><i class="fa fa-save"> Cetak KRS</i></a></li>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
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
                                    <th>Kelas</th>
                                    <th>Ruangan</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
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
                                    <td><?= $value->kuota; ?></td>
                                    <td><?= $value->peserta; ?></td>
                                    <td>
                                        <a href="<?= site_url($this->uri->segment(1).'/delete/'.$value->id_krs);?>">Delete </a>
                                    </td>
                                </tr>
                                <?php 
                                	$ln = strlen($value->ket); 
                                	if ($ln <= '40' && substr($value->ket,0,7)=='Praktek') {
                                ?>
                                <tr>
                                	<td></td>
                                	<td><?= $value->kode_mk; ?></td>
                                	<td><?= 'Praktikum '.$value->nama_mk; ?></td>
                                	<td></td>
                                	<td></td>
                                	<td></td>
                                	<td><?php echo substr($value->ket,8,5); ?></td>
                                	<td><?php echo substr($value->ket,-5); ?></td>
                                	<td>
                                		<?php  
											$day = substr($value->ket,-22,6);
											if (substr($day,-4)=='rabu' or substr($day,-4)=='Rabu') {
												echo "Rabu";
											}else{
												echo $day;
											}
										?>
                                	</td>
                                	<td><?php echo substr($value->ket,-15,5); ?></td>
                                	<td></td>
                                	<td></td>
                                	<td></td>
                                	<td></td>
									
									
                                </tr>
                                <?php }else{
                                    null;
                                    } ?>
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
