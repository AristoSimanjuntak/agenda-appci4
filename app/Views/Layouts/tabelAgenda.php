<div>
    <h2 class="main-content-title tx-20 mg-b-5">Daftar Agenda </h2>
</div>
<div class="col-lg-12">
    <div class="card custom-card mg-b-20">
        <div class="card-body">
            <!--<div class="card-header border-bottom-0 pt-0 pl-0 pr-0 d-flex">

                <div>
                    <a href="/Agenda" class="btn btn-primary"> <i class="bi bi-plus"></i> Tambah Agenda</a>
                </div>
            </div>-->
            <?php
            if (session()->getFlashData('success')) {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashData('success') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            ?>

            <?php

            if ($session->has('logged_in')) { ?>

                <div>
                    <a class="btn ripple btn-info" data-target="#modaldemo3" data-toggle="modal" href="">Tambah Agenda</a>
                </div>

            <?php    }

            ?>



            <div class="table-responsive tasks">
                <table class="table card-table table-vcenter text-nowrap mb-0  border">
                    <thead>
                        <tr>
                            <th class="wd-lg-10p">No</th>
                            <th class="wd-lg-20p">Agenda Rapat</th>
                            <th class="wd-lg-20p">asal Surat</th>
                            <th class="wd-lg-20p">No Surat</th>
                            <th class="wd-lg-20p">No Surat BPKAD</th>
                            <th class="wd-lg-20p">Tempat</th>
                            <th class="wd-lg-20p">Tanggal</th>
                            <!-- <th class="wd-lg-20p">Waktu</th> -->
                            <th class="wd-lg-20p">Disposisi</th>
                            <th class="wd-lg-20p">Catatan</th>
                            <th class="wd-lg-20p">Notulensi</th>

                            <?php

                            if ($session->has('logged_in')) { ?>

                                <th class="wd-lg-20p">Aksi</th>

                            <?php    }

                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($home as $id => $agenda) : ?>
                            <tr>
                                <td class="wd-lg-10p"> <?= ++$id ?> </td>
                                <td class="wd-lg-10p"><?= $agenda['nama_agenda'] ?></td>
                                <td class="wd-lg-10p"><?= $agenda['asal_surat'] ?></td>
                                <td class="wd-lg-10p"><?= $agenda['no_surat'] ?></td>
                                <td class="wd-lg-10p"><?= $agenda['no_bkad'] ?></td>
                                <td class="wd-lg-10p"><?= $agenda['tempat'] ?></td>
                                <td class="wd-lg-10p"><?= $agenda['tgl'] ?></td>

                                <td class="wd-lg-10p"><?= $agenda['disposisi'] ?></td>
                                <td class="wd-lg-10p"><?= $agenda['catatan'] ?></td>
                                <td class="wd-lg-10p"><?= $agenda['notulensi'] ?></td>

                                <?php
                                if ($session->has('logged_in')) { ?>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                                            Edit
                                        </button>
                                        <form action="/admin/agenda/<?= $agenda['id'] ?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                <?php    }
                                ?>
                            </tr>

                            <div class="modal" id="editModal">
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
                                                            <form action="<?= base_url('/admin/agenda/' . $agenda['id']) ?>" method="post">
                                                                <input type="hidden" name="_method" value="PUT" />
                                                                <?= csrf_field(); ?>
                                                                <div class="row row-sm">
                                                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                                                        <div class="">
                                                                            <div class="form-group">
                                                                                <label class="">Nama Agenda Rapat</label>
                                                                                <input class="form-control" required="" placeholder="Isi Nama Agenda Rapat" type="text" id="nama_agenda" name="nama_agenda" value="<?= $agenda['nama_agenda'] ?>">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="">Asal Surat</label>
                                                                                <div class="pos-relative">
                                                                                    <input class="form-control pd-r-80" required="" placeholder="Isi Asal Surat" type="text" id="asal_surat" name="asal_surat" value="<?= $agenda['asal_surat'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="">Nomor Surat</label>
                                                                                <div class="pos-relative">
                                                                                    <input class="form-control pd-r-80" required="" placeholder="Isi Nomor Surat" type="text" id="no_surat" name="no_surat" value="<?= $agenda['no_surat'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="">Nomor Surat BKAD</label>
                                                                                <div class="pos-relative">
                                                                                    <input class="form-control pd-r-80" required="" placeholder="Isi Nomor Surat BKAD" type="number" id="no_bkad" name="no_bkad" value="<?= $agenda['no_bkad'] ?>">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row row-sm">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mg-b-20">
                                                                                        <label class="">Tempat</label>
                                                                                        <div class="form-group">
                                                                                            <div class="pos-relative">
                                                                                                <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text" id="tempat" name="tempat" value="<?= $agenda['tempat'] ?>">
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
                                                                                            </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="datetime-local" id="tgl" name="tgl" value="<?= $agenda['tgl'] ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- <div class="form-group">
                                                                                    <label class="">Waktu</label>
                                                                                    <div class="pos-relative">
                                                                                        <input class="form-control pd-r-80" required="" placeholder="" type="time" id="waktu" name="waktu" value="">
                                                                                    </div>
                                                                                </div> -->

                                                                            </div>

                                                                            <div class="row row-sm">
                                                                                <div class="col-lg-3">
                                                                                    <div class="mg-b-20">
                                                                                        <label class="">Disposisi</label>
                                                                                        <div class="d-sm-flex">
                                                                                            <div class="parsley-select wd-sm-250" id="slWrapper">
                                                                                                <select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Pilih Disposisi" required="" id="disposisi" name="disposisi" value="<?= $agenda['disposisi'] ?>">
                                                                                                    <option label="Choose one">
                                                                                                    </option>
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
                                                                                                <div id="slErrorContainer"></div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <!-- <div class="col-lg-3">
                                                                                        <div class="mg-b-20">
                                                                                            <label class="">Disposisi</label>
                                                                                            <div class="form-group">
                                                                                                <div class="pos-relative">
                                                                                                    <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text" id="" name="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-3">
                                                                                        <div class="mg-b-20">
                                                                                            <label class="">Disposisi</label>
                                                                                            <div class="form-group">
                                                                                                <div class="pos-relative">
                                                                                                    <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text" id="" name="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-3">
                                                                                        <div class="mg-b-20">
                                                                                            <label class="">Disposisi</label>
                                                                                            <div class="form-group">
                                                                                                <div class="pos-relative">
                                                                                                    <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text" id="" name="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> -->

                                                                            </div>

                                                                            <div class="row row-sm mg-t-20">
                                                                                <div class="col-lg">
                                                                                    <label class="">Catatan</label>
                                                                                    <textarea class="form-control" placeholder="Isi Catatan" rows="3" id="catatan" name="catatan"><?= $agenda['catatan'] ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row row-sm mg-t-20">
                                                                                <div class="col-lg">
                                                                                    <label class="">Notulensi</label>
                                                                                    <textarea class="form-control" placeholder="" rows="3" id="notulensi" name="notulensi"><?= $agenda['notulensi'] ?></textarea>
                                                                                </div>
                                                                            </div>

                                                                            <br>
                                                                            <div class="form-group mg-b-20">
                                                                                <label class="ckbox">
                                                                                    <input checked type="checkbox"><span class="tx-13">I agree terms and conditions</span>
                                                                                </label>
                                                                            </div>
                                                                            <button class="btn ripple btn-main-primary btn-block" type="submit">Submit</button>
                                                                            <button class="btn ripple btn-secondary btn-block" data-dismiss="modal" type="button">Close</button>
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
                                                        <input class="form-control pd-r-80" required="" placeholder="Isi Nomor Surat" type="text" id="no_surat" name="no_surat">
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
                                                    <!-- <div class="col-lg-6">
                                                        <div class="mg-b-20">
                                                            <label class="">waktu</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fe fe-calendar lh--9 op-6"></i>
                                                                    </div>
                                                                </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="time" id="waktu" name="waktu">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-lg-6">

                                                    </div>
                                                </div>

                                                <div class="row row-sm">
                                                    <div class="col-lg-4">
                                                        <p class="mg-b-10">Disposisi</p>
                                                        <select class="form-control select2" multiple="multiple" id="disposisi" name="disposisi">
                                                            <option value="Sekertaris" id="sekertaris" name="sekertaris">
                                                                Sekertaris
                                                            </option>
                                                            <option value="Kabid Anggaran" id="anggaran" name="anggaran">
                                                                Kabid Anggaran
                                                            </option>
                                                            <option value="Kabid Pembedaharaan" id="bendahara" name="bendahara">
                                                                Kabid Pembedaharaan
                                                            </option>
                                                            <option value="Kabid Aset dan Investasi" id="aset" name="aset">
                                                                Kabid Aset dan Investasi
                                                            </option>
                                                            <option value="Kabid Akuntansi" id="akuntan" name="akuntan">
                                                                Kabid Akuntansi
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <!-- <div class="col-lg-3">
                                                        <div class="mg-b-20">
                                                            <label class="">Disposisi</label>
                                                            <div class="d-sm-flex">
                                                                <div class="parsley-select wd-sm-250" id="slWrapper">
                                                                    <select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Pilih Disposisi" required="" id="disposisi" name="disposisi">
                                                                        <option label="Choose one">
                                                                        </option>
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
                                                                    <div id="slErrorContainer"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-3">
                                                        <div class="mg-b-20">
                                                            <label class="">Disposisi</label>
                                                            <div class="form-group">
                                                                <div class="pos-relative">
                                                                    <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text" id="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mg-b-20">
                                                            <label class="">Disposisi</label>
                                                            <div class="form-group">
                                                                <div class="pos-relative">
                                                                    <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text" id="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mg-b-20">
                                                            <label class="">Disposisi</label>
                                                            <div class="form-group">
                                                                <div class="pos-relative">
                                                                    <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text" id="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->

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
                                                <div class="form-group mg-b-20">
                                                    <label class="ckbox">
                                                        <input checked type="checkbox"><span class="tx-13">I agree terms and conditions</span>
                                                    </label>
                                                </div>
                                                <button class="btn ripple btn-main-primary btn-block" type="submit">Submit</button>
                                                <button class="btn ripple btn-secondary btn-block" data-dismiss="modal" type="button">Close</button>
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