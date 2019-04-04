<?php
    $db_hostname = '';
    $db_username = '';
    $db_password = '';
    $db_database = '';
    
    $con = mysqli_connect($db_hostname,$db_username,$db_password);
    if (!$con){
        die('Could not connect: ' . mysqli_error());
    }
    
    mysqli_select_db($con, $db_database);
    
    ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.flex-container {
display: -webkit-flex;
display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
padding: 15px;
    -webkit-flex: 1 100%;
flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: black;color:white;}
footer {background: #aaa;color:white;}
    .nav {background:#eee;}
        
        .nav ul {
            list-style-type: none;
        padding: 0;
        }
        .nav ul a {
            text-decoration: none;
        }
        
        @media all and (min-width: 768px) {
            .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
            .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
            footer {-webkit-order:3;order:3;}
        }
        </style>
        </head>
        <body>
        
        <div class="flex-container">
        <header>
        <h1>BANANA GENES DATABASE</h1>
        </header>
        
        <nav class="nav">
        <ul>
        <li><a href="https://banana-genes-database.000webhostapp.com/">Overview</a></li> <br>
        Search gene according to:
        <li><a href="https://banana-genes-database.000webhostapp.com/SearchGeneID.php">Gene ID</a></li>
        <li><a href="https://banana-genes-database.000webhostapp.com/SearchChromosome.php">Chromosome</a></li>
        <li><a href="https://banana-genes-database.000webhostapp.com/SearchRange.php">Range</a></li>
        <li><a href="https://banana-genes-database.000webhostapp.com/SearchGC.php">GC Percentage (%)</a></li>
        <li><a href="https://banana-genes-database.000webhostapp.com/SearchDescription.php">Description</a></li>
        
        <p>  <br> <br> <br> <br>
        <br> <br> <br> <br> <br> <br> <br> <br> </p>
        
        <img id="UM" src="https://upload.wikimedia.org/wikipedia/en/b/b1/Seal_of_the_University_of_Malaya.png" alt="UM" width="100" height="110">
        
        </ul>
        </nav>
        
        <article class="article">
        <h1>Search Chromosome</h1>
        <head>
        
        <title>Search Chromosome</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css"/>
        </head>
        
        <body>
        
        
        
        
        <fieldset>
    <legend> Query </legend>
        <br>
        <h4>Enter Chromosome : </h4>
        <p>You  may search either by entering the full Chromosome or only a part of it.</p>
        <form  method="post" action="ResultChromosome.php?go"  id="searchform">
        <input type="text" name="name" />
        <input  type="submit" name="submit" value="Search">
        </form>
        <br><i>For example, chr01 or chr</i>
        <br>
        </fieldset>

        

       <p align=right><a href="https://banana-genes-database.000webhostapp.com/">Back to Overview</a></p>
        
                </article>
                
                <footer>Copyright &copy; lina_aneesa@siswa.um.edu.my</footer>
        </div>
        
        </body>
        </html>
