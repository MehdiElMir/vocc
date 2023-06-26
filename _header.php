<header>
    <div class="custom-navbar">
        <div class="logo">
            <img src="img/vocc_logo.png" alt="vocc_logo">
        </div>
        <ul class="links">
            <li><a href="index.php"><img src="img/home_logo.png" alt="home_logo"></a></li>
            <li><a href="apropos.php">à propos</a></li>
            <li><a href="methode.php">méthode</a></li>
            <li><a href="prestations.php">préstations</a></li>
            <li><a href="formations.php">formations</a></li>
            <li><a href="contact.php">contact</a></li>
        </ul>
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="dropdown_menu">
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="apropos.php">à propos</a></li>
            <li><a href="methode.php">méthode</a></li>
            <li><a href="prestations.php">préstations</a></li>
            <li><a href="formations.php">formations</a></li>
            <li><a href="contact.php">contact</a></li>
        </ul>
    </div>
</header>
<script>
    const toggleBtn = document.querySelector('.toggle_btn')
    const toggleBtnIcon = document.querySelector('.toggle_btn i')
    const dropDownMenu = document.querySelector('.dropdown_menu')

    toggleBtn.onclick = function (){
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')

        toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
    }
</script>