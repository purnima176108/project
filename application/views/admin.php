<?php require_once 'layouts/header.php'; ?>
    <h1>Admin Dashboard</h1>
    <h2>User : <?=  $this->session->userdata('uid')?></h2>
    <a href="<?= base_url('Login/userLogout') ?>" class="btn btn-primary">Logout</a>
<?php require_once 'layouts/footer.php'; ?>