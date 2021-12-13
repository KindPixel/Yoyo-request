<!-- FontAwesome -->
<link href="resources/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- My css -->
<link rel="stylesheet" href="style/style.css">
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php 
    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        // session isn't started
        session_start();
    }
    var_dump($_SESSION);
?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark py-1">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">YOYO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="askuryoyo.php">Ask ur yoyo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="requestlist.php">List request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login/Register</a>
                </li>
                
                <?php if(!isset($_SESSION['name'])) {
                    echo'
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i></a>
                    </li>';
                }
                else {
                    echo'<li class="nav-item">
                    <a class="nav-link" href="">Ur connected as : ',ucfirst($_SESSION['name']),'</i></a>
                    </li>';
                    
                    echo'<li class="nav-item">
                    <a class="nav-link" href="phpScripts/destroysession.php"><i class="fas fa-sign-out-alt"></i></a>
                    </li>';
                }
                ?>
            </ul>

            
            
        </div>
    </div>
</nav>


