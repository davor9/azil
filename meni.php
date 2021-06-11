<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="index.php" class="navbar-brand"><img src="pictures/paw.png" height="48px"></a>
    <button class="navbar-toggler" type="button" data-target="#navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="index.php" class="nav-link">Početna stranica</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navdrop" role="button" data-toggle="dropdown" data-hover="dropdown">Obrada Podataka</a>
                <div class="dropdown-menu" aria-labelledby="navdrop">
                    <a href="unosZivotinje.php" class="dropdown-item">Evidentiranje zivotinje</a>
                    <a href="unosVeterinara.php" class="dropdown-item">Evidentiranje veterinara</a>
                </div>  
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navdrop" role="button" data-toggle="dropdown" data-hover="dropdown">Pretraga podataka</a>
                <div class="dropdown-menu" aria-labelledby="navdrop">
                    <a href="prikazSvihZivotinja.php" class="dropdown-item">Prikaz svih zivotinja</a>
                    <a href="pretragaSvihZivotinja.php" class="dropdown-item">Pretraga/brisanje/izmena zivotinja</a>
                    <a href="prikazSvihVeterinara.php" class="dropdown-item">Prikaz svih veterinara</a>
                    <a href="pretragaSvihVeterinara.php" class="dropdown-item">Pretraga/brisanje/izmena veterinara</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navdrop" role="button" data-toggle="dropdown" data-hover="dropdown">Izveštaji</a>
                <div class="dropdown-menu" aria-labelledby="navdrop">
                    <a href="katalogZivotinja.php" class="dropdown-item">Prikaz svih zivotinja</a>
                    <a href="katalogVeterinara.php" class="dropdown-item">Prikaz svih veterinara</a>
                </div>
            </li>
        </ul>
    </div>
    <a class="float-right" href="logout.php">Log out</a>
</nav>