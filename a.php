<h2>Pertanyaan dan Tugas</h2>
    <form method="post">
            <label>Nama Lengkap: </label>
            <input type="text" name="nama">
            <br>
            <label>Tempat Lahir: </label>
            <input type="text" name="tempat_lahir">
            <br>
            <label>Tanggal Lahir: </label>
            <input type="date" name="tgl_lahir">
            <br>
            <label>Alamat: </label>
            <input type="text" name="alamat">
            <br>
            <label>Pekerjaan:
            <select name='pekerjaan'>
                <option value='Presiden'>Presiden</option>
                <option value='Mentri'>Mentri</option>
                <option value='Gubernur'>Gubernur</option>
                <option value='Bupati'>Bupati</option>
            </select>
            </label>
            <br>
            <input type="submit" value="Kirim">
    </form>
    <h2>Output</h2>
    <?php
        echo '<br> Nama Lengkap : ' . $_POST['nama'];
        echo '<br> Tempat Lahir : ' . $_POST['tempat_lahir'];
        echo '<br> Alamat : ' . $_POST['alamat'];
            $tgl_lahir = @$_POST['tgl_lahir'];
            $lahir = new DateTime($tgl_lahir);
            $hari_ini = new DateTime();
            $diff = $hari_ini->diff($lahir);
        echo "<br> Usia : ". $diff->y ." Tahun";
        echo "<br> Pekerjaan : ". $_POST['pekerjaan'];
            $pekerjaan = @$_POST['pekerjaan'];
            if($pekerjaan == "Presiden"){
                echo '<br> Gaji : Rp. 1.000.000.000,-';
            }
            elseif($pekerjaan == "Mentri"){
                echo '<br> Gaji : Rp. .500.000.000,-';
            }
            elseif($pekerjaan == "Gubernur"){
                echo '<br> Gaji : Rp. 250.000.000,-';
            }
            elseif($pekerjaan == "Bupati"){
                echo '<br> Gaji : Rp. 150.000.000,-';
            }
    ?>
