<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        <h3>Dear, <?php echo $_GET['name']; ?></h3>
        <p style="font-size:20px;color:#5C5C5C;">You have successfully donated the amount, For more information check your email: <?php echo $_GET['email']; ?> </p>
    <br><br>
        </div>
        
	</div>
</div>