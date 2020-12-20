<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
      table{
          cursor: pointer;
      }
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


<link rel="stylesheet" href="navbar.css">
    <div class="header">
        <img src="suprat bank.png" alt="header">
      </div>
      <nav id="navbar">
        <div id="logo">
            <img src="suprat bank.png" alt="logo">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="#services">Services</a></li>
            <!-- <li class="item"><a href="#client-section">login</a></li>
            <li class="item"><a href="#contact">Sign Up</a></li> -->
        </ul>
    </nav>
    
<div class="container">
        <h2 class="text-center pt-4">View Customers</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr >
                            <th scope="col" class="text-center py-2">Acount Number</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
							<th scope="col" class="text-center py-2">Mobile No.</th>
							<th scope="col" class="text-center py-2">City</th>
							<th scope="col" class="text-center py-2">Balance</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr data-href="users.php">
                        <td class="py-2"><?php echo $rows['ac'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['mobile']?></td>
                        <td class="py-2"><?php echo $rows['city']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script>
          document.addEventListener("DOMContentLoaded", ()=> {
            const rows=document.querySelectorAll("tr[data-href]");
            rows.forEach(row=>{
              row.addEventListener("click", ()=>{
              window.location.href = row.dataset.href;
            });

            });

          });
        </script>
</body>
</html>