<?php 
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "smart_setter");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 else 
  { echo '';}

  $ques_array=array(); 
           echo "<br>";
  echo "<br>";
/*
var $Q1_1,$Q1_2,$Q1_3,$Q1_4,$Q1_5,$Q1_6,$Q1_7;
var $Q2_1,$Q2_2,$Q2_3,$Q2_4,$Q2_5;
var $Q3_1,$Q3_2,$Q3_3,$Q3_4,$Q3_5;
var $Q4_1,$Q4_2,$Q4_3,$Q4_4,$Q4_5;
var $Q5_1,$Q5_2,$Q5_3;
var $Q6_1,$Q6_2,$Q6_3;*/



//***echo '                                                     ADVANCE JAVA PAPER';
//***echo "<br>";

//***echo "<br>";
//////////////////////////////////////////////* Question 1 */////////////////////////////////////////////////// 
     
//Sub Question 1.1
             //                    ****1R2 DOUBLE QUESTION(1ST QUESTION)****

    //***echo "Q1.Attempt any 5 question out of 7 question.";
  //***echo "<br>";

    $fetchques=mysqli_query($link, "select ID from it501e where BIT='1R2'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_1R2[] = $quesID; 
        
     }
  //**echo "<br>";
  shuffle($BIT_1R2);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex1_1 = array_rand($BIT_1R2);
  //**echo 'random index generated::'.$randIndex1_1;
  //***echo "<br>";
  //**echo "success phase one";
    $a=$BIT_1R2[$randIndex1_1];
    //**echo "<br>";

     $b=$a['ID'];
    //** echo $b;
 //**echo "<br>";
      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
                    $Q1_1=$row['QUESTIONS']; 
         //*** echo '1.1'.$row['QUESTIONS']; 
    
      }
// Question 1.2 
      //                              ****3R2 DOUBLE QUESTION(1ST QUESTION)****

    $fetchques=mysqli_query($link, "select ID from it501e where BIT='3R2'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_3R2[] = $quesID; 
        
     }
  //echo "<br>";
  shuffle($BIT_3R2);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex1_2 = array_rand($BIT_3R2);
  //**echo 'random index generated::'.$randIndex1_2;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_3R2[$randIndex1_2];
    //***echo "<br>";

     $b=$a['ID'];
//**     echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
                          $Q1_2=$row['QUESTIONS']; 
          //echo "1.2 ".$row['QUESTIONS']; 
    
      }
// Question 1.3
      //                                   ****3R2 DOUBLE QUESTION(2nd QUESTION)****

       //$fetchques=mysqli_query($link, "select ID from it501e where BIT='3R2'"); 
      //while($quesID=mysqli_fetch_array($fetchques)){

     // $BIT_3R2[] = $quesID; 
        
     //}
  //echo "<br>";
  //shuffle($BIT_3R2);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  L1_3:
  $randIndex1_3 = array_rand($BIT_3R2);
  if($randIndex1_2!=$randIndex1_3)
  {
       

  //**echo 'random index generated::'.$randIndex1_3;
//*** echo "<br>";
  //**echo "success phase one";
    $a=$BIT_3R2[$randIndex1_3];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist))
         {
               $Q1_3=$row['QUESTIONS']; 
          //***echo '1.3 '.$row['QUESTIONS']; 
         }
      

    }
    else
    {
       goto L1_3;

    }


// Question 1.4
    //5R2 SINGLE QUESTION
    $fetchques=mysqli_query($link, "select ID from it501e where BIT='5R2'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_5R2[] = $quesID; 
        
     }
  //echo "<br>";
  shuffle($BIT_5R2);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex1_4 = array_rand($BIT_5R2);
  //**echo 'random index generated::'.$randIndex1_4;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_5R2[$randIndex1_4];
    //***echo "<br>";

     $b=$a['ID'];
     //echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
              $Q1_4=$row['QUESTIONS']; 
         // echo '1.4'.$row['QUESTIONS']; 
    
      }

