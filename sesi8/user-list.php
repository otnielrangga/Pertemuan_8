<h3>Daftar User</h3>


<?php
    $sql = "SELECT tu.nama, tu.email, tu.username, tu.iduser, FROM tb_user tu;";
    $hasil = mysqli_query($cnn, $sql);
    $cx = 1;
    while($h = mysqli_fetch_assoc($hasil)){
        echo "<tr>
            <th>"$cx</th>
            <th>".$h["$nama"]."</th>
            <th>".$h["$email"]."</th>
            <th>".$h["$username"]."</th>
            <th>".$h["$"]."</th>
            

        
    }