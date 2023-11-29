<?php
    //cek session
    if(!empty($_SESSION['admin'])){
        $query = mysqli_query($config, "SELECT * FROM tbl_instansi");
        while($data = mysqli_fetch_array($query)){
            echo '
                <div class="col s12" id="header-instansi">
                    <div class="card blue-grey white-text">
                        <div class="card-content">';
                            if(!empty($data['logo'])){
                                echo '<div class="circle left"><img class="logo" src="./upload/logo3.png"/></div>';
                            } else {
                                echo '<div class="circle left"><img class="logo" src="./asset/img/logo.png"/></div>';
                            }

                            if(!empty($data['nama'])){
                                echo '<h5 class="ins">SMK  DWIGUNA DEPOK</h5>';
                            } else {
                                echo '<h5 class="ins">SMK  DWIGUNA DEPOK</h5>';
                            }


                            if(!empty($data['alamat'])){
                                echo '<p class="almt">Citayem, Bogor, Jawa Barat</p>';
                            } else {
                                echo '<p class="almt">Citayem, Bogor, Jawa Barat</p>';
                            }
                            echo '
                        </div>
                    </div>
                </div>';
        }
    } else {
        header("Location: ../");
        die();
    }
?>