// Question 1.5
     //6R2 SINGLE QUESTION
    $fetchques=mysqli_query($link, "select ID from it501e where BIT='6R2'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_6R2[] = $quesID; 
        
     }
  //echo "<br>";
  shuffle($BIT_6R2);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex1_5 = array_rand($BIT_6R2);
  //**echo 'random index generated::'.$randIndex1_5;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_6R2[$randIndex1_5];
   //*** echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");
 
         while($row=mysqli_fetch_array($fetchlist)){
                       $Q1_5=$row['QUESTIONS'];
 //         echo '1.5 '.$row['QUESTIONS']; 
    
      }


//Sub Question 1.6
             //                    ****1R2 DOUBLE QUESTION(2nd QUESTION)****
      //***echo "<br>";
  //shuffle($BIT_3R2);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  L1_6:
  $randIndex1_6 = array_rand($BIT_1R2);
  if($randIndex1_1!=$randIndex1_6)
  {
       
                                       
  //**echo 'random index generated::'.$randIndex1_6;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_1R2[$randIndex1_6];
    //echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist))
         {
               $Q1_6=$row['QUESTIONS'];
          //echo '1.6 '.$row['QUESTIONS']; 
         }
      

    }
    else
    {
       goto L1_6;

    }

// Question 1.7
     //2R2 SINGLE QUESTION
    $fetchques=mysqli_query($link, "select ID from it501e where BIT='2R2'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_2R2[] = $quesID; 
        
     }
  //echo "<br>";
  shuffle($BIT_2R2);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex1_7 = array_rand($BIT_2R2);
  //**echo 'random index generated::'.$randIndex1_7;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_2R2[$randIndex1_7];
    //***echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
               $Q1_7=$row['QUESTIONS'];
         //*** echo '1.7 '.$row['QUESTIONS']; 
    
      }

//*** echo "<br>";

//*** echo "<br>";

//*** echo "<br>";


//////////////////////////////////////////////* Question 2 */////////////////////////////////////////////////// 
 
//*** echo "Q2.Attempt any 3 question out of 5 question.";
  //*** echo "<br>";

// Question 2.1
   //2R4 SINGLE QUESTION
$fetchques=mysqli_query($link, "select ID from it501e where BIT='2R4'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_2R4[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_2R4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex2_1 = array_rand($BIT_2R4);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_2R4[$randIndex2_1];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
                    $Q2_1=$row['QUESTIONS'];
          //***echo '2.1 '.$row['QUESTIONS']; 
    
      }


// Question 2.2
   //1U4 DOUBLE QUESTION(1ST QUESTION)
$fetchques=mysqli_query($link, "select ID from it501e where BIT='1U4'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_1U4[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_1U4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex2_2 = array_rand($BIT_1U4);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_1U4[$randIndex2_2];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
               $Q2_2=$row['QUESTIONS'];
          //***echo '2.2 '.$row['QUESTIONS']; 
    
      }


// Question 2.3
   //5U4 DOUBLE QUESTION(1ST QUESTION)
$fetchques=mysqli_query($link, "select ID from it501e where BIT='5U4'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_5U4[] = $quesID; 
        
     }
//*** echo "<br>";
  shuffle($BIT_5U4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex2_3 = array_rand($BIT_5U4);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_5U4[$randIndex2_3];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
                 $Q2_3=$row['QUESTIONS'];
          //***echo '2.3 '.$row['QUESTIONS']; 
    
      }


// Question 2.4
   //4A4 SINGLE QUESTION
$fetchques=mysqli_query($link, "select ID from it501e where BIT='4A4'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_4A4[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_4A4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex2_4 = array_rand($BIT_4A4);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_4A4[$randIndex2_4];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
                   $Q2_4=$row['QUESTIONS'];
          //echo '2.4 '.$row['QUESTIONS']; 
    
      }

// Question 2.5
   //2U4 DOUBLE  QUESTION (1ST QUESTION)
