<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<!-- Header -->

<body>


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="about-us.php">About</a>
        <li><a href="shops.php">Shop</a></li>
        <li><a href="blogs.php">Blogs</a></li>

    </div>



    <header class="header">
        <div class="container">
            <div class="header__main">
                <a href="index.php" class="header__logo">
                    <img src="images/logo-img.png" alt="logo" class="imgFluid">
                </a>
                <ul class="header__nav">
                    <li>
                        <form class="search-bar">
                            <input type="text" placeholder="Search" class="search__input">
                            <button type="button" class="search__btn">
                                <i class='bx bx-search-alt-2'></i>
                            </button>
                        </form>
                    </li>
                    <li><a href="javascript:void(0)"><i class='bx bx-user'></i></a></li>
                    <li><a href="javascript:void(0)"><i class='bx bx-cart'></i></a></li>
                    <li><a href="javascript:void(0)" onclick="openNav()"><i class='bx bx-menu-alt-right'></i></a></li>
                </ul>
            </div>
        </div>
    </header>