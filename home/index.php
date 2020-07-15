<?php include 'includes/header.php'; ?>
    <!-- End main container -->

    <!--start navbar-->

    <div class="navbar">
        <div class="container">
            <div class="logo">
                <h3 class="logo-text">BugSDealer$ | Do What You Want  | Your Last Login: <?php  echo substr($last_login_title, 0, 19); ?> 
                <i class="fas fa-fire"></i> </h3>
            </div>
        </div>
    </div>

    <!--End Navbar-->

    <!-- start main container -->

    <div class="main-container">
        <!-- start aside -->
        <div class="aside open">
            <!-- logo -->
            <div class="logo">
                <a href="#"> Settings </a>
            </div>
            <!-- nav toggler -->
            <div class="nav-toggler">
                <i class="fas fa-bars"></i>
            </div>
            <!-- navbar -->
            <ul class="nav">
                <li> <a href="#" class="active"> <i class="fa fa-user"></i> To Do List </a> </li>
                <li> <a href="#"> <i class="fas fa-unlock-alt"></i> Change Password </a> </li>
                <li> <a href="../App/Logout.php" class="logOut"> <i class="fas fa-sign-out-alt"></i> Log Out </a> </li>
            </ul>
            <!-- copyright -->
            <div class="copyright">
                &copy; All Rights Reserved To 
            </div>
        </div>
        <!-- start main content -->
        <div class="main-content padding">
        <!-- start to do list  -->
        <div class="all-container">
            <div class="todo-container">
                <div class="add-task">
                    <input type="text" id="task_path" style="color:red">
                    <span class="plus" onclick="AddTask()">+</span>
                </div>
                <div class="tasks-content">
                    <div class="no-tasks-message" id="tasks-message" style="display: flex; flex-wrap: wrap;"></div>
                    
                </div>
            </div>
        </div>
        <?php
        // grabing tasks count and thier status " Completed OR Uncompleted "
        $usr_email  = $_SESSION['email'];
        $q          = "SELECT tasks.task_info, tasks.completed, users.email FROM tasks INNER JOIN users ON '$usr_email' = tasks.user_email AND users.email = '$usr_email'";
        $excute     = grab_user_info(ConfirmQuery($q));
        ###########################################

        $db_tasks       = ConfirmQuery("SELECT * FROM tasks WHERE completed = 'Finished' AND user_email = '$usr_email'");
        $db_completed   = rows_count($db_tasks);

        ###########################################

        $tasks_db = "SELECT * FROM tasks WHERE user_email = '$usr_email'";
        $tasks    = rows_count(ConfirmQuery($tasks_db));
        ?>
        <div class="tasks-stats">
                <div class="tasks-count">
                    Tasks <span><?php echo $tasks; ?></span>
                </div>
                <div class="tasks-completed">
                    Completed <span><?php echo $db_completed; ?></span>
                </div>         
                <button onclick="Delete_All()" class="del-all">Delete all</button>
                <button onclick="Complete_All()" class="read-all">Completed All</button>
            </div>
        </div>

        <!-- end to do list -->            


            <!-- home section -->
            <section class="change section hidden" id="change">
                <div class="container">
                    <div class="intro">
                        <h3 id="changeResponse"></h3>
                        <h2>Change Your Password</h2>
                        <div class="input-field">
                            <input type="password" id="default" placeholder="Type Current Password">
                        </div>
                        <div class="input-field">
                            <input type="password" id="new1" placeholder="Type New Password">
                        </div>
                        <div class="input-field">
                            <input type="password" id="new2" placeholder="Type New Password Again">
                        </div>
                        <button class="upper" onclick="Changepass()">Save Changes</button>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Start Style Switcher  -->

    <div class="style-switcher">
        <div class="toggle-style-switcher">
            <i class="fa fa-cog fa-spin"></i>
        </div> 
        <h5>Body Skin</h5>
        <label>
            <input type="radio" class="body-skin"  name="body-style" value="light">
            light
        </label>
        <label>
            <input type="radio" class="body-skin"  name="body-style" value="dark" checked>
            dark
        </label>        
    </div>

    <!-- End Style Switcher  -->


    <!--================================ END OF CODE ================================ -->
<?php include 'includes/footer.php'; ?>