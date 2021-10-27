<html>
<head>
    <title>Nagad</title>
</head>
<body style="text-align: center">
<?php if($_GET['status']){?>
<div style="border:1px solid #8bff77;border-radius: 20px;padding: 0px 30px">
<!--    http://localhost/nagad/welcome.php/?merchant=683002007104225&order_id=TEST16182122526924&payment_ref_id=MDQxMjEzMjQxMjM0Ny42ODMwMDIwMDcxMDQyMjUuVEVTVDE2MTgyMTIyNTI2OTI0LjI4MDZjZDc1ZTczYzY1YjI4ZGFm&status=Success&status_code=00_0000_000&message=Successful%20Transaction&payment_dt=20210412132448&issuer_payment_ref="test"-->
    
        <h2 style="color: green">Message : <?=$_GET['message']?></h2><hr>
    <p style="text-align: left">

    <b>Merchant: </b> <?= $_GET['merchant'] ?> <br>
    <b>order_id: </b> <?= $_GET['order_id'] ?> <br>
    <b>payment_ref_id: </b> <?= $_GET['payment_ref_id'] ?> <br>
    <b>status_code: </b> <?= $_GET['status_code'] ?> <br>
    <b>Status: </b> <?= $_GET['status'] ?> <br>
    <b>payment_dt: </b><?= $_GET['payment_dt'] ?> <br>
    <b>issuer_payment_ref: </b><?= $_GET['issuer_payment_ref'] ?> <br>
    </p>
   
</div>
<?php } ?>
<div>
    <h2>Nagad Payment Test</h2>
    <p>Amount : BDT 20 </p>
    <a href="index.php?amount=20">Pay Now</a>
</div>
</body>
</html>


