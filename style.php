<?php
header("Content-type: text/css; charset: UTF-8");
$bkdColor = "#357C3C";
$btColor = "#548CFF";
$labelColor = "#B33030";
$spanColor = "black";
?>

body{
   padding: 1% 5% 5% 5%;
}

#step-2 {
  display: none;
  margin: 0 0 5% 10%;
}
label{
    font-size: 20px;
}
span{
    color: <?php echo $spanColor; ?>;
}
.category{
    margin: 2% 0 2% 0;
    font-size: 25px;
    color: green;
    font-weight: bold;
}
.check_box{
   margin-left: 2%;
}
.next-btn, .back-btn, #submit-btn{
    margin: 5% 0 2% 0;
    width: 20%;
    height: 40px;
    background-color: <?php echo $btColor; ?>;
    border: 5px solid <?php echo $btColor; ?>;
    border-radius: 5px;
}
 #submit-btn{
    margin: -6% 0 2% 0;
    width: 20%;
    height: 40px;
    background-color: <?php echo $btColor; ?>;
    border: 5px solid <?php echo $btColor; ?>;
    border-radius: 5px;
   float: right;
}
.personal_form{
    margin: 5% 0 5% 0;
    width: 30%;
    height: 40px;
}

<!--#listOf_order{-->
<!--    margin: 0% 0 -1% 5%;-->
<!--    text-align: right;-->
<!--    color: #357C3C;-->
<!--}-->

<!--#total_price{-->
<!--    margin: 5% 0 -1% 40%;-->
<!--    color: --><?php //echo $btColor; ?><!--;-->
<!--}-->

#message{
   background-color: #FFB5B5;
   width: 70%;
   padding: 2%;
   border-radius: 5px;
   font-weight: bold;
}
<!--#success{-->
<!--    background-color: #FFB5B5;-->
<!--    width: 70%;-->
<!--    padding: 2%;-->
<!--    border-radius: 5px;-->
<!--    font-weight: bold;-->
<!--}-->

