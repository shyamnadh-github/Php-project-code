<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            
            
.container-fluid
    {
       
        position: relative;
  text-align: center;
  color: red;
    }
 .title
 {
    position: absolute;
  top: 7%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 110px;
 }   
 
 .loginreg h2
 {
color: white;
position: absolute;
top: 23%;
left: 30px;
 }

 .fields
 {
     top: 33%;
     position: absolute;
     left: 30px;
       
 }
 .fields a
 {
     text-decoration: none;
     color: black;
 }
 .fields input
 {
    margin: 5px 10px 5px 0;
     vertical-align: middle;
     padding: 5px;
 }
 .fields button
 {
    padding: 4px 15px;
 }
 
 .search h1
 {
color: white;
position: absolute;
top: 48%;
left: 20%;
 }
 .searchfield
 {
 padding: 2px;
position: absolute;
top: 60%;
left: 20%;
color: rgb(255, 115, 0);

 }


</style>
</head>
<body>
    <div class="container-fluid">
        <img src="background.jpg" width="100%">
        <div class="title">USED CARS</div>
    </div> 
   
    <div class="loginreg" >
           
        <h2>Members Login</h2>
        <div class="fields">
        <form action="authcheck.php" method="post">
        <label for="email" style="color: red;">Email ID:</label>
        <input type="email" id="email" name="email" style="width: 250px;" required>
        <label for="pwd" style="color: red;">Password:</label>
        <input type="password" id="pwd" name="pwd" style="width: 250px;"  required>
        <button type="submit">Login</button>
        <button type=""><a href="registration.php">Register Now</a></button>
       </form>   
        </div>
       
        <div class="search">
            <h1>Search?</h1>
            </div>
            
                
            <div class="searchfield">

           <div class="row">
           <div class="col-sm-2">
            <label for="model">Model:</label>
           </div>
           <div class="col-sm-10">
            <select name="model" id="cars">
            <option value="" disabled selected hidden>Select Model</option>
            <option value="suzuko">Suzuki</option>
            <option value="tata">TATA</option>
            <option value="hyundai">Hyundai</option>
            </select><br>
            <br></div>
           
           <div class="col-sm-2">
            <label for="year">Year:</label>
           </div>
           <div class="col-sm-10">
            <input type="text"><br>
            <button type="">GO</button><br>
           </div>
           
           <div class="col-sm-2">
               <br>
            <label for="city">City:</label>
           </div>
           <div class="col-sm-10">
               <br>
            <input type="text"><br>
            <button type="">Search</button><br>
           </div>
            
           
     
           </div>
            
    </div>    
    
</body>
</html>