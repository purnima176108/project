<?php require_once 'layouts/header.php'; ?>
    <form action="<?= base_url('Login/acceptData')?>" method="post">
    Name:-
    <input type="text" value="" name="uname">
    <br>
    UID:-
    <input type="text" value="" name="uid">
    <br>
    Password:-
    <input type="password" value="" name="pword">
    <br>
    <input type="submit">
    </form>
    <?php require_once 'layouts/footer.php'; ?>