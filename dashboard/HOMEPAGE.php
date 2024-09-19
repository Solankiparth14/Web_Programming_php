<!DOCTYPE html>
<html lang="en">
<head>
<!-- Designed by Dr. Ripal Ranpara for student Activity Project Assignment-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <!-- Add Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        #header {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: left;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #header h1 {
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }
        #sidebar {
            background: #343a40;
            color: #fff;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #sidebar ul {
            list-style: none;
            padding: 0;
        }
        #sidebar li {
            margin-bottom: 10px;
        }
        #sidebar li a {
            color: #fff;
            text-decoration: none;
        }
        #sidebar .list-group-item {
            background: transparent;
            border: none;
            color: #fff;
        }
        #sidebar .list-group-item:hover {
            background: #212529;
        }
        #main-content {
            padding: 20px;
        }
        .section-title {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        .dashboard-item {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
        }
        #footer {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
		
		* Button 1: Ocean Blue */
.ocean-blue-button {
    background: linear-gradient(135deg, #006a88, #0091ad);
    color: #fff;
}

/* Button 2: Sunset Orange */
.sunset-orange-button {
    background: linear-gradient(135deg, #ff8c42, #ffbc3b);
    color: #fff;
}

/* Button 3: Spring Green */
.spring-green-button {
    background: linear-gradient(135deg, #72b01d, #97cc11);
    color: #fff;
}

/* Button 4: Royal Purple */
.royal-purple-button {
    background: linear-gradient(135deg, #7c53c3, #a44bc5);
    color: #fff;
}

/* Button 5: Ruby Red */
.ruby-red-button {
    background: linear-gradient(135deg, #cb1e52, #de6b4b);
    color: #fff;
}

/* Button 6: Goldenrod Yellow */
.goldenrod-yellow-button {
    background: linear-gradient(135deg, #ffbf3f, #ffb344);
    color: #fff;
}

/* Button 7: Sky Blue */
.sky-blue-button {
    background: linear-gradient(135deg, #31a7ff, #3abeff);
    color: #fff;
}

/* Common Button Styles */
.gradient-button {
    border: none;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3">
                <h2>Sidebar</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="<?php echo ($abc=$_POST['m1']); ?>">Menu 1</a></li>
                    <li class="list-group-item"><a href="<?php echo ($abc=$_POST['m2']); ?>">Menu 2</a></li>
                    <li class="list-group-item"><a href="<?php echo ($abc=$_POST['m3']); ?>">Menu 3</a></li>
                </ul>
                <h2>My Social Profiles</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="<?php echo ($abc=$_POST['google']); ?> " target="_blank">Google Site</a></li>
                    <li class="list-group-item"><a href="<?php echo ($linkdin=$_POST['link']); ?> " target="_blank">LinkedIn</a></li>
                    <li class="list-group-item"><a href="<?php echo ($blog=$_POST['blog']); ?> " target="_blank">Blog</a></li>
                    <li class="list-group-item"><a href="<?php echo($github=$_POST['git']);?>" target="_blank">GitHub</a></li>
                </ul>
            </nav>
            <!-- Main content -->
            <main class="col-md-9">
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Title</h1>
                            </div>
                            <div class="col-md-6">
                                <?php if($_FILES['img1']['error']===UPLOAD_ERR_OK){
                                    $tmpname =$_FILES['img1']['tmp_name'];
                                    $name=$_FILES['img1']['name'];
                                    $destination='img/'. $name;
                                    if(move_uploaded_file($tmpname,$destination)){
                                        //
                                    }
                                }
                                ?>
                                <img src="<?php echo $destination; ?>" alt="Logo" width="100" class="float-right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="dashboard-item">
                        <div id="about-me" class="section-title">
                            <h2>About Me</h2>
                        </div>
                        <p><?php 
                        echo $name=$_REQUEST['nm'] ?></p>
                    </div>
                    <div class="dashboard-item">
                        <div id="my-skillset" class="section-title">
                            <h2>My Skillset</h2>
                        </div>
                        <p><?php 
                        echo $skll=$_REQUEST['skll'] ?></p>
                    </div>
                    <div class="dashboard-item">
                        <div id="assignments" class="section-title">
                            <h2>Assignments</h2>
                        </div>
                        <div class="btn-group">
<button class="ocean-blue-button gradient-button"><a href="<?php echo $t1=$_POST['t1']; ?>"> Task 1</a></button>
<button class="sunset-orange-button gradient-button"><a href="<?php echo $t2=$_POST['t2']; ?>">Task 2</button>
<button class="spring-green-button gradient-button"><a href="<?php echo $t3=$_POST['t3']; ?>">Task 3</button>
<button class="royal-purple-button gradient-button"><a href="<?php echo $t4=$_POST['t4']; ?>">Task 4</button>
<button class="ruby-red-button gradient-button"><a href="<?php echo $t5=$_POST['t5']; ?>">Task 5</button>
<button class="goldenrod-yellow-button gradient-button"><a href="<?php echo $t6=$_POST['t6']; ?>">Minor Project Module</button><br>

<button class="spring-green-button gradient-button"><a href="<?php echo $t7=$_POST['t7']; ?>">Database  Module</button>
                        </div>
                    </div>
                    <div class="dashboard-item">
                        <div id="project-details" class="section-title">
                            <h2>My Project Details</h2>
                        </div>
                        <p><?php 
                        echo $project=$_REQUEST['pro'] ?></p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id="footer">
         <h3>Footer </h3>
         <?php if($_FILES['img2']['error']===UPLOAD_ERR_OK){
                                    $tmpname =$_FILES['img2']['tmp_name'];
                                    $name=$_FILES['img2']['name'];
                                    $destination1='img/'. $name;
                                    if(move_uploaded_file($tmpname,$destination1)){
                                        //
                                    }
                                }
                                ?>
        <img src="<?php echo $destination1; ?>" alt="Footer Logo" width="100">
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>