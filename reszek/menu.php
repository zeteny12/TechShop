<link rel="stylesheet" href="css-script/menu.css">

<div class="menu container-fluid">
    <div class="menu-content">
        <!--legördülő-->
        <div class="termek-kategoriak container">
            <a href="index.php" class="fooldal">Főoldal</a>
            <select name="termek-kategoria-select" id="termek-kategoria-select">
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
        </div>

        <!--bejelentkezés - regisztráció-->
        <div class="bejelen-regiszt">
            <div class="keret">
                <a href=""><img src="ikonok/enter.png" alt="Bejelentkezés" title="Bejelentkezés"></a>
                <p class="valaszto">&VerticalLine;</p>
                <a href=""><img src="ikonok/contact-form.png" alt="Regisztráció" title="Regisztráció"></a>
            </div>
        </div>
    </div>
</div>