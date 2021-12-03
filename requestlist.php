<?php include('./navbar.php'); ?>

<head>
    <meta charset="utf-8">
    <title>List request</title>
</head>
<script type="text/javascript" src="../jsScripts/requestlist.js"></script>

<body>
    <div class="container box">
        <div>
            <button type="button" id="modal_button" class="btn btn-info">Create Records</button>
            <!-- It will show Modal for Create new Records !-->
        </div>
        <br />
        <div id="result" class="table-responsive">
            <!-- Data will load under this tag!-->

        </div>
    </div>
</body>

<!-- This is Customer Modal. It will be use for Create new Records and Update Existing Records!-->
<div id="customerModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create New Records</h4>
            </div>
            <div class="modal-body">
                <label>Enter Name</label>
                <input type="text" name="name" id="name" class="form-control" />
                <br />
                <label>Enter Request</label>
                <input type="text" name="request" id="request" class="form-control" />
                <br />
            </div>
            <div class="modal-footer">
                <input type="hidden" name="customer_id" id="customer_id" />
                <input type="submit" name="action" id="action" class="btn btn-success" />
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>