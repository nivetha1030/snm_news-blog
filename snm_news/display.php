<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
body{
    padding: 0px;
    margin:0px;
    background:#e1cae9;
}
header{
 
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(22,32,207,1) 35%, rgba(0,212,255,1) 100%);

    height: 100px;
}
          .search-container{
			position:relative;
            margin-left: 500px;
			top:40px;
           
           
        }
        .results {
            margin-top: 20px;
        }
        .error {
            color: red;
        }
   

  .topnav {
    overflow:visible;
    float:right;
    transform: translateX(-10%);
    margin-top:35px;
  }
  .user{
    float: right;
    border-radius: 50px;
    padding:10px 15px;
    
  }
  .text{
	  text-shadow: 2px 2px 8px white;
    color:white;
    margin-top:0px;
    position: absolute;
    top: 8px;
    left: 100px;
    font-size: 18px;
  }
  .add{
    margin-top:0px;
    position: absolute;
    top: 35px;
    right: 200px;
    font-size: 18px;
    float: right;
  }
  .topnav .dropdown-toggle {
    background-color:#2516cf;
    margin-top:0px;
    position: absolute;
    top: 0px;
    right: 100px;
    font-size: 18px;
    float: right;
    padding:8px;
}
.scroll{
	width:100%;
	background: #e1cae9;
	padding: 30px 0;
	color:black;
	font-family:arial;
	font-size:20px;
	font-style:italic;
	border-radius:1px;
	}
  .center {
        padding: 0 40px;
        box-sizing: border-box;
       
    }
	input[type="submit"]{
        width: 100%;
        height: 50px;
        border: 1px solid;
        background-color: #2691d9;
        border-radius: 25px;
        font-size: 18px;
        color: #e9f4fb;
        font-weight: 700;
        cursor:pointer;
        outline:none;
    }
    input[type="submit"]:hover{
        border-color:#2691d9;
        transition: .5s;
    
    }
	.modal-content{
        width: 400px;
        margin: 20vh auto 0 auto;
        background-color:white;
        border-radius:5px;
        padding: 30px;
    }
    .modal-title{ 
        text-align: center;
        color: black;
	}
    .card{
  box-shadow: 0 10px 10px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 28%;
  height:auto;
  border-radius: 5px;
  background:white;
  border-radius:30px;
}
.card-container{
	display:flex;
	flex-wrap:wrap;
	gap:80px;
	top:0;
	margin-left:20px;
}
.card img{
	
	margin-left:16px;
	border-radius:10px;

}
.card h2{
	color:red;
	text-align:center;
}
.card h3 {
	
	text-align:center;
	color:darkblue;
	
}
.card h4{
	margin-left:20px;
}
.card p{
margin-left:30px;
margin-right:20px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.signup_link{
        margin: 30px 0;
        text-align: center;
        font-size: 16px;
        color: #666666;
    }
    .signup_link a{
        color: #2691d9;
        text-decoration: none;
    
    }
    .signup_link a:hover{
        text-decoration: underline;
        
    }
    .upload{
        background-color:lightblue;
    }
    .footer {
	 margin-top:20px;
	background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(22,32,207,1) 35%, rgba(0,212,255,1) 100%);
    padding: 20px; 
    text-align: center;  
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto; 
}

.footer p {
    margin: 0; 
    color: black; 
}

.footer-links {
    list-style: none; 
    padding: 0; 
    margin: 10px 0 0; 
    display: flex; 
    justify-content: center; 
}

.footer-links li {
    margin: 0 15px; 
    color:white;
}
.desi{
    color:white;
    margin-left:0px;
}
.logo{
    margin-left:40px;
    margin-top:0px;
    position: absolute;
    top: 20px;
    border-radius:50%;
}
.logout{
    margin-top:0px;
    position: absolute;
    top: 10px;
    left: 170px;
    font-size: 18px;
    color:white;
   
}
        
</style>
</head>
<body>
<header>
<img src="img/logo.png"alt="Logo"class="logo" width="50" height="50">     
            <div class="text">
              <h1>SNM News Blog</h1>
            </div>
			<!--<div class="search-container">
            <form method="GET" action="search.php">
            <input type="text" id="searchInput" name="query" placeholder="Search for items..." value="<?php echo htmlspecialchars($_GET['query'] ?? '', ENT_QUOTES); ?>">
            <button type="submit">Search</button>
            </form>
            </div>-->
            <div class="add">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD NEWS</button>
                <a href="logout.php"class="logout">LOGOUT</a>
            </div>
            
            
			
        </header>
<marquee class="scroll" direction="scroll">
INDIA vs NDA over NEET in Lok Sabha; Congress MP claims Rahul Gandhi's mic switched off.
 </marquee>     
        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
	    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2 class="modal-title">Create news</h2>
      </div> 


<div class="center">
	  
    <form action="images.php" method="post" enctype="multipart/form-data">
      
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>
		
        <label for="subtitle">Subtitle:</label><br>
        <input type="text" id="subtitle" name="subtitle" required><br><br></h2>

       <label for="category">Category:</label><br>
		<select name="category" id="Category">
    <option value="Sports">Sports</option>
    <option value="Education">Education</option>
    <option value="Politics">Politics</option>
    <option value="Technology"> Technology</option>
    <option value="Business"> Business</option>
    <option value="Local news"> Local news</option>
   </select><br><br>
       
        <label for="image">Select Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="10" cols="30" required></textarea><br><br>
        <button onclick="showUploadSuccess()"class="upload">Upload Post</button>


</div>		
		
    </form>
	
</div>
</div>
</div>
</div>


<div class="card-container">

 <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch images
$sql = "SELECT * FROM articles ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo '<div class="card">';
		echo "<h2>" . $row["title"]. "</h2>";
        echo '<img src="data:img/webp;base64,' . base64_encode($row['image']) .'"width="300" height="200"/>';
		echo "<h3>" . $row["category"] . "</h3>";
        echo "<h4>" . $row["subtitle"] . "</h4>";
        echo "<p>" . $row["content"] . "</p>";
		echo "</div>";
		
      } 
}	  

    else {
    echo "No images found.";
}


$conn->close();
?>
</div>
 

 <footer class="footer">
     <div class="footer-content">
         <p>&copy; 2024 SNM_NEWS blog . All rights reserved.</p>
         <ul class="footer-links">
             <li>Privacy Policy</li>
             <li>Terms of Service</li>
             <li>Contact Us</li>
         </ul>
     </div>
 </footer>

    <script>
        function showUploadSuccess() {
            alert("Upload successful!");
        }
    </script>
</body>
</html>