<?php 

session_start();

if(!isset($_SESSION['userid'])){
    header('location:login.php');
}
    $fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap.css">

</head>
<body>  
    <style>
  body {
     width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.50), rgba(0,0,0,0.50)),url(img/sea.webp);
    background-size: cover;
    background-position: center;
    position:relative;  
  }
  .container2{
   position:fixed;
   top:40%;
   left:40%;
   width:500px;


  }
  .h1{
    text-align: left;
    display: flex;
    flex-direction: row;
       z-index: 100;
    left: 0;
    width: 50%;
    padding: 0;
  }
  .nav-flex-row {
    display: flex;
    flex-direction: row;
    justify-content: center;
    position: absolute;
    z-index: 100;
    left: 0;
    width: 100%;
    padding: 0;
}
 
.nav-flex-row li {
    text-decoration: none;
    list-style-type: none;
    padding: 5px 15px;
    color: darkred;
}
 
.nav-flex-row li a {
    font-family: 'Big Shoulders Text', fantasy;
    color: floralwhite;
    font-size: 1.5em;
    text-transform: uppercase;
    font-weight: 300;
}
.nav-flex-row li a:hover{
    background: black;
    text-decoration: none;
}
/*========== GOOGLE FONTS ==========*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

/*========== VARIABLES CSS ==========*/
:root {
  --header-height: 3.5rem;
  --nav-width: 219px;

  /*========== Colors ==========*/
  --first-color: #FFFFFF;
  --first-color-light: gray;
  --title-color: #FFFFFF;
  --text-color: #FFFFFF;
  --text-color-light: gray;
  --body-color: gray;
  --container-color: black;

  /*========== Font and typography ==========*/
  --body-font: 'Poppins', sans-serif;
  --normal-font-size: .938rem;
  --small-font-size: .75rem;
  --smaller-font-size: .75rem;

  /*========== Font weight ==========*/
  --font-medium: 500;
  --font-semi-bold: 600;

  /*========== z index ==========*/
  --z-fixed: 100;
}

