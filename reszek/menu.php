<link rel="stylesheet" href="css-script/menu.css">

<div class="menu container-fluid">
    <div class="menu-content">
        <!--legördülő-->
        <div class="termek-kategoriak container">
            <ul>
                <li><a href="index.php" class="fooldal">Főoldal</a></li>
                <li>
                    <select name="termek-kategoria-select" id="termek-kategoria-select" title="Válasszon kategóriát!">
                    <?php
                        $termekkategoria = $db->getOsszesKategoria();

                        if (!empty($termekkategoria)) {
                            foreach ($termekkategoria as $kategoria) {
                                echo '<option value="'.$kategoria['id'].'">'.$kategoria['kategoria'].'</option>';
                            }
                        }
                        else{
                            echo '<option value="">Nincs elérhető kategória!</option>';
                        }
                    ?>
                    </select>
                </li>
            </ul>
        </div>

        <!--reszponzivitás másolat-->
        <ul class="sideBar">
            <li>
                <a onclick=hideSideBar() href="#"><svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a>
            </li>
            <li><a href="index.php" class="fooldal-ketto">Főoldal</a></li>
            <li>
                <select name="termek-kategoria-select-ketto" id="termek-kategoria-select-ketto">
                <?php
                    $termekkategoria = $db->getOsszesKategoria();
                    if (!empty($termekkategoria)) {
                        foreach ($termekkategoria as $kategoria) {
                            echo '<option value="'.$kategoria['id'].'">'.$kategoria['kategoria'].'</option>';
                        }
                     }
                     else{
                         echo '<option value="">Nincs elérhető kategória!</option>';
                    }
                ?>
                </select>
            </li>
            <li>
                <a href="#" class="side-login-register">Bejelentkezés</a>
            </li>
            <li>
                <a href="#" class="side-login-register">Regisztráció</a>
            </li>
        </ul>

        <!--bejelentkezés - regisztráció-->
        <div class="bejelen-regiszt">
            <div class="keret">
                <a href="#"><img src="ikonok/enter.png" alt="Bejelentkezés" title="Bejelentkezés" class="login-register"></a>
                <p class="valaszto login-register">&VerticalLine;</p>
                <a href="#"><img src="ikonok/contact-form.png" alt="Regisztráció" title="Regisztráció" class="login-register"></a>
            </div>
            <a onclick=showSideBar() href="#"><svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a>
        </div>
    </div>
</div>

<!--script-->
<script src="css-script/menu.js"></script>