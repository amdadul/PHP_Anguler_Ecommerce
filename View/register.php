<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Multi Step Form with Progress Bar using jQuery and CSS3</title>
  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" type="text/css" href="View/css/style.css">

  
</head>

<body>

  <!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Personal Details</li>
     <li>Finish </li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">Step-1</h3>
     <input type="text" name="name" placeholder="Full Name" />
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  
  <fieldset>
    <h2 class="fs-title">Address</h2>
    <h3 class="fs-subtitle">Step-2</h3>
   
   <textarea name="p_address" placeholder="Present Address"></textarea>
   <textarea name="D_address" placeholder="Delivery Address"></textarea>
    <input type="text" name="phone" placeholder="Phone" />
     <input type="text" name="ref" placeholder="Reference" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="register" class="submit action-button" value="Submit" />
  </fieldset>
 <fieldset>
    <h2 class="fs-title">Finished</h2>
    <h3 class="fs-subtitle">Final Step</h3>
   
   <textarea name="p_address" placeholder="Present Address"></textarea>
   <textarea name="D_address" placeholder="Delivery Address"></textarea>
    <input type="text" name="phone" placeholder="Phone" />
     <input type="text" name="ref" placeholder="Reference" />
     <input type="button" name="next" class="next action-button" value="Done" />
  </fieldset>

</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  

    <script  src="View/js/index.js"></script>




</body>

</html>
