<nav class="navbar  navbar-expand-md py-1 sticky-top border-bottom border-primary">
    <!--Nav bar responsive-->
    <div class="container-fluid ">
        <button class="navbar-toggler m-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="bi bi-list fs-1 open-menu"></i>
        </button>
        <div class="collapse navbar-collapse my-2" id="navbarNav">

            <ul class="navbar-nav   me-auto ">
                <li class="nav-item">
                    <a href="#bal_100" class="nav-link btn btn-gauche text-uppercase mx-2 px-3 " role="button">100%
                        Snowboard</a>
                </li>
                <li class="nav-item">
                    <a href="#bal_cours" class="nav-link btn btn-gauche text-uppercase mx-2 px-3"
                        role="button"><?php echo _MENUCOURS ;?></a>
                </li>
                <li class="nav-item">
                    <a href="#bal_tarifs" class="nav-link btn btn-gauche text-uppercase mx-2 px-3"
                        role="button"><?php echo _MENUTARIFS ;?></a>
                </li>


            </ul>
            <ul class="navbar-nav">
                <li class="nav-item pt-1">
                    <a href="tel:+33627173941" class="nav-link btn btn-droite  mx-2 px-3" role="button"><i
                            class="bi bi-telephone-fill"></i>+33 (0)6 27 17 39 41</a>
                </li>
                <li class="nav-item d-flex justify-content-center">
                    <a href="#bal_contacts" class="nav-link btn px-2"><i class="bi bi-geo-alt-fill fs-5"></i></a>
                    <a href="#bal_contacts" class="nav-link btn px-2"><i class="bi bi-envelope fs-5"></i></a>
                </li>

                <li class="nav-item d-flex justify-content-center align-items-center  pt-1">
                    <form action="<?php echo $_SESSION['pageactuelle'];?>" method="post">
                        <input type="hidden" name="langage" value="fr" />
                        <INPUT type="image" src="images/fr.png" alt="icone FR pour une traduction en francais">
                    </form>
                    <form action=" <?php echo $_SESSION['pageactuelle'];?>" method="post">
                        <input type="hidden" name="langage" value="en" />
                        <INPUT class="rounded-0 border-start ps-1" type="image" src="images/en.png"
                            alt="icone ENG pour une traduction en anglais">
                    </form>

                </li>
            </ul>

        </div>

</nav>