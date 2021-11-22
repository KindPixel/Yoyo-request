<?php include('./navbar.php');?>
<head>
    <meta charset="utf-8">
    <title>Ask ur yoyo</title>
</head>
<script type="text/javascript" src="../jsScripts/askuryoyo.js"></script>
<body>
    

    

    <div class="asking-box">
        <form class="form">
            <div class="form-group">
                <h2>Ur requested movie</h2>
                <input type="" class="form-control" id="request" placeholder="example : Iron man 2009">
            </div>
            <br>
            <input style="margin-top:10px;" type="button" name="save" class="btn btn-primary" value="Register" id="submit-request">
        </form>

        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        </div>
        <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        </div>

    </div>

    
</body>
