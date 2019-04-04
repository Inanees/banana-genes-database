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
        
        <A NAME="gototop">
        
        <h1>BANANA GENES DATABASE</h1>
        </header>

        
        </body>
        
        <article class="article">
        <h1>Search Results: Gene ID</h1>
        
        <head>
        <title>Search Results: Gene ID</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css"/>
        </head>
        
        <body>
        
        <p align=right><a href="https://banana-genes-database.000webhostapp.com/SearchGeneID.php">Back to Search</a></p>
        
        
        <?php
        if(isset($_POST['submit'])){
            if(isset($_GET['go'])){
                if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
                    $name=$_POST['name'];
                    
                    echo 'Keyword that you entered: ';
                    echo $name;
                    echo '<br /><br />';
                    
                    //connect  to the database
                    $db=mysql_connect  ("", "",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
                    
                    //-select  the database to use
                    $mydb=mysql_select_db("");
                    
                    //-query  the database table
                    $sql="SELECT  g.GeneID, g.Family, g.Chromosome, g.Start, g.End, g.GC_Percentage, d.Description, g.Nucleotide_Sequences, g.Protein_Sequences FROM Genes g, Description d WHERE g.GeneID LIKE '%" . $name .  "%' AND g.DescriptionID=d.DescriptionID" ;
                   
                    //-run  the query against the mysql query function
                    $result=mysql_query($sql);
                    
                    $count = mysql_num_rows($result);
                    echo "The query returned " . $count . " result(s).";
                    
                    ?>
                    
                    
                    <p align=right><A HREF="#gotobottom">Go to Bottom</A></p>
                    
                    
                    
                    <table border>
                    
                    <tr>
                    <th>GeneID</th>
                    <th>Family</th>
                    <th>Chromosome</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>GC_Percentage</th>
                    <th>Description</th>
                    <th>Nucleotide_Sequences</th>
                    <th>Protein_Sequences</th>
                    </tr>
                    
                   
                    
                    <?php
                    //-create  while loop and loop through result set
                    while($row=mysql_fetch_array($result)){
                        $nucleotide=$row['Nucleotide_Sequences'];
                        $newNucleotide=wordwrap($nucleotide, 36, "\n", true);
                        $protein=$row['Protein_Sequences'];
                        $newProtein=wordwrap($protein, 18, "\n", true);
                        
                        ?>
                        
                        
                        <tr>
                        <td><?php echo $row['GeneID'];?></td>
                        <td><?php echo $row['Family'];?></td>
                        <td><?php echo $row['Chromosome'];?></td>
                        <td><?php echo $row['Start'];?></td>
                        <td><?php echo $row['End'];?></td>
                        <td><?php echo $row['GC_Percentage'];?></td>
                        <td><?php echo $row['Description'];?></td>
                        <td><?php echo "$newNucleotide\n";?></td>
                        <td><?php echo "$newProtein\n";?></td>
                        </tr>
                        
                    <?php
                       
                    }
                    ?>
                    
                    </table>
                    
                    <?php
                    
                    echo "The query returned " . $count . " result(s).";
                }
                else{
                    echo  "<p>Please enter a search query. Go back to the previous page.</p>";
                    echo '<a href="https://banana-genes-database.000webhostapp.com/SearchGeneID.php">Previous page</a>';
                }
            }
        }
        
        ?>
        
       <A NAME="gotobottom">
        
        <p align=right><A HREF="#gototop">Go To Top</A></p>
        

        <p align=right><a href="https://banana-genes-database.000webhostapp.com/">Back to Overview</a></p>
        
                </article>
                
                <footer>Copyright &copy; lina_aneesa@siswa.um.edu.my</footer>
        </div>
        
        </body>
        </html>
