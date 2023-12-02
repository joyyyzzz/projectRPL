<nav class="navbar navbar-expand navbar-dark bg-dark sticky-top">
    <div class="container-lg">
        <a class="navbar-brand" href="."><i class="bi bi-egg-fried"></i> Waroeng Warem</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php echo $hasil['username']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#ModalUbahPassword"><i class="bi bi-key"></i>
                                Ubah Password</a></li>
                        <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal Ubah Password -->
<div class="modal fade" id="ModalUbahPassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-md-down">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate action="proses/proses_ubah_password.php" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input disabled type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="username" required
                                    value="<?php echo $_SESSION['username_waroeng'] ?>">
                                <label for="floatingInput">Email</label>
                                <div class="invalid-feedback">
                                    Email yang dimasukan tidak valid.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                    name="passwordlama" required>
                                <label for="floatingInput">Password Lama</label>
                                <div class="invalid-feedback">
                                    Masukan Password Lama.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput"
                                    name="passwordbaru" required>
                                <label for="floatingInput">Password Baru</label>
                                <div class="invalid-feedback">
                                    Masukan Password Baru.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                    name="repasswordbaru" required>
                                <label for="floatingInput">Ulangi Password Baru</label>
                                <div class="invalid-feedback">
                                    Masukan Kembali Password Baru.
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="ubah_password_validate" value="12345">Save
                            Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Ubah Password -->