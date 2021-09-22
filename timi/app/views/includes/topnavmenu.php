<div class="container ">
        <div class="row">
            <div class="col-sm-12 ">
                <a href="index.php"><img id="main-image" src= '<?php echo URLROOT ?>/public/imagesdb/cropped-Leafware_party-1.jpg'  ></a>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row">
            <div class="col-sm-12 ">

                <nav class="navbar navbar-expand-sm navbar-custom">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"
                        aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-reorder" style="color: #929292"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" id="rolunk" href="<?php echo URLROOT; ?>/pages/rolunk">Rólunk</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" id="termekek" href="termekek.php">Termékek</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="gyik" href="<?php echo URLROOT; ?>/pages/gyik">GYIK</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" id="kapcsolat" href= "<?php echo URLROOT; ?>/pages/kapcsolat">Kapcsolat</a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Letöltések
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="resources/Katalogus_hungri.pdf" download>Katalógus letöltése</a>
                                </div>
                            </li>
                            <?php
                            //  if (isset($_SESSION['UID'])){
                            //      echo'       <li class="nav-item">
                            //                   <a class="nav-link" href= "logout.php">KilÃ©pÃ©s</a>
                            //                   </li>';
                            //  }
                            //  else{
                            //      echo'       <li class="nav-item">
                            //                  <a class="nav-link" href= "login.php">BelÃ©pÃ©s</a>
                            //                   </li>';

                            //  } 
                                ?>
               



                           

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>