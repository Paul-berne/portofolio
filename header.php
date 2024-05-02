<div>
    <link rel="stylesheet" href="css/style_header.css">
    <script src="script.js"></script>
    <nav id="headerli">

        <li><a href="index.php">Acceuil</a></li>
        <li><a href="A1.php">Compétence : A1</a></li>
        <li><a href="A2.php">Compétence : A2</a></li>
        <li><a href="A3.php">Compétence : A3</a></li>
        <li><a href="A4.php">Compétence : A4</a></li>
        <li><a href="A5.php">Compétence : A5</a></li>
        <li><a href="A6.php">Compétence : A6</a></li>
    </nav>
</div>

<script>
let lastScrollTop = 0;
const header = document.querySelector("#headerli");

window.addEventListener("scroll", () => {
    const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScrollTop > lastScrollTop) {
        header.classList.add("hide");
    } else {
        header.classList.remove("hide");
    }

    lastScrollTop = currentScrollTop;
});
</script>