@media screen and (min-width: 1024px) {
  :root {
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

/*========== BASE ==========*/
*, ::before, ::after {
  box-sizing: border-box;
}

body {
  margin: var(--header-height) 0 0 0;
  padding: 1rem 1rem 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  background-color: var(--body-color);
  color: var(--text-color);
}

h3 {
  margin: 0;
}

a {
  text-decoration: none;
}
img{
  max-width: 50%;
  height: auto;  
}
.img {
  max-width: 50%;
  height: auto;
 margin-left: 50%;
    position:relative;  
     float: right;
}

/*========== HEADER ==========*/
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: var(--container-color);
  box-shadow: 0 1px 0 rgba(22, 8, 43, 0.1);
  padding: 0 1rem;
  z-index: var(--z-fixed);
}

.header__container {
  display: flex;
  align-items: center;
  height: var(--header-height);
  justify-content: space-between;
}

.header__img {
  width: 35px;
  height: 35px;
  border-radius: 50%;
}

.header__logo {
  color: var(--title-color);
  font-weight: var(--font-medium);
  display: none;
}

.header__search {
  display: flex;
  padding: .40rem .75rem;
  background-color: var(--first-color-light);
  border-radius: .25rem;
}

.header__input {
  width: 100%;
  border: none;
  outline: none;
  background-color: var(--first-color-light);
}

.header__input::placeholder {
  font-family: var(--body-font);
  color: var(--text-color);
}

.header__icon, 
.header__toggle {
  font-size: 1.2rem;
}

.header__toggle {
  color: var(--title-color);
  cursor: pointer;
}

/*========== NAV ==========*/
.nav {
  position: fixed;
  top: 0;
  left: -100%;
  height: 100vh;
  padding: 1rem 1rem 0;
  background-color: var(--container-color);
  box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
  z-index: var(--z-fixed);
  transition: .4s;
}

.nav__container {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding-bottom: 3rem;
  overflow: auto;
  scrollbar-width: none; /* For mozilla */
}

/* For Google Chrome and others */
.nav__container::-webkit-scrollbar {
  display: none;
}

.nav__logo {
  font-weight: var(--font-semi-bold);
  margin-bottom: 2.5rem;
}

.nav__list, 
.nav__items {
  display: grid;
}

.nav__list {
  row-gap: 2.5rem;
}

.nav__items {
  row-gap: 1.5rem;
}

.nav__subtitle {
  font-size: var(--normal-font-size);
  text-transform: uppercase;
  letter-spacing: .1rem;
  color: var(--text-color-light);
}

.nav__link {
  display: flex;
  align-items: center;
  color: var(--text-color);
}

.nav__link:hover {
  color: var(--first-color);
}

.nav__icon {
  font-size: 1.2rem;
  margin-right: .5rem;
}

.nav__name {
  font-size: var(--small-font-size);
  font-weight: var(--font-medium);
  white-space: nowrap;
}

.nav__logout {
  margin-top: 5rem;
}

/* Dropdown */
.nav__dropdown {
  overflow: hidden;
  max-height: 21px;
  transition: .4s ease-in-out;
}

.nav__dropdown-collapse {
  background-color: var(--first-color-light);
  border-radius: .25rem;
  margin-top: 1rem;
}

.nav__dropdown-content {
  display: grid;
  row-gap: .5rem;
  padding: .75rem 2.5rem .75rem 1.8rem;
}

.nav__dropdown-item {
  font-size: var(--smaller-font-size);
  font-weight: var(--font-medium);
  color: var(--text-color);
}

.nav__dropdown-item:hover {
  color: var(--first-color);
}

.nav__dropdown-icon {
  margin-left: auto;
  transition: .4s;
}

/* Show dropdown collapse */
.nav__dropdown:hover {
  max-height: 100rem;
}

/* Rotate icon arrow */
.nav__dropdown:hover .nav__dropdown-icon {
  transform: rotate(180deg);
}

/*===== Show menu =====*/
.show-menu {
  left: 0;
}

/*===== Active link =====*/
.active {
  color: var(--first-color);
}

/* ========== MEDIA QUERIES ==========*/
/* For small devices reduce search*/
@media screen and (max-width: 320px) {
  .header__search {
    width: 70%;
  }
}

@media screen and (min-width: 768px) {
  body {
    padding: 1rem 3rem 0 6rem;
  }
  .header {
    padding: 0 3rem 0 6rem;
  }
  .header__container {
    height: calc(var(--header-height) + .5rem);
  }
  .header__search {
    width: 300px;
    padding: .55rem .75rem;
  }
  .header__toggle {
    display: none;
  }
  .header__logo {
    display: block;
  }
  .header__img {
    width: 40px;
    height: 40px;
    order: 1;
  }
  .nav {
    left: 0;
    padding: 1.2rem 1.5rem 0;
    width: 68px; /* Reduced navbar */
  }
  .nav__items {
    row-gap: 1.7rem;
  }
  .nav__icon {
    font-size: 1.3rem;
  }

  /* Element opacity */
  .nav__logo-name, 
  .nav__name, 
  .nav__subtitle, 
  .nav__dropdown-icon {
    opacity: 0;
    transition: .3s;
  }
  
  
  /* Navbar expanded */
  .nav:hover {
    width: var(--nav-width);
  }
  
  /* Visible elements */
  .nav:hover .nav__logo-name {
    opacity: 1;
  }
  .nav:hover .nav__subtitle {
    opacity: 1;
  }
  .nav:hover .nav__name {
    opacity: 1;
  }
  .nav:hover .nav__dropdown-icon {
    opacity: 1;
  }
}

    </style>


   <?php if($role == 1): ?>
<!--========== HEADER ==========-->
       <header class="header">
               <img src="img/cake.jpeg" alt="" class="header__img">
          <div class="header__container">
   
                <a href="#" class="header__logo">Admin</a>
    
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name">Admin Dashboard</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="index.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Profile</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <!-- <a href="#" class="nav__dropdown-item">Passwords</a> -->
                                        <a href="#" class="nav__dropdown-item">Admin Accounts</a>
                                        <a href="userlist.php" class="nav__dropdown-item"> User Accounts</a>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Messages</span>
                            </a>
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Notifications</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="products.php" class="nav__dropdown-item">Create Product</a>
                                        <a href="reservation.php" class="nav__dropdown-item">Reservation List</a>
                                        <!-- <a href="#" class="nav__dropdown-item">Silenced</a>
                                        <a href="#" class="nav__dropdown-item">Publish</a>
                                        <a href="#" class="nav__dropdown-item">Program</a> -->
                                    </div>
                                </div>

                            </div>
<!-- 
                            <a href="#" class="nav__link">
                                <i class='bx bx-compass nav__icon' ></i>
                                <span class="nav__name">Explore</span>
                            </a>
                            <a href="#" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Saved</span>
                            </a> -->
                        </div>
                    </div>
                </div>

                <a href="logout.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Logout <?php echo $fullname; ?></span>
                </a>
            </nav>
        </div>
 <?php endif ?>