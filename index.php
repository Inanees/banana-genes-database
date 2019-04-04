<!DOCTYPE html>
<html>
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
        <title>Overview</title>
        
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
        <h1>Overview</h1>
        <p>The Banana_Genes database is genetic and genomic data for the three families, bHLH Family, WRKY Family, and MYB Family. Banana is one of the world’s favourite fruits and one of the most important crops for developing countries.</p>
        <p>The study of the banana genome has been enhanced by many tools and resources that allows harnessing its sequence. This database can be used to study gene families.</p>
            <p><strong>Click the links on the left for further enquiry</strong></p>
            
           
            <img id="Gene" src="http://i.huffpost.com/gen/1086158/images/o-HUMAN-GENE-SUPREME-COURT-facebook.jpg" alt="Gene" width="800" height="320">
            
            </article>
            
            <footer>Copyright &copy; lina_aneesa@siswa.um.edu.my</footer>
        </div>
        
        </body>
        </html>
