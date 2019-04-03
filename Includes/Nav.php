<header>
    <div class="logo">
        <a class="<?php echo $pagina == 'index' ?"active" : ''; ?>" href="?page=index">
            <img src="images/logo.png" alt="Logo">
        </a>
    </div>
    <nav>
        <a href="#">Latest</a>
        <a href="#">Video</a>
        <a class="<?php echo $pagina == 'races' ?"active" : ''; ?>" href="?page=races">Races</a>
        <a href="#">Standings</a>
        <a class="<?php echo $pagina == 'driver' ?"active" : ''; ?>" href="?page=driver">Drivers</a>
        <a class="<?php echo $pagina == 'teams' ?"active" : ''; ?>" href="?page=teams">Teams</a>
        <a href="#">Gaming</a>
        <a href="#">Live Timing</a>
    </nav>
</header>