$fetchques=mysqli_query($link, "select ID from it501e where BIT='2U4'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_2U4[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_2U4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex2_5 = array_rand($BIT_2U4);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_2U4[$randIndex2_5];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
               $Q2_5=$row['QUESTIONS'];
      //***    echo '2.5 '.$row['QUESTIONS']; 
    
      }
/***echo "<br>";
echo "<br>";
  echo "<br>";***/
//////////////////////////////////////////////* Question 2 */////////////////////////////////////////////////// 
 
//***echo "Q3.Attempt any 3 question out of 5 question.";
  //***echo "<br>";

// Question 3.1
   //2U4 double QUESTION(second time)
   //***echo "<br>";
  //shuffle($BIT_3R2);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  L3_1:
  $randIndex3_1 = array_rand($BIT_2U4);
  if($randIndex2_5!=$randIndex3_1)
  {
       
                                       
  //**echo 'random index generated::'.$randIndex1_6;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_2U4[$randIndex3_1];
    //echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist))
         {
                   $Q3_1=$row['QUESTIONS'];
        //***  echo '3.1 '.$row['QUESTIONS']; 
         }
      

    }
    else
    {
       goto L3_1;

    }

// Question 3.2
   //3U4 double QUESTION(first time)
  
 $fetchques=mysqli_query($link, "select ID from it501e where BIT='3U4'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_3U4[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_3U4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex3_2 = array_rand($BIT_3U4);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_3U4[$randIndex3_2];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
                     $Q3_2=$row['QUESTIONS'];
       //***   echo '3.2 '.$row['QUESTIONS']; 
    
      }

    // Question 3.3
   //6U4 SINGLE QUESTION
$fetchques=mysqli_query($link, "select ID from it501e where BIT='6U4'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_6U4[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_6U4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex3_3 = array_rand($BIT_6U4);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_6U4[$randIndex3_3];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
                  $Q3_3=$row['QUESTIONS'];
          //***echo '3.3 '.$row['QUESTIONS']; 
    
      }
  
// Question 3.4
   //4R4 SINGLE QUESTION
