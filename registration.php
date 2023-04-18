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
 .heading h2
 {
color: rgb(154, 243, 10);
position: absolute;
top: 28%;
left: 20%;
 }
.area
{
    position: absolute;
     top: 40%;
     left: 25%;
}
 </style>
 </head> 
<body>
    <div class="container-fluid">
        <img src="background.jpg" width="100%" height="850">
        <div class="title">USED CARS</div>
    </div>
    <div class="heading">
           <h2>Register Now?</h2>
        </div>
       <div class="area">
        <form action="insertuser.php" method="post">
           <div class="row"> 
           <div class="col-sm-2">
        <label for="name" style="color: rgb(154, 243, 10);">Name*:</label>
           </div>
           <div class="col-sm-10"> 
        <input type="text" id="name" name="name" required><br>
           </div>
           <div class="col-sm-2">
               <br>
        <label for="email" style="color: rgb(154, 243, 10);">Email*:</label>
           </div>
           <div class="col-sm-10">
               <br>
        <input type="email" id="email" name="email" required><br>
           </div>
           <div class="col-sm-2">
               <br>
        <label for="email" style="color: rgb(154, 243, 10);">Confirm Email*:</label>
           </div>
           <div class="col-sm-10">
               <br>
        <input type="email" id="email" name="email" required><br>
           </div>
           <div class="col-sm-2">
               <br>  
        <label for="pwd" style="color: rgb(154, 243, 10);">Password*:</label>
           </div>
           <div class="col-sm-10">
               <br>
        <input type="password" id="pwd" name="pwd" required><br>
           </div>
           <div class="col-sm-2">
               <br>
        <label for="pwd" style="color: rgb(154, 243, 10);">Confirm Password*:</label>
           </div>
           <div class="col-sm-10">
               <br>
        <input type="password" id="pwd" name="pwd" required><br>
           </div>
           <div class="col-sm-2">
               <br>
        <label for="mobile" style="color: rgb(154, 243, 10);">Mobile Number*:</label>
           </div>
           <div class="col-sm-10">
               <br>
        <input type="text" id="mobile" name="mobile" required><br>
           </div>
           <div class="col-sm-2">
               <br>
        <label for="phone" style="color: rgb(154, 243, 10);">Phone No:</label>
           </div>
           <div class="col-sm-10">
               <br>
        <input type="text" id="phone" name="phone"><br>
           </div>
           <div class="col-sm-2">
               <br>
        <label for="state" style="color: rgb(154, 243, 10);">State*:</label>
           </div>
           <div class="col-sm-10">
               <br>
            <select name="state" id="state" required>
            <option value="kerala">Kerala</option>
            <option value="karnataka">Karnataka</option>
            <option value="goa">Goa</option>
            </select><br>
            <br></div>

           <div class="col-sm-2">
               <br>
    <label for="city" style="color: rgb(154, 243, 10);">City*:</label>
           </div>
           <div class="col-sm-10">
               <br>
            <select name="city" id="city"required>
            <option value="" disabled selected hidden>Select City</option>
            <option value="kottayam">Kottayam</option>
            <option value="kochi">Kochi</option>
            <option value="thrissur">Thrissur</option>
            </select><br>
           <br></div>

           <div class="col-sm-2">
               <br>
        <label for="address" style="color: rgb(154, 243, 10);">Street/Address*:</label>
           </div>
           <div class="col-sm-10">
               <br> 
            <textarea id="address" name="address" rows="2" cols="20" required></textarea><br>
           </div>

           <div class="col-sm-2">
               <br>
        <label for="postal" style="color: rgb(154, 243, 10);">Postal Code*:</label>
           </div>
           <div class="col-sm-10">
               <br>
            <input type="text" id="postal" name="postal" required><br>
        </div> 
        <div class="col-sm-2">
               <br>
        </div>

           <div class="col-sm-10">
               <br>
            <button type="">Submit</button><br>
           </div>
            </div>
         </form>       
       </div> 
</body>
 </html>