<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>: <?= $_POST['text'] ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>: <?= $_POST['tmp_lahir'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>: <?= $_POST['tgl_lahir'] ?></td>
        </tr>
    </table>
<?php
} else {
    header('Location: form.php');
}
    

?>