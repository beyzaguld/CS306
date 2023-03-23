<!DOCTYPE html>
<html>
<head>
  <style>
        #footer {
            position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: 60px;
        }
    </style>
	<title>CS306 Term Project</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body style="background-color:#E9E9E9;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	<div class="container-fluid">
    <a class="navbar-brand" href="index.html">CS306 Term Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rate_content.html">Rate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contents.php">Contents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="award_table.php">Awards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="musics_table.php">Musics</a>
        </li>
       
      </ul>
    </div>
 	</div>
	</nav>
	
<section class="text-center">
	<div class="container-fluid">
		<div class="row">
            <div  class="col-lg-4 col-md-4 col-12">
                <div class="card-body">
                <a href="index_content.php" class="btn btn-primary">Admin Page Content</a>
                </div>
            </div>
            <div  class="col-lg-4 col-md-4 col-12">
                <div class="card-body">
                <a href="index_musics.php" class="btn btn-primary">Admin Page Musics</a>
                </div>
            </div>
            <div  class="col-lg-4 col-md-4 col-12">
                <div class="card-body">
                <a href="index_award.php" class="btn btn-primary">Admin Page Awards</a>
                </div>
            </div>
        </div>

        
    </div>
</section>


<footer id = "footer">
	<p class="p-3 bg-dark text-white text-center">CS306 Term Project - Spring2022</p>
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>