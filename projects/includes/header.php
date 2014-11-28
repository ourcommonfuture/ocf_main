<div class="container">
	<div class="row">
    <div class="span12">
      <div class="navbar navbar_">
        <div class="container">
          <h1 class="brand brand_"><a href="../index.php"><img alt="" src="../ocf_logo.png" style="width:85px; height:40px;" > </a></h1>
          <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
          <div class="nav-collapse nav-collapse_  collapse">
            <ul class="nav sf-menu">                             
              <li class="" ><a href="index.php">HOME</a></li>
              <li class="" ><a href="../about.php">ABOUT</a></li>
              <li >
                <a href="../classes.php" >CLASSES</a>
              </li>

              <li class="dropdown">
                <a href="index.php" target="_self">PROJECTS <!--<span style="margin-top:10px" class="caret"></span> --></a>
		<?php /* ?>
                <ul class="dropdown-menu">
                  <li>
                  <?php if($_SESSION["uid"]==""){?>  
                    <a href="../login_page.php" ></i>Create Initiative</a> 
                  <?php } else { ?>
                    <a id="createProjectButton" data-toggle="tab" href="#create-project">Create Initiative</a>
                  <?php }  ?>
                  </li>                                
                  <li id="myProjectButton" class="sub-menu" data-toggle="tab" style=" <?php if($_SESSION["uid"]==""){?>display:none;<?php }else{?>padding:0px; <?php }?>">
                    <a data-toggle="tab" href="#my-projects"  onclick='myProjects(1, "current")'> My Initiatives</a>
                  </li>
                </ul>
		<?php */ ?>
              </li>
              <li class="">
                <a href="../blog.php">BLOG</a>
              </li>
              <li class="">
                <a href="../impact.php" class="#">YOUR IMPACT</a>
              </li> 
              <li>
                <a href="../contact.php">CONTACT</a>
              </li>


              <?php if($_SESSION["uid"]==""){?>                  
              <li class="sub-menu">
                <a href="../login_page.php" ></i>Login</a>                      
                <!-- <ul>
                  <li><a href="#" data-toggle="modal" data-target="#loginModal"><i class="icon-user" style="margin-right:5px;"></i>Login</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#signUpModal"><i class="icon-plus-sign" style="margin-right:5px;"></i>Signup</a></li>
                </ul> -->
              </li>
              <?php } else {?>
              <li >
                <a><span style="color:#DB420E; padding-top:10px; font-size:11px; font-weight:bold"><?php echo ($_SESSION["name"]);?></span></a>
                <ul>
                  <li>
                    <a href = "editProfile.php"><i class="icon-refresh" style="margin-right:5px;"></i> Edit Profile </a>
                  </li>
                  <li>
                    <a href="logout.php"><i class="icon-off" style="margin-right:5px;"></i> Logout </a>
                  </li>
                </ul>
              </li> 
              <?php } ?>                            
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