$fetchques=mysqli_query($link, "select ID from it501e where BIT='4R4'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_4R4[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_4R4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex3_4 = array_rand($BIT_4R4);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_4R4[$randIndex3_4];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

          while($row=mysqli_fetch_array($fetchlist)){
                    $Q3_4=$row['QUESTIONS'];
        //***  echo '3.4 '.$row['QUESTIONS']; 
    
      }

  //Sub Question 3.5
             //5A4 SINGLE QUESTION
$fetchques=mysqli_query($link, "select ID from it501e where BIT='5A4'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_5A4[] = $quesID; 
        
     }
  echo "<br>";
  shuffle($BIT_5A4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex3_5 = array_rand($BIT_5A4);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_5A4[$randIndex3_5];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
                   $Q3_5=$row['QUESTIONS'];
          //***echo '3.5 '.$row['QUESTIONS']; 
    
      }

   /*** echo "<br>";
echo "<br>";
  echo "<br>";**/
//////////////////////////////////////////////* Question 4 */////////////////////////////////////////////////// 
 
//***echo "Q4.Attempt any 3 question out of 5 question.";
  //***echo "<br>";
// Question 4.1
   //3U4 double QUESTION(second time)
   //***echo "<br>";
  //shuffle($BIT_3U4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  L4_1:
  $randIndex4_1 = array_rand($BIT_3U4);
  if($randIndex3_2!=$randIndex4_1)
  {
       
                                       
  //**echo 'random index generated::'.$randIndex1_6;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_3U4[$randIndex4_1];
    //echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist))
         {
                     $Q4_1=$row['QUESTIONS'];
    //***       echo '4.1 '.$row['QUESTIONS']; 
         }
      

    }
    else
    {
       goto L4_1;

    }

//Sub Question 4.2
             //4U4 SINGLE QUESTION
$fetchques=mysqli_query($link, "select ID from it501e where BIT='4U4'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_4U4[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_4U4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex4_2 = array_rand($BIT_4U4);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_4U4[$randIndex4_2];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
                   $Q4_2=$row['QUESTIONS'];
          //***echo '4.2'.$row['QUESTIONS']; 
    
      }
    //Sub Question 4.3
             //1A4 SINGLE QUESTION
$fetchques=mysqli_query($link, "select ID from it501e where BIT='1A4'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_1A4[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_1A4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex4_3 = array_rand($BIT_1A4);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_1A4[$randIndex4_3];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
            $Q4_3=$row['QUESTIONS'];
       //***   echo '4.3'.$row['QUESTIONS']; 
    
      }  

// Question 4.4
   //1U4 double QUESTION(second time)
   //*** echo "<br>";
  //shuffle($BIT_1U4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  L4_4:
  $randIndex4_4 = array_rand($BIT_1U4);
  if($randIndex2_2!=$randIndex4_4)
  {
       
                                       
  //**echo 'random index generated::'.$randIndex1_6;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_1U4[$randIndex4_4];
    //echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist))
         {
               $Q4_4=$row['QUESTIONS'];
       //***    echo '4.4 '.$row['QUESTIONS']; 
         }
      

    }
    else
    {
       goto L4_4;

    }

// Question 4.5
   //5U4 double QUESTION(second time)
   //***echo "<br>";
  //shuffle($BIT_5U4);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  L4_5:
  $randIndex4_5 = array_rand($BIT_5U4);
  if($randIndex2_3!=$randIndex4_5)
  {
       
                                       
  //**echo 'random index generated::'.$randIndex1_6;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_5U4[$randIndex4_5];
    //echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist))
         {
                $Q4_5=$row['QUESTIONS'];
          //***echo '4.5 '.$row['QUESTIONS']; 
         }
      

    }
    else
    {
       goto L4_5;

    }
/*
    echo "<br>";
echo "<br>";
  echo "<br>";*/
//////////////////////////////////////////////* Question 2 */////////////////////////////////////////////////// 
 
//***echo "Q5.Attempt any 2 question out of 3 question.";
  //***echo "<br>";
//Sub Question 5.1
//4A6 SINGLE QUESTION
$fetchques=mysqli_query($link, "select ID from it501e where BIT='4A6'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_4A6[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_4A6);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex5_1 = array_rand($BIT_4A6);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_4A6[$randIndex5_1];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
              $Q5_1=$row['QUESTIONS'];
          //***echo '5.1'.$row['QUESTIONS']; 
    
      }  

      // Question 5.2
   //6A6 double QUESTION(first time)
  
 $fetchques=mysqli_query($link, "select ID from it501e where BIT='6A6'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_6A6[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_6A6);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex5_2 = array_rand($BIT_6A6);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_6A6[$randIndex5_2];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

       $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

          while($row=mysqli_fetch_array($fetchlist)){
              $Q5_2=$row['QUESTIONS'];
          
         //*** echo '5.2 '.$row['QUESTIONS']; 
    
      }
//Sub Question 5.3
//3U6 SINGLE QUESTION
$fetchques=mysqli_query($link, "select ID from it501e where BIT='3U6'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_3U6[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_3U6);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex5_3 = array_rand($BIT_3U6);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_3U6[$randIndex5_3];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
                $Q5_3=$row['QUESTIONS'];

          //***echo '5.3'.$row['QUESTIONS']; 
    
      }  
  /***echo "<br>";
echo "<br>";
  echo "<br>";***/
//////////////////////////////////////////////* Question 2 */////////////////////////////////////////////////// 
 
//***echo "Q6.Attempt any 2 question out of 3 question.";
  //***echo "<br>";
  //Sub Question 6.1
//2A6 SINGLE QUESTION
$fetchques=mysqli_query($link, "select ID from it501e where BIT='2A6'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_2A6[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_2A6);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex6_1 = array_rand($BIT_2A6);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_2A6[$randIndex6_1];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
             $Q6_1=$row['QUESTIONS'];

          //*** echo '6.1'.$row['QUESTIONS']; 
    
      }  

      //Sub Question 6.2
//5A6 SINGLE QUESTION
$fetchques=mysqli_query($link, "select ID from it501e where BIT='5A6'"); 
    while($quesID=mysqli_fetch_array($fetchques)){

      $BIT_5A6[] = $quesID; 
        
     }
  //***echo "<br>";
  shuffle($BIT_5A6);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  $randIndex6_2 = array_rand($BIT_5A6);
  //**echo 'random index generated::'.$randIndex2_1;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_5A6[$randIndex6_2];
    //**echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist)){
             $Q6_2=$row['QUESTIONS'];

       //***   echo '6.2'.$row['QUESTIONS']; 
    
      } 

// Question 6.3
   //6A6 double QUESTION(second time)
   //***echo "<br>";
  //shuffle($BIT_6A6);
  //echo '<pre>'; print_r($ques_array); echo '</pre>';
  L6_3:
  $randIndex6_3 = array_rand($BIT_6A6);
  if($randIndex5_2!=$randIndex6_3)
  {
       
                                       
  //**echo 'random index generated::'.$randIndex1_6;
  //**echo "<br>";
  //**echo "success phase one";
    $a=$BIT_6A6[$randIndex6_3];
    //echo "<br>";

     $b=$a['ID'];
     //**echo $b;

      $fetchlist=mysqli_query($link, "select * from it501e where ID=$b");

         while($row=mysqli_fetch_array($fetchlist))
         {
               $Q6_3=$row['QUESTIONS'];

        //***  echo '6.3 '.$row['QUESTIONS']; 
         }
      

    }
    else
    {
       goto L6_3;

    }       

?>

<?php
// php code to generate and download

// including nessary files
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;


// generate code
$Year = date("Y"); // auto year may be according to system time
$EvenOrODD; // this will stored whether the paper is even or odd
$SCID ="IT501E"; // crouse code
//$GCN  = $_POST["SubName"]; // given crouse name
$DEPT_NAME =$_SESSION['D']; // selected dept name
$STime =$_SESSION['T']; // selected time as per choice ChapterNum is reuse as time

// automatically even odd finding for as per year
if(fmod($Year,2) == 0)
{
   // even
   $EvenOrODD = "EVEN";

}else
{
  // odd
  $EvenOrODD = "ODD";
}

// end of gen


  // get all the nessary part to make question pepaer

  // end of nessary part of quetion papaer

  // instantiate and use the dompdf class
  $dompdf = new Dompdf();

  // this is html page
  $htmlRandomPage =
  "


  <html>


  <style>
      table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      }
    </style>




    <body>

    <!-- start of header by shoheb -->
    <h2 style=text-align:center;text-transform:uppercase;margin-bottom:0;>
    government polytechnic, sadar, nagpur
    </h2>

    <h4 style=text-align:center;margin-top:3px;margin-bottom:6px;>
    (An Autonomous Institute of Government of Maharashtra)
    </h4>

    <h3 style=text-align:center;text-transform:uppercase;letter-spacing:5px;margin-top:0;>
      term examination
    </h3>

    <h3 style=text-align:right;margin-bottom:0;position:relative;left:-110px;>
         $EvenOrODD $Year
    </h3>

    <!--<h4 style=text-align:right;margin-top:3px;text-transform:uppercase;display:inline-block;position:absolute;left:850px;>Course Code : IT501E </h4>-->

     <h4 style=text-align:right;margin-top:3px;text-transform:uppercase;display:inline-block;position:absolute;left:500px;>Course Code : IT501E</h4>

    <h4 style=text-align:left;margin-top:3px;text-transform:uppercase;display:inline-block;margin-bottom:0;>Course Name :Advance Java</h4>

   <!-- <h4 style=text-align:right;margin-top:3px;text-transform:uppercase;display:inline-block;position:absolute;left:500px;>Course Code : IT501E</h4>-->

    <h4 style=text-align:left;margin-top:3px;margin-bottom:0;>PROGRAMME  : Diploma in $DEPT_NAME</h4>
    <h4 style=text-align:right;margin-top:3px;text-transform:uppercase;display:inline-block;position:absolute;left:500px;>MAXIMUM MARK : 70</h4>
    <h4 style=text-align:left;margin-top:3px;text-transform:uppercase;display:inline-block;margin-bottom:0;>TIME   : $STime Hours</h4>

    <hr style=height:2px;border:none;background:black;>


    <h4 style=text-align:right;margin-top:3px;text-transform:uppercase;display:inline-block;position:absolute;left:350px;>Enrollment no :</h4>

     <img src=Images/EnNo.png  height=30 width=200 align=right>

    <h4 style=text-align:left;margin-top:3px;text-transform:uppercase;display:inline-block;margin-bottom:0;><u>instructions :</u></h4>

    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>1) All questions are compulsory.</h4>
    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>2) Illustrate your answers with neat sketches wherever necessary.</h4>
    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>3) Use of Non Programmable Electronic Pocket Calculators is permissible.</h4>
    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>4) Figures to the right indicate full marks.</h4>
    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>5) Assume suitable addtional data if necessary.</h4>
    <h4 style=position:relative;left:20px;margin-top:0;margin-bottom:0;>6) Moblie phone & other similar electronic gadgets are strictly prohibited inside examination hall.</h4>


    <hr style=height:2px;border:none;background:black;>
    <br>

    <!-- end of header by shoheb -->";

  // featch required data for two marks here

  

  // half page start here
  $htmlRandomPage .= "<!-- Start of Questions by shoheb -->


    <table style=width:100%; >

      <tr>

        <th>Q.1</th>
        <th> </th>
        <th style=width:90%;text-align:left; >Attempt ANY FIVE</th>
        <th>Marks(10)</th>

      </tr>
      <tr>

        <td>1R2</td>
        <td>a)</td>
        <td>$Q1_1</td>
        <td>2</td>

      </tr>
      <tr>

        <td>3R2</td>
        <td>b)</td>
        <td>$Q1_2</td>
        <td>2</td>

      </tr>
      <tr>

        <td>3R2</td>
        <td>c)</td>
        <td>$Q1_3</td>
        <td>2</td>

      </tr>
      <tr>

        <td>5R2</td>
        <td>d)</td>
        <td>$Q1_4</td>
        <td>2</td>

      </tr>
      <tr>

        <td>6R2</td>
        <td>e)</td>
        <td>$Q1_5</td>
        <td>2</td>

      </tr>
      <tr>

        <td>1R2</td>
        <td>f)</td>
        <td>$Q1_6</td>
        <td>2</td>

      </tr>
      <tr>

        <td>2R2</td>
        <td>g)</td>
        <td>$Q1_7</td>
        <td>2</td>

      </tr>
  <!-- Q2. -->
       <tr>

        <th>Q.2</th>
        <th>   </th>
        <th style=width:90%;text-align:left; >Attempt ANY THREE</th>
        <th>Marks(12)</th>

      </tr>
       <tr>

        <td>2R4</td>
        <td>a)</td>
        <td>$Q2_1</td>
        <td>4</td>

      </tr>
      <tr>

        <td>1U4</td>
        <td>b)</td>
        <td>$Q2_2</td>
        <td>4</td>

      </tr>
      <tr>

        <td>5U4</td>
        <td>c)</td>
        <td>$Q2_3</td>
        <td>4</td>

      </tr>
      <tr>

        <td>4A4</td>
        <td>d)</td>
        <td>$Q2_4</td>
        <td>4</td>

      </tr>
      <tr>

        <td>2U4</td>
        <td>e)</td>
        <td>$Q2_5</td>
        <td>4</td>

      </tr>
      <!-- Q3. -->
       <tr>

        <th>Q.3</th>
        <th>   </th>
        <th style=width:90%;text-align:left; >Attempt ANY THREE</th>
        <th>Marks(12)</th>

      </tr>
       <tr>

        <td>2U4</td>
        <td>a)</td>
        <td>$Q3_1</td>
        <td>4</td>

      </tr>
      <tr>

        <td>3U4</td>
        <td>b)</td>
        <td>$Q3_2</td>
        <td>4</td>

      </tr>
      <tr>

        <td>6U4</td>
        <td>c)</td>
        <td>$Q3_3</td>
        <td>4</td>

      </tr>
      <tr>

        <td>4R4</td>
        <td>d)</td>
        <td>$Q3_4</td>
        <td>4</td>

      </tr>
      <tr>

        <td>5A4</td>
        <td>e)</td>
        <td>$Q3_5</td>
        <td>4</td>

      </tr>
      <!-- Q4. -->
       <tr>

        <th>Q.4</th>
        <th>   </th>
        <th style=width:90%;text-align:left; >Attempt ANY THREE</th>
        <th>Marks(12)</th>

      </tr>
       <tr>

        <td>3U4</td>
        <td>a)</td>
        <td>$Q4_1</td>
        <td>4</td>

      </tr>
      <tr>

        <td>4U4</td>
        <td>b)</td>
        <td>$Q4_2</td>
        <td>4</td>

      </tr>
      <tr>

        <td>1A4</td>
        <td>c)</td>
        <td>$Q4_3</td>
        <td>4</td>

      </tr>
      <tr>

        <td>1U4</td>
        <td>d)</td>
        <td>$Q4_4</td>
        <td>4</td>

      </tr>
      <tr>

        <td>5U4</td>
        <td>e)</td>
        <td>$Q4_5</td>
        <td>4</td>

      </tr>
      <!-- Q5. -->
       <tr>

        <th>Q.5</th>
        <th>   </th>
        <th style=width:90%;text-align:left; >Attempt ANY TWO</th>
        <th>Marks(12)</th>

      </tr>
       <tr>

        <td>4A6</td>
        <td>a)</td>
        <td>$Q5_1</td>
        <td>6</td>

      </tr>
      <tr>

        <td>6A6</td>
        <td>b)</td>
        <td>$Q5_2</td>
        <td>6</td>

      </tr>
      <tr>

        <td>3U6</td>
        <td>c)</td>
        <td>$Q5_3</td>
        <td>6</td>

      </tr>
      <!-- Q6. -->
       <tr>

        <th>Q.6</th>
        <th>   </th>
        <th style=width:90%;text-align:left; >Attempt ANY TWO</th>
        <th>Marks(12)</th>

      </tr>
       <tr>

        <td>2A6</td>
        <td>a)</td>
        <td>$Q6_1</td>
        <td>6</td>

      </tr>
      <tr>

        <td>5A6</td>
        <td>b)</td>
        <td>$Q6_2</td>
        <td>6</td>

      </tr>
      <tr>

        <td>6A6</td>
        <td>c)</td>
        <td>$Q6_3</td>
        <td>6</td>

      </tr>


    </table>
   <!-- End of Questions by shoheb -->


    </body>

  </html>


  ";
  // end of htmnl page

  $dompdf->loadHtml($htmlRandomPage);

  // (Optional) Setup the paper size and orientation
  $dompdf->setPaper('A4', 'portrait');

  // Render the HTML as PDF
  $dompdf->render();

  // cariiculum id for name
  $CCID = $SCID."".rand();
  // Output the generated PDF to Browser
  $dompdf->stream($CCID.".pdf");

  header("location: \project2019-2020\generate_question_paper_module\generatepaper.php");
   
// end of php code
?>
 <!--<script>

       if ( window.history.replaceState ) {
           window.history.replaceState( null, null, window.location.href );
       }
   </script>
-->






  