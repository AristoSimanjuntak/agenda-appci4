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

            <div>
                <a class="btn ripple btn-info" data-target="#modaldemo3" data-toggle="modal" href="">Tambah Agenda</a>
            </div>


            <div class="table-responsive tasks">
                <table class="table card-table table-vcenter text-nowrap mb-0  border">
                    <thead>
                        <tr>
                            <th class="wd-lg-10p">No</th>
                            <th class="wd-lg-20p">Agenda Rapat</th>
                            <th class="wd-lg-20p">No Surat BPKAD</th>
                            <th class="wd-lg-20p">Tempat</th>
                            <th class="wd-lg-20p">Tanggal & Waktu</th>
                            <th class="wd-lg-20p">Disposisi</th>
                            <th class="wd-lg-20p">Catatan</th>
                            <th class="wd-lg-20p">Notulensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="wd-lg-10p">1</td>
                            <td class="wd-lg-10p">2</td>
                            <td class="wd-lg-10p">3</td>
                            <td class="wd-lg-10p">4</td>
                            <td class="wd-lg-10p">5</td>
                            <td class="wd-lg-10p">6</td>
                            <td class="wd-lg-10p">7</td>
                            <td class="wd-lg-10p">8</td>
                        </tr>
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
                                <div class="row row-sm">
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="">
                                            <div class="form-group">
                                                <label class="">Nama Agenda Rapat</label>
                                                <input class="form-control" required="" placeholder="Isi Nama Agenda Rapat" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label class="">Asal Surat</label>
                                                <div class="pos-relative">
                                                    <input class="form-control pd-r-80" required="" placeholder="Isi Asal Surat" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="">Nomor Surat</label>
                                                <div class="pos-relative">
                                                    <input class="form-control pd-r-80" required="" placeholder="Isi Nomor Surat" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="">Nomor Surat BKAD</label>
                                                <div class="pos-relative">
                                                    <input class="form-control pd-r-80" required="" placeholder="Isi Nomor Surat BKAD" type="int">
                                                </div>
                                            </div>
                                            <div class="row row-sm">
                                                <div class="col-lg-6">
                                                    <div class="mg-b-20">
                                                        <label class="">Tanggal</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fe fe-calendar lh--9 op-6"></i>
                                                                </div>
                                                            </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mg-b-20">
                                                        <label class="">Tempat</label>
                                                        <div class="form-group">
                                                            <div class="pos-relative">
                                                                <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row row-sm">
                                                <div class="col-lg-3">
                                                    <div class="mg-b-20">
                                                        <label class="">Disposisi</label>
                                                        <form action="<?php echo base_url('Agenda/indexView'); ?>" id="selectForm" name="selectForm">
                                                            <div class="d-sm-flex">
                                                                <div class="parsley-select wd-sm-250" id="slWrapper">
                                                                    <select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Pilih Disposisi" required="">
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
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mg-b-20">
                                                        <label class="">Disposisi</label>
                                                        <div class="form-group">
                                                            <div class="pos-relative">
                                                                <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mg-b-20">
                                                        <label class="">Disposisi</label>
                                                        <div class="form-group">
                                                            <div class="pos-relative">
                                                                <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mg-b-20">
                                                        <label class="">Disposisi</label>
                                                        <div class="form-group">
                                                            <div class="pos-relative">
                                                                <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row row-sm mg-t-20">
                                                <div class="col-lg">
                                                    <label class="">Catatan</label>
                                                    <textarea class="form-control" placeholder="Isi Catatan" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group mg-b-20">
                                                <label class="ckbox">
                                                    <input checked type="checkbox"><span class="tx-13">I agree terms and conditions</span>
                                                </label>
                                            </div>
                                            <button class="btn ripple btn-main-primary btn-block">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Large Modal -->