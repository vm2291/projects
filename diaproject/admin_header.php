<header class="header">

    <section class="flex">

         <a href="dashboard.php" class="logo"> <img src="img/logo.png" style="width:90px; height:35px;"> <span> ACADEMY </span> </a>

        <form action="search_page.php" method="post" class="search-form">

            <input type="text" placeholder="Search here..." name="search_box">

            <button type="submit" class="fas fa-search" name="search_btn"></button>
        </form>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
        </div>
    </section>
</header>


<div class="side-bar">

    <div class="profile">
        <h3> <?php echo $_SESSION['fullname'];?></h3>
    </div>

    <nav class="navbar">
        <a href="dashboard.php"> <i class="fas fa-home"> </i> <span> Home </span></a>
    <a href="students.php"> <i class="fas fa-users"> </i> <span> Students </span></a>
        <a href="courses.php"> <i class="fas fa-bars-staggered"></i> <span> Courses </span></a>
        <a href="resources.php"> <i class="fas fa-book"></i> <span> Resources </span></a>
        <a href="settings.php"> <i class="fas fa-gear"></i> <span> Settings </span></a>
    </nav>
    
    <nav class="navbtn">
    <a href="logout.php" onclick="return confirm('Log out from this website?');" class="delete-btn"> <i class="fas fa-right-from-bracket"> </i> <span> Log Out </span></i></a>
    </nav>

</div>

