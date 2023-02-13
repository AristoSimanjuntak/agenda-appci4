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

                    <!--End row-->

                    <!--row-->
                    <div class="row row-sm">
                        <!-- Tabel -->
                        <div class="col-lg-12">
                            <div class="card custom-card mg-b-20">
                                <div class="card-body">
                                    <div>
                                        <h2 class="main-content-title tx-20 mg-b-5">User / <a href="/"><span class="tx-16">Kembali</span></a></h2>
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
                                    if ($session->has('logged_in')) { ?>
                                        <br>
                                        <div>
                                            <a class="btn ripple btn-info" data-target="#modaldemo3" data-toggle="modal" href="">Tambah User</a>
                                        </div>

                                        <br>

                                    <?php    }
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table" id="example1">
                                            <thead>
                                                <tr>
                                                    <th class="wd-20p">No</th>
                                                    <th class="wd-20p">Nama</th>
                                                    <th class="wd-20p">Username</th>
                                                    <th class="wd-20p">Email</th>
                                                    <th class="wd-20p">Role</th>
                                                    <?php
                                                    if ($session->has('logged_in')) { ?>
                                                        <th>Aksi</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $id => $user) : ?>
                                                    <tr>
                                                        <?php
                                                        // $dt = explode(" ", $agenda['tgl']);
                                                        ?>
                                                        <td> <?= ++$id ?> </td>
                                                        <td><?= $user->pengguna_nama ?></td>
                                                        <td><?= $user->pengguna_username ?></td>
                                                        <td><?= $user->pengguna_email ?></td>
                                                        <td><?= $user->role ?></td>
                                                        <?php
                                                        if ($session->has('logged_in')) { ?>
                                                            <td>
                                                                <button class="btn ripple btn-primary" data-toggle="dropdown">Aksi<i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#editModal<?= $user->id ?>">Edit</button>
                                                                    <form action="/admin/user/<?= $user->id ?>" method="post">
                                                                        <input type="hidden" name="_method" value="DELETE" />
                                                                        <button type="submit" class="dropdown-item">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        <?php    }
                                                        ?>
                                                    </tr>

                                                    <div class="modal" id="editModal<?= $user->id ?>">
                                                        <div class="modal-dialog modal-xl" role="document">
                                                            <div class="modal-content modal-content-demo">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title">Edit User</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row row-sm">
                                                                        <div class="col-lg-12 col-md-12">
                                                                            <div class="card custom-card">
                                                                                <div class="card-body">
                                                                                    <form action="<?= base_url('/admin/user/' . $user->id) ?>" method="post">
                                                                                        <input type="hidden" name="_method" value="PUT" />
                                                                                        <?= csrf_field(); ?>
                                                                                        <div class="row row-sm">
                                                                                            <div class="col-md-12 col-lg-12 col-xl-12">
                                                                                                <div class="">
                                                                                                    <div class="form-group">
                                                                                                        <label class="">Nama</label>
                                                                                                        <input class="form-control" placeholder="Edit Nama" type="text" id="Editnama" name="nama" value="<?= $user->pengguna_nama ?>" required>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label class="">Username</label>
                                                                                                        <div class="pos-relative">
                                                                                                            <input class="form-control pd-r-80" placeholder="Username" type="text" id="Editusername" name="username" value="<?= $user->pengguna_username ?>" required>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label class="">Email</label>
                                                                                                        <div class="pos-relative">
                                                                                                            <input class="form-control pd-r-80" placeholder="Edit Email" type="email" id="editEmail" name="email" value="<?= $user->pengguna_email ?>" required>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row row-sm">
                                                                                                        <div class="col-lg-4">
                                                                                                            <p class="mg-b-10">Role</p>

                                                                                                            <select class="form-control select2" name="role">
                                                                                                                <option value="superadmin" <?php if ($user->role === "superadmin") {
                                                                                                                                                echo "selected";
                                                                                                                                            } ?>>
                                                                                                                    Super Admin
                                                                                                                </option>
                                                                                                                <option value="admin" <?php if ($user->role === "admin") {
                                                                                                                                            echo "selected";
                                                                                                                                        } ?>>
                                                                                                                    Admin
                                                                                                                </option>

                                                                                                            </select>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label class="">Password</label>
                                                                                                        <div class="pos-relative">
                                                                                                            <input class="form-control pd-r-80 editPass" placeholder="Password" type="password" id="editPass" name="password">
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
                                        <h6 class="modal-title">Tambah User</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row row-sm">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <form action="/admin/user" method="post">
                                                            <input type="hidden" name="_method" value="POST" />

                                                            <?= csrf_field(); ?>
                                                            <div class="row row-sm">
                                                                <div class="col-md-12 col-lg-12 col-xl-12">
                                                                    <div class="">
                                                                        <div class="form-group">
                                                                            <label class="">Nama</label>
                                                                            <input class="form-control" required="" placeholder="Isikan Nama" type="text" id="nama" name="nama">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="">Username</label>
                                                                            <div class="pos-relative">
                                                                                <input class="form-control pd-r-80" required="" placeholder="Username" type="text" id="username" name="username">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="">Email</label>
                                                                            <div class="pos-relative">
                                                                                <input class="form-control pd-r-80" required="" placeholder="Masukkan Email" type="email" id="email" name="email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div>
                                                                                <p class="mg-b-10">Role</p>
                                                                                <select class="form-control select2" placeholder="Pilih Role" id="role" name="role">
                                                                                    <option value="superadmin">
                                                                                        Super Admin
                                                                                    </option>
                                                                                    <option value="admin">
                                                                                        Admin
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="">Password</label>
                                                                            <div class="pos-relative">
                                                                                <input class="form-control pd-r-80" placeholder="Password" type="password" id="pass" name="password" value="">
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
                <!-- col end -->

                <!-- Row end -->
            </div>
        </div>
    </div>
</div>



<!-- End Main Header-->
<?= $this->endSection() ?>