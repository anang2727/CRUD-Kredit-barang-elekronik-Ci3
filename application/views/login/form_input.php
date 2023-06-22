<body>
    <h2>TAMBAH AKUN</h2>
    <?php
    echo form_open('auth/tambah');
    ?>
    <table class="table table-bordered">
        <tr>
            <td> Username </td>
            <td> <input type="text" name="username" placeholder="Username" class="form-control"> </td>
        </tr>
        <tr>
            <td> Password </td>
            <td> <input type="password" name="password" placeholder="Username" class="form-control"> </td>
        </tr>
        <tr>
            <td>Confirm Password </td>
            <td> <input type="password" name="password" placeholder="Username" class="form-control"> </td>
        </tr>

        <tr>
            <td colspan="2">
            <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
            <?php echo anchor('login', 'back', array('class' => 'btn btn-primary btn-sm')) ?>
            </td>
        </tr>
    </table>
    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
</body>
