<!DOCTYPE html>  
 <html>  
      <head>  
			<meta charset="utf-8"/>
           <title>Insert and Display PDF From Database</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


	 </head>  
      <body>  
	  
	  <?php 
	  
	  $dbh = new PDO("mysql:host=localhost;dbname=smart_setter", "root", "");
	  
	  
	  ?>
	  
	  <ul>
 
  <li><a href="index.php">Home</a></li>
  <li><a href="insert.php">Insert</a></li>
  
  <li><a href="show.php">Show</a></li>
  
</ul>
	    
		  

<br>
           <div class="container" style="width:500px;">  
                <h3 align="center">Display PDF From Database</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <br /> 
					
					 <label for="course">Choose a Course:</label>
					<select id="course" name="course" required>
					<option value="" disabled selected hidden>Select Course</option>
					<option value="IT501E">IT501E</option>
					  <option value="CM404E">CM404E</option>
					  <option value="IT303E">IT303E</option>
					  <option value="IT504E">IT504E</option>
					</select>
					 <button class="btn btn-info" name="btn"> Show </button>
                     
                </form>  
                <br />  
                <br />  
                
           </div>  
		   <p></p>
		    <h4 align="center">
		   <ol>
		   
		   <?php
		   
		    if(isset($_POST["btn"]))  
 {  

		$course=$_POST['course'];
		$stat= $dbh->prepare("select * from files where course like ('$course%')");
		$stat->bindParam(1,$course);
		$stat->execute();
		
			while($row = $stat->fetch()){
			echo "<li><a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']." - ".$row['course']."</a><br/>
			<embed src='data:".$row['mime'].";base64,".base64_encode($row['data'])."'width='500' height='200'/></li>";
		   }
 }
		   
		   
		   ?>
		   </ol>
		   </h4>  
      </body>  
 </html>  