<div class="container mt-4" id="map">  <!-- start map container -->
    <h2 class="text-center mb-4" style="text-decoration: underline;">Search Location</h2> <!--map heading -->
        <div class="row">  <!--start map Row-->		
            <div class="col-md-8"> <!--start map column--> 
                <form name="mapform" action="#map" method="POST">
                    <input type="text" class="form-control" name="address" placeholder="E.g. Shikshadeep">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Search" name="submit_address"> 
                    <br>
                </form>
            </div> <!--End map column-->
        </div>
</div>

<?php
if(isset($_POST['submit_address']))
{
  $address = $_POST["address"];
  ?>
  <br>
  <br>
  <iframe width="66%" height="250" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
  <?php
}

?>

