<h2>Tugas</h2>
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
                <option value='Programmer'>Prgrammer</option>
                <option value='Software Enginer'>Software Enginer</option>
                <option value='IT Konsultan'>IT Konsultan</option>
                <option value='Database Enginer'>Database Enginer</option>
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
            if($pekerjaan == "Prgrammer"){
                echo '<br> Gaji : Rp. 10.000.000,-';
            }
            elseif($pekerjaan == "Software Enginer"){
                echo '<br> Gaji : Rp. 19.500.000,-';
            }
            elseif($pekerjaan == "IT Konsultan"){
                echo '<br> Gaji : Rp. 14.000.000,-';
            }
            elseif($pekerjaan == "Database Enginer"){
                echo '<br> Gaji : Rp. 12.000.000,-';
            }
    ?>