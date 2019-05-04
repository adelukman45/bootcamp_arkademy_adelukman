<?php 
  session_start();
 $konek = mysqli_connect('localhost','root','','arkademy');
	global $konek;
  $query = mysqli_query($konek, "SELECT * FROM candidate");

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Nomor Enam</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">


    <!-- this css -->
    <style type="text/css">
      .jumbotron {
        margin-bottom: 0px;
        background-color: rgba(0,0,0,0);
      }
      .container , .card {
        background-color: rgba(255,255,255,0.2) !important;
      }
      h1 {
        font-family: sans serif;
      }
    </style>

  </head>
  <body>
    


    <section id="pilih">
    	<div class="container my-5">
		  <nav class="navbar navbar-expand-lg navbar-light mt-5 bg-danger rounded shadow">
              <h3 class="display-4 mx-auto">Perhitungan Suara</h3>      
		  </nav>
		</div>

	  <div class="container my-5 py-5">
        <div class="row">
            <?php while ( $pest = mysqli_fetch_assoc($query) ): ?>
		  <div class="col-sm-6">
		    <div class="card mt-2">
		      <div class="card-body">
                <h2 class="card-title"><?= $pest['name']; ?>
               		<a href="tambah.php?id=<?= $pest['id']; ?>" class="btn btn-danger float-right btn-lg">Tambah</a>
                </h2>
                	<h1 class=" display-1 text-center"><?= $pest['earned_vote'];?></h1>
		      </div>
		    </div>
		  </div>
            <?php endwhile ?>
	  </div>
          </div>
          <center><span class="mt-5">&copy; 2019 Build With &hearts; By AL Creative</span></center>
      </div>
    </section>






  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jQuery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swal/sweetalert2.all.min.js"></script>
    <script src="js/myindex.js"></script>
  </body>
</html>