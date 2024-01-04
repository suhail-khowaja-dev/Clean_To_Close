
  <style>
	
  </style>

		<div class="container">
		<div>
			<div style="width: 100%;padding-top:8rem;"> <!-- Keep map above fold -->
				<div id="map"></div>
			</div>
		</div>
		</div>

      
    
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addressModal" hidden id="addressModalBtn">
	Launch demo modal
</button>
<!-- Modal -->
<div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-body">
		  <h4>Clean To Close™</h4>
		  <h3></h3>
		  <hr>
		  <div class="loopAddress">
			<div class="cardBranches">
				<h5>Address</h5>
				<p class="m00">
				<!-- <?php foreach($map as $key=>$value){?>
						<?php echo $value['map_address'] ?>
						<?php
					}
				?> -->
				  <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit...
  
				  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...
   -->
				</p>
			</div>
			<!-- <div class="cardBranches">
				<h5>Name:</h5>
				<p>John Carter</p>
				<h5>Address</h5>
				<p class="m00">
				  Lorem ipsum dolor sit amet, consectetur adipisicing elit...
  
				  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...
  
				</p>
			</div> -->
		  </div>
		</div>
	  </div>
	</div>
  </div>

  <script>
	  var php_var = <?php echo json_encode($map); ?>;
	  console.log(php_var);
  </script>