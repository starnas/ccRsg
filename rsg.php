<?php session_start(); ?>
<?php include_once 'header.php'; ?>

<!-- PHP controlling the data files -->
<?php

	// data directories
  $map_dir_relative = "data/maps/";
  $data_dir_relative = "data/jsons/";

	// get the map files
	if(is_dir($map_dir_relative)){

    // scan directory
		$map_files = scandir($map_dir_relative);
		
		// remove . and ..
		unset($map_files[0]);
		unset($map_files[1]);
	}

?>

<!-- Accordion container for the stats -->
<div class="container-fluid" id="accordion">

  <!-- RS.1 -->
  <div class="card">
    <div class="card-header" id="rs1">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#rs1content" aria-expanded="true" aria-controls="rs1content" style="color:black;">
          RS.1
        </button>
      </h5>
    </div>

    <div id="rs1content" class="collapse show" aria-labelledby="rs1" data-parent="#accordion">
      <div class="card-body">

      <!-- gallery code -->
      <div class="row text-center text-lg-left">
        <?php if (isset($map_files)): ?>
          <?php for($x = 2; $x < count($map_files)+2; $x++): ?>
						<div class="col-lg-3 col-md-4 col-xs-6">
							<a href="#" class="d-block mb-4 h-100">
								<form action="rsg.php" method="GET">
									<button type="submit" name="map_index" value=<?php echo $x?> class="btn btn-link btn-sm" style='color: black; font-size:100%'>
										<img class="img-fluid img-thumbnail" src="<?php echo $map_dir_relative . $map_files[$x]; ?> " alt="Submit">
									</button>
								</form>
							</a>
						</div>
          <?php endfor; ?>
        <?php endif; ?>
      </div>

    </div>
  </div>

  <!-- RS.2 -->
  <div class="card">
    <div class="card-header" id="rs2">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#rs2content" aria-expanded="true" aria-controls="rs2content" style="color:black;">
          RS.2
        </button>
      </h5>
    </div>

    <div id="rs2content" class="collapse show" aria-labelledby="rs2" data-parent="#accordion">
      <div class="card-body">

        <!-- code iself -->
        

      </div>
    </div>
  </div>
  
</div>
  
<?php include_once 'footer.php'; ?>
