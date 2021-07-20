<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class = "alert alert-danger role" ="alert">', '</div>') ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalRole">Add New Role</a>

            <?= $this->session->flashdata('message'); ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $r['role'] ?></td>
                            <td>
                                <a href="" class="badge badge-success">Edit</a>
                                <a href="" class="badge badge-danger">Delete</a>
                                <a href="<?= base_url('Admin/admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning">Access</a>
                            </td>
                        </tr>
                        <?php $no++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Modal -->
<div class="modal fade" id="ModalRole" tabindex="-1" aria-labelledby="ModalRoleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalRoleLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/admin/role'); ?>" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" placeholder="Role Name" name="role">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>