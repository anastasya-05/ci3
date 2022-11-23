<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- pesan eror -->
            <?= form_error(
                'menu',
                '</div class="alert alert-success" role"=alert"></div>'
            ); ?>
            <?= $this->session->flashdata('message'); ?>
            <!-- akhir pesan eror -->

                <!-- tombol tambah -->
                <a href="#" class="btn btn-primary mb-3" class="btn btn-primary"
                data-toggle="modal" data-target="#addNewRole">Add New Role</a>
                <!-- Tabel -->
                <table class="table table-hover">
                 <thead>
                    <tr>
                            <th scope="col">#</th>
                            <th scope="col">Role</th>
                            <th sccope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $r['role']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/roleaccess/') . $r['id'] ?>" 
                                class="btn btn-warning">Access</a>
                                <a href="#" class="btn btn-success" data-toggle="modal" data-popup="tooltip" data-placement="top" title="edit"
                                data-target="#roleedit<?= $r['id'] ?>">Edit</a>
                                <button onclick="hapusRole('<?= base_url('admin/hapusrole/') . $r['id'] ?>')"
                                class="btn btn-danger bt-sm tombol-hapus">Delete</button>
                                
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <!-- akhir tabel -->

                    </div>
                </div>

            </div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Button trigge modal -->

<!-- Modal -->
<div class="modal fade" id="addNewRole" tabindex="-1"
aria-labellaedby="addNewRolelabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewRolelabel">Add New Role</h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="from-group">
                        <input type="text" class="form-control" id="role"
                        name="role" placeholder="Menu role">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn  btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
                    
<!-- Modal edit -->
<?php foreach ($role as $r) : ?>

<div class="modal fade" id="roleedit<?= $r['id'] ?>" tabindex="-1"
aria-labellaedby="roleeditlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleeditlabel">Edit Role</h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/editrole'); ?>" method="post">
                <div class="modal-body">
                    <div class="from-group">
                        <input type="text" value="<?= $r['role'] ?>" class="form-control" id="role"
                        name="role" placeholder="Menu role">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn  btn-primary">Add</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
