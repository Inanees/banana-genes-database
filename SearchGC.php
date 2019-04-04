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
        <h1>Search GC Percentage (%)</h1>
        <head>
        
        <title>Search GC Percentage (%)</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css"/>
        </head>
        
        <p align=right><a href="https://banana-genes-database.000webhostapp.com/">Back to Overview</a></p>
        
        
        </html>
        
        <?php
        $server="";
        $username="";
        $password="";
        $connect_mysql=mysql_connect($server,$username,$password) or die ("Connection Failed!");
        $mysql_db=mysql_select_db("",$connect_mysql) or die ("Could not Connect to Database");
        $query = "SELECT * FROM Genes";
        $result=mysql_query($query) or die("Query Failed : ".mysql_error());
        $i=0;
        while($rows=mysql_fetch_array($result))
        {
            $roll[$i]=$rows['Chromosome'];
            $i++;
        }
        $total_elmt=count($roll);
        ?>
        
        
        
        
        <fieldset>
        <legend> Query </legend>
        <br>
        <h4>Enter GC Percentage (%) :</h4>
        <p>You  may search the GC(%), by entering the <b>minimum percentage</b> and the <b>maximum percentage</b>.</p>
        
        <form action="SearchGC.php?go" method="post" id="searchform">
        </select>
        Range to search the GC(%) : <b>Minimum</b> <input type="text" name="keyword" placeholder='>0.00'/> % and
         <b>Maximum</b>
        <input type="text" name="keyword2" placeholder='<100.00'/> %
        <input type="submit" name="submit" value="Search" /><br /><br />
        </form>
        
        <br><i>For example, Minimum = 55 , Maximum = 60 </i>
        
        </br>
        </fieldset>
        
        
        
        
        
        <?php
        if(isset($_POST['keyword']))
        {
            $min=$_POST['keyword'];
            if(isset($_POST['keyword2']))
            {
                $max=$_POST['keyword2'];
                
                echo '<h3>Search Results: GC Percentage (%)</h3>';
                
                echo 'You have entered :- <br>';
                echo '<b>Minimum percentage</b>: ';
                echo $min;
                echo ' %<br /><b>Maximum percentage</b>: ';
                echo $max;
                echo ' %<br /><br />The results below have ';
                echo $min;
                echo ' - ';
                echo $max;
                echo '% for GC percentage.';
                echo '<br /><br />';
            }
            
            $query2 = "SELECT  g.GeneID, g.Chromosome, g.Start, g.End, g.GC_Percentage, g.Nucleotide_Sequences, g.Protein_Sequences, d.Description, g.Family
            FROM Genes g, Description d
            WHERE g.DescriptionID=d.DescriptionID AND
            (g.GC_Percentage BETWEEN $min AND $max)";
            
            $result2=mysql_query($query2) or die("Query Failed : ".mysql_error());
            
            
            $count = mysql_num_rows($result2);
            echo "The query returned " . $count . " result(s).";
            
            ?>
            
            
            <p align=right><A HREF="#gotobottom">Go to Bottom</A></p>
            
            
            
            
            <table>
            
            <!--utk table: td-table data, th:table header-->
            
            <style>
            table, th, td {
            border: 1px solid black;
            }
            </style>
            
            
            <th>GeneID</th>
            <th>Family</th>
            <th>Chrom.</th>
            <th>Start</th>
            <th>End</th>
            <th>GC (%)</th>
            <th>Description</th>
            <th>Nucleotide_Sequences</th>
            <th>Protein_Sequences</th>
            </tr>
            
            <?php
            
            while($row=mysql_fetch_array($result2))
            {
                
                ?>
                
                <tr>
                
                <td> <?php echo $row['GeneID'] ?> </td>
                <td> <?php echo $row['Family'] ?> </td>
                <td> <?php echo $row['Chromosome'] ?> </td>
                <td> <?php echo $row['Start'] ?> </td>
                <td> <?php echo $row['End'] ?> </td>
                <td> <?php echo $row['GC_Percentage'] ?> </td>
                <td> <?php echo $row['Description'] ?> </td>
                <td> <?php $newString = ' ';
                $string = 	$row['Nucleotide_Sequences'];
                for($i=0; $i<strlen($string); $i++)
                {
                    $newString .= $string[$i] . '&shy;';
                }
                echo $newString;
                ?> </td>
                <td> <?php $newprot = ' ';
                $prot = $row['Protein_Sequences'];
                for($i=0; $i<strlen($prot); $i++)
                {
                    $newprot .= $prot[$i] . '&shy;';
                }
                echo $newprot;
                ?> </td>
                <table>
                <?php
                echo "<br/>";
                ?>
                <table>
                
                <?php
            }
            mysql_close($connect_mysql);
        }

        
        ?>

        
        
        
        
        
        <body>

        
        <A NAME="gotobottom">
        
        <p align=right><A HREF="#gototop">Go to Top</A></p>
        

       <p align=right><a href="https://banana-genes-database.000webhostapp.com/">Back to Overview</a></p>
        
                </article>
                
                <footer>Copyright &copy; lina_aneesa@siswa.um.edu.my</footer>
        </div>
        
        </body>
        </html>
