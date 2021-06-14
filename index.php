<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style index.css">
  
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/d2747108de.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous">
    
  </script>
  <title>Home</title>
</head>

<body>
  <!-- _______NAVIGATION BAR_______ -->
  <div id="title">
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark ">
      <a id="navbar-brand" href="index.php">
      sparks<span>Bank</span></a>
      
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav ml-auto">
      
          <li class="nav-item">
            <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">about us</a>
            
          </li>
        </ul>
      </div>
    </nav>
</div>

  <div class="intro">
   <h1> Welcome </h1>
  </div>
  
  <div class="cont">
    <form action="">
      <br>
      <button id="customer" class="btn btn-primary btn-lg btn-block " name="View Customer" value="View Customer"
        formaction="customer.php">View Customers</button><br>
      <button id="history" class="btn btn-primary btn-lg btn-block " name="Transaction History"
        value="Transaction History" formaction="history.php">Transaction History</button><br>
        <button id="history" class="btn btn-primary btn-lg btn-block " name="create user"
        value="Transaction History" formaction="adduser.php">create user</button>
        
       
       
    </form>
  </div>
</body>


</html>