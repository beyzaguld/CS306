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
            height: 40px;
            background: grey;
        }
    </style>
	<title>Contents</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    
</head>
<body>
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

  <div class="container-fluid" style="background-color:#E8E4EF;">
    <div id="products" class="row list-group">
      <div class="container-fluid">
          <br>
          <?php
              include "config.php";

              $sql_statement = "SELECT * FROM content";
              
              $result = mysqli_query($db, $sql_statement);

         if (mysqli_num_rows($result)>0) {
           while($row = mysqli_fetch_assoc($result)){
             ?>
          <div class="row">
            <br></br>
            <div class="col-lg-12 col-md-12 col-12">
              <h2> <?php echo $row['cname']; ?></h2>
              <div class="caption">
                    <br>
                    <h5 class="group inner list-group-item-text">
                        ID: <?php echo $row['cid']; ?></h5>
                    <h5 class="group inner list-group-item-text">
                        Genre: <?php echo $row['genre']; ?></h5>
                    <h5 class="group inner list-group-item-text">
                          Rating: <?php echo $row['rating_sum'] / $row['counterr']; ?></h5>

                     <?php $ID=$row['cid']; ?>

                     <table>

                      <tr> <th> Musics: </th></tr> 

                      <?php

                          include "config.php";

                          $sql_statement2 = "SELECT * FROM is_used_by WHERE cid = $ID";


                          $result2 = mysqli_query($db, $sql_statement2);
                          while($row2 = mysqli_fetch_assoc($result2)){
                            $M_ID=$row2['mid'];

                            $sql_statement3 = "SELECT * FROM musics WHERE mid = $M_ID";

                              $result3 = mysqli_query($db, $sql_statement3);
                              while($row3 = mysqli_fetch_assoc($result3)){
                                $name = $row3['mname'];


                                echo "<tr>" . "<th>" . $name . "</th>" .
                                                            
                                                          "</tr>";
                                                          

                              }

                            }

                        


                      ?>

                      </table>

                      <table>

                      <tr> <th> Awards: </th></tr> 

                      <?php

                          include "config.php";

                          $sql_statement4 = "SELECT * FROM has WHERE cid = $ID";
                  

                          $result4 = mysqli_query($db, $sql_statement4);
                          while($row4 = mysqli_fetch_assoc($result4)){
                            $A_ID=$row4['award_id'];

                            $sql_statement5 = "SELECT * FROM awards WHERE award_id = $A_ID";

                              $result5 = mysqli_query($db, $sql_statement5);
                              while($row5 = mysqli_fetch_assoc($result5)){
                                $name = $row5['award_name'];


                                echo "<tr>" . "<th>" . $name . "</th>" .
                                                            
                                                          "</tr>";

                              }

                            }

                      ?>

                      </table>
                     

             <?php
           }
         }
         ?>
  </div>

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>