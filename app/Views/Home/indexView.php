<?= $this->extend('Layouts/template') ?>
<?= $this->section('content') ?>

<div class="main-content pt-0">

    <div class="container-fluid">
        <div class="inner-body">>
            <!-- End Page Header -->
            <div class="page-header">
                <!--Row-->
                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <!--Row-->
                    <div class="row row-sm">
                        <!-- card 1 -->
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="card-item">
                                        <div class="card-item-icon card-icon">
                                            <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
                                                <g>
                                                    <rect height="14" opacity=".3" width="14" x="5" y="5" />
                                                    <g>
                                                        <rect fill="none" height="24" width="24" />
                                                        <g>
                                                            <path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z" />
                                                            <rect height="5" width="2" x="7" y="12" />
                                                            <rect height="10" width="2" x="15" y="7" />
                                                            <rect height="3" width="2" x="11" y="14" />
                                                            <rect height="2" width="2" x="11" y="10" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <!-- 1 -->
                                        <div class="card-item-title mb-2">
                                            <label class="main-content-label tx-14 font-weight-bold mb-1">Agenda Rapat Hari ini :</label>
                                        </div>
                                        <div class="card-item-body">
                                            <div class="card-item-stat">
                                                <h4 class="font-weight-bold"><?= $todayAgenda['count']; ?></h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card 1 -->

                        <!--  card 2 -->
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="card-item">
                                        <div class="card-item-icon card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path d="M12 4c-4.41 0-8 3.59-8 8 0 1.82.62 3.49 1.64 4.83 1.43-1.74 4.9-2.33 6.36-2.33s4.93.59 6.36 2.33C19.38 15.49 20 13.82 20 12c0-4.41-3.59-8-8-8zm0 9c-1.94 0-3.5-1.56-3.5-3.5S10.06 6 12 6s3.5 1.56 3.5 3.5S13.94 13 12 13z" opacity=".3" />
                                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" />
                                            </svg>
                                        </div>
                                        <div class="card-item-title mb-2">
                                            <label class="main-content-label tx-14 font-weight-bold mb-1">Data Seluruh Agenda Rapat :</label>

                                        </div>
                                        <div class="card-item-body">
                                            <div class="card-item-stat">
                                                <h4 class="font-weight-bold"><?= $dataAllAgenda; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card 2 -->
                    </div>
                    <!--End row-->

                    <!--row-->
                    <div class="row row-sm">
                        <!-- Tabel -->
                        <div class="col-lg-12">
                            <div class="card custom-card mg-b-20">
                                <div class="card-body">
                                    <div>
                                        <h2 class="main-content-title tx-20 mg-b-5">Daftar Agenda Hari Ini / <span class="tx-16"><a href="/agenda/all">Lihat Semua</a></span> </h2>
                                    </div>
                                    <?php
                                    if (session()->getFlashData('success')) {
                                    ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <?= session()->getFlashData('success') ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($session->has('logged_in') && $session->get('role') === "superadmin") { ?>
                                        <br>
                                        <div>
                                            <a class="btn ripple btn-info" data-target="#modaldemo3" data-toggle="modal" href="">Tambah Agenda</a>
                                        </div>
                                        <br>
                                    <?php  } ?>
                                    <div class="table-responsive">
                                        <table class="table" id="example1">
                                            <thead>
                                                <tr>
                                                    <th class="wd-20p">No</th>
                                                    <th class="wd-20p">Tanggal</th>
                                                    <th class="wd-20p">Tempat</th>
                                                    <th class="wd-20p">Agenda Rapat</th>
                                                    <th class="wd-20p">asal Surat</th>
                                                    <th class="wd-20p">No Surat</th>
                                                    <th class="wd-20p">No Surat BPKAD</th>
                                                    <th class="wd-20p">Disposisi</th>
                                                    <th class="wd-20p">Catatan</th>
                                                    <th class="wd-20p">Notulensi</th>
                                                    <?php
                                                    if ($session->has('logged_in')) { ?>
                                                        <th>Aksi</th>
                                                    <?php    } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($todayAgenda["data"] as $id => $agenda) : ?>
                                                    <tr>
                                                        <?php
                                                        ?>
                                                        <td> <?= ++$id ?> </td>
                                                        <td><?= $agenda->tgl[0] . " " . $agenda->tgl[1]  ?></td>
                                                        <td><?= $agenda->tempat ?></td>
                                                        <td><?= $agenda->nama_agenda ?></td>
                                                        <td><?= $agenda->asal_surat ?></td>
                                                        <td><?= $agenda->no_surat ?></td>
                                                        <td><?= $agenda->no_bkad ?></td>
                                                        <td>
                                                            <?php
                                                            $dispo = explode(", ", $agenda->disposisi);
                                                            ?>
                                                            <select class="form-control select2" multiple="multiple" name="disposisi[]" disabled>

                                                                <option <?php
                                                                        if (in_array("Sekertaris", $dispo)) { ?> selected <?php } ?> value="Sekertaris">
                                                                    Sekertaris
                                                                </option>
                                                                <option <?php
                                                                        if (in_array("Kabid Anggaran", $dispo)) { ?> selected <?php  } ?> value="Kabid Anggaran">
                                                                    Kabid Anggaran
                                                                </option>
                                                                <option <?php
                                                                        if (in_array("Kabid Pembedaharaan", $dispo)) { ?> selected <?php } ?> value="Kabid Pembedaharaan">
                                                                    Kabid Pembedaharaan
                                                                </option>
                                                                <option <?php
                                                                        if (in_array("Kabid Aset dan Investasi", $dispo)) { ?> selected <?php } ?> value="Kabid Aset dan Investasi">
                                                                    Kabid Aset dan Investasi
                                                                </option>
                                                                <option <?php
                                                                        if (in_array("Kabid Akuntansi", $dispo)) { ?> selected <?php } ?> value="Kabid Akuntansi">
                                                                    Kabid Akuntansi
                                                                </option>
                                                            </select>
                                                        </td>
                                                        <td><?= $agenda->catatan ?></td>
                                                        <td><?= $agenda->notulensi ?></td>
                                                        <?php
                                                        if ($session->has('logged_in')) { ?>
                                                            <td>
                                                                <button class="btn ripple btn-primary" data-toggle="dropdown">Aksi<i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#editModal<?= $agenda->id ?>">Edit</button>
                                                                    <?php if ($session->get('role') === "superadmin") { ?>
                                                                        <form action="/admin/agenda/<?= $agenda->id ?>" method="post">
                                                                            <input type="hidden" name="_method" value="DELETE" />
                                                                            <button type="submit" class="dropdown-item">Delete</button>
                                                                        </form>
                                                                    <?php } ?>
                                                                </div>
                                                            </td>
                                                        <?php    }
                                                        ?>
                                                    </tr>

                                                    <div class="modal" id="editModal<?= $agenda->id ?>">
                                                        <div class="modal-dialog modal-xl" role="document">
                                                            <div class="modal-content modal-content-demo">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title">Edit Agenda</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row row-sm">
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="card custom-card">
                                                                                <div class="card-body">
                                                                                    <form action="<?= base_url('/admin/agenda/' . $agenda->id) ?>" method="post">
                                                                                        <input type="hidden" name="_method" value="PUT" />
                                                                                        <?= csrf_field(); ?>
                                                                                        <div class="row row-sm">
                                                                                            <div class="col-md-12 col-lg-12 col-xl-12">
                                                                                                <div class="">
                                                                                                    <?php if ($session->get('role') === "superadmin") { ?>
                                                                                                        <div class="form-group">
                                                                                                            <label class="">Nama Agenda Rapat</label>
                                                                                                            <input class="form-control" required="" placeholder="Isi Nama Agenda Rapat" type="text" id="nama_agenda" name="nama_agenda" value="<?= $agenda->nama_agenda ?>">
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="">Asal Surat</label>
                                                                                                            <div class="pos-relative">
                                                                                                                <input class="form-control pd-r-80" required="" placeholder="Isi Asal Surat" type="text" id="asal_surat" name="asal_surat" value="<?= $agenda->asal_surat ?>">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="">Nomor Surat</label>
                                                                                                            <div class="pos-relative">
                                                                                                                <input class="form-control pd-r-80" required="" placeholder="Isi Nomor Surat" type="number" id="no_surat" name="no_surat" value="<?= $agenda->no_surat ?>">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="">Nomor Surat BKAD</label>
                                                                                                            <div class="pos-relative">
                                                                                                                <input class="form-control pd-r-80" required="" placeholder="Isi Nomor Surat BKAD" type="number" id="no_bkad" name="no_bkad" value="<?= $agenda->no_bkad ?>">
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="row row-sm">
                                                                                                            <div class="col-lg-6">
                                                                                                                <div class="mg-b-20">
                                                                                                                    <label class="">Tempat</label>
                                                                                                                    <div class="form-group">
                                                                                                                        <div class="pos-relative">
                                                                                                                            <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text" id="tempat" name="tempat" value="<?= $agenda->tempat ?>">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-6">
                                                                                                                <div class="mg-b-20">
                                                                                                                    <label class="">Tanggal & Waktu</label>
                                                                                                                    <div class="input-group">
                                                                                                                        <div class="input-group-prepend">
                                                                                                                            <div class="input-group-text">
                                                                                                                                <i class="fe fe-calendar lh--9 op-6"></i>
                                                                                                                            </div>
                                                                                                                        </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="datetime-local" id="tgl" name="tgl" value="<?= $agenda->tgl[0] . " " . $agenda->tgl[1] ?>">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>


                                                                                                        </div>

                                                                                                        <div class="row row-sm">
                                                                                                            <div class="col-lg-4">
                                                                                                                <p class="mg-b-10">Disposisi</p>
                                                                                                                <?php
                                                                                                                $dispo = explode(", ", $agenda->disposisi);
                                                                                                                ?>
                                                                                                                <select class="form-control select2" multiple="multiple" name="disposisi[]">

                                                                                                                    <option <?php
                                                                                                                            if (in_array("Sekertaris", $dispo)) { ?> selected <?php } ?> value="Sekertaris">
                                                                                                                        Sekertaris
                                                                                                                    </option>
                                                                                                                    <option <?php
                                                                                                                            if (in_array("Kabid Anggaran", $dispo)) { ?> selected <?php  } ?> value="Kabid Anggaran">
                                                                                                                        Kabid Anggaran
                                                                                                                    </option>
                                                                                                                    <option <?php
                                                                                                                            if (in_array("Kabid Pembedaharaan", $dispo)) { ?> selected <?php } ?> value="Kabid Pembedaharaan">
                                                                                                                        Kabid Pembedaharaan
                                                                                                                    </option>
                                                                                                                    <option <?php
                                                                                                                            if (in_array("Kabid Aset dan Investasi", $dispo)) { ?> selected <?php } ?> value="Kabid Aset dan Investasi">
                                                                                                                        Kabid Aset dan Investasi
                                                                                                                    </option>
                                                                                                                    <option <?php
                                                                                                                            if (in_array("Kabid Akuntansi", $dispo)) { ?> selected <?php } ?> value="Kabid Akuntansi">
                                                                                                                        Kabid Akuntansi
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>

                                                                                                        </div>

                                                                                                        <div class="row row-sm mg-t-20">
                                                                                                            <div class="col-lg">
                                                                                                                <label class="">Catatan</label>
                                                                                                                <textarea class="form-control" placeholder="Isi Catatan" rows="3" id="catatan" name="catatan"><?= $agenda->catatan ?></textarea>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    <?php }  ?>

                                                                                                    <div class="row row-sm mg-t-20">
                                                                                                        <div class="col-lg">
                                                                                                            <label class="">Notulensi</label>
                                                                                                            <textarea class="form-control" placeholder="" rows="3" id="notulensi" name="notulensi"><?= $agenda->notulensi ?></textarea>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <br>
                                                                                                    <div>
                                                                                                        <button class="btn btn-main-primary " type="submit">Simpan</button>
                                                                                                        <button class="btn btn-secondary" data-dismiss="modal" type="button">Batal</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Large Modal -->
                        <div class="modal" id="modaldemo3">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">Tambah Agenda</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row row-sm">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <form action="/admin/agenda" method="post">
                                                            <input type="hidden" name="_method" value="POST" />

                                                            <?= csrf_field(); ?>
                                                            <div class="row row-sm">
                                                                <div class="col-md-12 col-lg-12 col-xl-12">
                                                                    <div class="">
                                                                        <div class="form-group">
                                                                            <label class="">Nama Agenda Rapat</label>
                                                                            <input class="form-control" required="" placeholder="Isi Nama Agenda Rapat" type="text" id="nama_agenda" name="nama_agenda">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="">Asal Surat</label>
                                                                            <div class="pos-relative">
                                                                                <input class="form-control pd-r-80" required="" placeholder="Isi Asal Surat" type="text" id="asal_surat" name="asal_surat">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="">Nomor Surat</label>
                                                                            <div class="pos-relative">
                                                                                <input class="form-control pd-r-80" required="" placeholder="Isi Nomor Surat" type="number" id="no_surat" name="no_surat">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="">Nomor Surat BKAD</label>
                                                                            <div class="pos-relative">
                                                                                <input class="form-control pd-r-80" required="" placeholder="Isi Nomor Surat BKAD" type="number" id="no_bkad" name="no_bkad">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row row-sm">
                                                                            <div class="col-lg-6">
                                                                                <div class="mg-b-20">
                                                                                    <label class="">Tempat</label>
                                                                                    <div class="form-group">
                                                                                        <div class="pos-relative">
                                                                                            <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text" id="tempat" name="tempat">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="mg-b-20">
                                                                                    <label class="">Tanggal</label>
                                                                                    <div class="input-group">
                                                                                        <div class="input-group-prepend">
                                                                                            <div class="input-group-text">
                                                                                                <i class="fe fe-calendar lh--9 op-6"></i>
                                                                                            </div>
                                                                                        </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="datetime-local" id="tgl" name="tgl">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">

                                                                            </div>
                                                                        </div>

                                                                        <div class="row row-sm">
                                                                            <div class="col-lg-4">
                                                                                <p class="mg-b-10">Disposisi</p>
                                                                                <select class="form-control select2" multiple="multiple" id="disposisi" name="disposisi[]">
                                                                                    <option value="Sekertaris">
                                                                                        Sekertaris
                                                                                    </option>
                                                                                    <option value="Kabid Anggaran">
                                                                                        Kabid Anggaran
                                                                                    </option>
                                                                                    <option value="Kabid Pembedaharaan">
                                                                                        Kabid Pembedaharaan
                                                                                    </option>
                                                                                    <option value="Kabid Aset dan Investasi">
                                                                                        Kabid Aset dan Investasi
                                                                                    </option>
                                                                                    <option value="Kabid Akuntansi">
                                                                                        Kabid Akuntansi
                                                                                    </option>
                                                                                </select>
                                                                            </div>

                                                                        </div>

                                                                        <div class="row row-sm mg-t-20">
                                                                            <div class="col-lg">
                                                                                <label class="">Catatan</label>
                                                                                <textarea class="form-control" placeholder="Isi Catatan" rows="3" id="catatan" name="catatan"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row row-sm mg-t-20">
                                                                            <div class="col-lg">
                                                                                <label class="">Notulensi</label>
                                                                                <textarea class="form-control" placeholder="Isi Notulensi" rows="3" id="notulensi" name="notulensi"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <br>

                                                                        <div>
                                                                            <button class="btn btn-main-primary " type="submit">Simpan</button>
                                                                            <button class="btn btn-secondary" data-dismiss="modal" type="button">Batal</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Main Header-->
<?= $this->endSection() ?>