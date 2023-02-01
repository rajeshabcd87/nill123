<?php

session_start();
if(isset($_SESSION['agniveer_no']))
{
?>
<html>
    <head>
        <style>
            li{
                display:block;
                width:80%;
                height:50px;
                padding:5px;
                color:red;
                background-color: aqua;
                font-size: 30px;;


            }
            li:hover{
                background-color: cornflowerblue;
            }
            .class1{
                width:25%;
                height:100%;
                float:left;
                background-color: antiquewhite;
            }
            .class2{
                width:74%;
                height:100%;
                float:left;
                background-color: rgb(110, 185, 236);
                padding:5px;
                font-size: 20px;
            }
            .image1::after{
                    content:"";
                    clear:both;
                    display:table;
            }
            a{
                text-decoration: none;
            }
            .div5{
                text-align: center;
                text-shadow: 5px 5px 5px red;
                background-color: rgb(207, 214, 214);
                font-size: 40px;
            }
            .overall{
                background-color: bisque;
                overflow-y:scroll;
            }
        </style>
     
    <body >
        <div class="overall">
        <div   class="div5">
            <P></P>
            <!-- <img style="float:left;" src="watch.jpg" width="80px" height="90px" alt="image not found">
            <img style="float:right;" src="img_xml.jpg" width="80px" height="90px" alt="image not found"> -->
            <h1>Agniveer Assessment (FINAL YEAR) </h1>
        </div>
        <div style="overflow-y:scroll;">
        

       

        <div class="class1">
            <ul>
                <li ><a href="assessment.php" target="iframe_a">Assessment</a></li><p></p>
                <li ><a href="discipline.php" target="iframe_a">Discipline Marks</a></li><p></p>
                <li ><a href="calculate_marks_final.php" target="iframe_a">Calculate Marks</a></li><p></p>

                 <li ><a href="awards.php" target="iframe_a">Awards</a></li><p></p>
                
                 <li id="logout"><a href="agniveer_mainpage.php">BACK</a></li><p></p>
                
            </ul>
        </div>
       
            

        <div class="class2">
            <iframe src="finalyear.php" width=100% height=100% name="iframe_a"></iframe>
           
                                
        </div>

        </div>
        </div>
    </div>
</div>
    </body>
</html>

<?php
}
?>