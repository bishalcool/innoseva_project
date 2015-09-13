<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authentication Form</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
    

    <div class="container">
      <div class="col-md-5 col-md-offset-3">  
              <form name="form" action="validate.php" method='post'>
              <br><br>
                          <h3 style="margin-bottom: 25px; text-align: center;">Authentication Form</h3>
                  <div class="form-group">
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                </div>

                   <div class="form-group">
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                </div>

             
                <div class="form-group">
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                </div>


                <div class="form-group">
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                </div>
              
                        
                  
              <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
              </form>
         
      </div>
    </div>




    <script src="js/jquery.js"></script>
    <script src="js/jqueryValidate.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>