<?php
session_start();
include("header.php");
include("dbconnection.php");
error_reporting(0);
if(!isset($_SESSION['user_id']))
{
	header("location:home.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    html, body {
    font-family: Arial, Helvetica, sans-serif;
}

/* define a fixed width for the entire menu */
.navigation {
  width: 300px;
}

/* reset our lists to remove bullet points and padding */
.mainmenu, .submenu {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* make ALL links (main and submenu) have padding and background color */
.mainmenu a {
  display: block;
  background-color: #1D1D1D;
  text-decoration: none;
  padding: 7px;
  color: silver;
}

/* add hover behaviour */
.mainmenu a:hover {
    color: #FFFFFF;
}


/* when hovering over a .mainmenu item,
  display the submenu inside it.
  we're changing the submenu's max-height from 0 to 200px;
*/

.mainmenu li:hover .submenu {
  display: block;
  max-height: 300px;
}

.mainmenu li a{
text-decoration:none;
}

/*
  we now overwrite the background-color for .submenu links only.
  CSS reads down the page, so code at the bottom will overwrite the code at the top.
*/

.submenu a {
  background-color:#2B2B2B;
  padding:12px;
}

/* hover behaviour for links inside .submenu */
.submenu a:hover {
  background-color: darkgray;
  color: black;
}

/* this is the initial state of all submenus.
  we set it to max-height: 0, and hide the overflowed content.
*/
submenu {
  overflow: hidden;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
}

</style>
<body>


<div class="container-fluid mt-1">
<div class="containter">
<div class="row">  
    <div class="col-sm-3 bg-light">
    <!--  
    <div class="sidebar-header mt-1 mb-3">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="images.jpg" height="50px" width="50px" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name text-info">
                            <strong>Admin</strong><br>
                        </span>
                        <span class="user-role"><small>Administrator</small></span>&nbsp;&nbsp;&nbsp;
                        <span class="user-status">
                           <small><i class="fa fa-circle text-success"></i>
                            <span>Online</span>
                           </small>
                        </span>
                    </div>
      </div>
    -->
      <ul class="mainmenu">
        <li><a href="">Stories</a>
          <ul class="submenu">
            <li><a href="stories.php" target="resultframe"><small><i class="fas fa-edit pr-2"></i>Add Story</small></a></li>
            <li><a href="storieslist.php" target="resultframe"><small><i class="fas fa-edit pr-2"></i>Edit Story</small></a></li>
            <li><a href="deletestory.php" target="resultframe"><small><i class="fas fa-trash pr-2"></i>Delete Story</small></a></li>
            <li><a href="recreation.php" target="resultframe"><small><i class="fas fa-trash pr-2"></i>Recreational Activities</small></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="col-sm-9 bg-light">
        <iframe name="resultframe" height="700px" width="100%" seamless></iframe>
    </div>
</div>
</div>
</div>

</body>
</html>
