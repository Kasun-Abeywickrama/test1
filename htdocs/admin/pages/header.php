<div class="side-bar">

    <a href="../../index.php">
        <div class="side-bar-logo">
            <div class="logo-icon-img"></div>
            <div class="logo-icon" id="logo-name" title="Home">MobilePlanet</div>
        </div>
    </a>
    <div class="links-wrapper">
        <ul>
            <li><a href="dashboard.php"><i class='bx bxs-dashboard'></i>
                    <div>Dashboard</div>
                </a></li>

            <li><a href="Item-Insert.php"><i class='bx bx-cuboid'></i>
                    <div>Add product</div>
                </a></li>

            <li><a href="update-company-info.php"><i class='bx bxs-cog'></i>
                    <div>Settings</div>
                </a></li>
            <li><a href="../../includes/logout.inc.php"><i class='bx bx-log-out'></i>
                    <div>Log out</div>
                </a></li>
        </ul>
    </div>
</div>

<div class="top-bar">

    <div class="logo">
        <div class="toggle-btn" id="side-bar-toggle-btn"><i class='bx bx-menu-alt-left'></i></div>

    </div>
    <div class="s-bar" style="font-size:30px; text-align:center; font-weight:600;">Admin Panel</div>
    <div class="r-b-panel">
        <div class="user-icon">A</div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script>
    let side_bar_btn = document.getElementById("side-bar-toggle-btn");
    let side_bar = document.querySelector(".side-bar");

    side_bar_btn.onclick = function () {
        side_bar.classList.toggle("active");
    }
    if (window.screen.width < 450) {
        side_bar.classList.toggle("active");
    }
</script>

<!-- <script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script> -->

