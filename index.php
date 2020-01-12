<?php
require_once("conn.php");

function __($input){
  return htmlspecialchars($input, ENT_QUOTES);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/be9e1f8f2d.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Cars In Stock Checker</title>
  </head>
  <body>
    <div class="container pt-5">
      <h2 class="text-center">Find your Car!</h2>
      <hr>

      <div class="row">
        <div class="col-12">
        <h4>Search Input -</h4><hr class="line">
          <form class="input-group" id="search-form">

            <div class="input-group-prepend">
              <select class="custom-select" id="year-select">

                <option selected value="0">Year</option>
                <?php
                // for(i = *; i < *; i++)
                // foreach( array as single)
                // while( while this statement is true)
                for($i = 1956; $i <= intval(date("Y"));  $i++) {
                  echo "<option value='$i'>$i</option>";

                }

                ?>
              </select>
            </div>
            <input type="search" name="search" 
              placeholder="Enter Car Make or Model" 
              class="form-control" id="search-model">
            
            <input type="search" name="search"
              placeholder="Enter Nickname"
              class="form-control" id="search-nickname">

            <div class="input-group-append">
              <button class="btn btn-success form-control" type="submit">
                <i class="fas fa-binoculars"></i>
              </button>
            </div>
          </form>
        </div>
      </div>



      <table class="table">
        <thead>
          <th>Make</th>
          <th>Model</th>
          <th>Year</th>
          <th>Nickname</th>
        </thead>
        <tbody id="search-results">
              
        </tbody>
        <tfoot id="newCar" class="pt-3">
        <thead>
          <th>- Make</th>
          <th>- Model</th>
          <th>- Year</th>
          <th>- Nickname</th>
        </thead>
          <th><input type="text" class="form-control" placeholder="Make" id="car_make_input"></th>
          <th><input type="text" class="form-control" placeholder="Model" id="car_model_input"></th>
          <th><input type="text" class="form-control" placeholder="Year" id="car_year_input"></th>
          <th><input type="text" class="form-control" placeholder="Nickname" id="car_nickname_input"></th>
          <th><button class="btn btn-info" data-action="insert"><i class="fas fa-plus"></th>
        </tfoot>
      </table>
    </div>
    

 <!-- Modal -->
<div class="modal fade" id="deleteCarAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        Last chance, you really want to delete this car?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">No I Don't</button>
        <button type="button" class="btn btn-danger" data-action="confirm-delete">Yes, Delete It</button>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <script src="assets/js/scripts.js"></script>

  </body>
</html>