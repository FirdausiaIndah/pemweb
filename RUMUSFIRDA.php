<?php 
    $panjang = $_GET['panjang'];
    $lebar = $_GET['lebar'];
    $tinggi = $_GET['tinggi'];
    $volume = $panjang * $lebar * $tinggi;
    $Luas = 2 * ($panjang*$lebar + $panjang*$tinggi + $lebar*$tinggi);
?>
<!DOCTYPE html>
<hmtl>
    <head>
        <title>Rumus Balok</title>
        <style type="text/css">
			body {
			background: #cccccc; 
			}
			#header {
				color: white;
				padding: 1px;
				margin-bottom: 30px; margin-right: 300px, margin-left:300px; background: -webkit-gradient(linear, right top, left center, color-stop(0, #cccccc), color-stop(0.5, black), color-stop(1, #cccccc));
			}
			#Balok, #P, #L, #T{
				color: black;
				text-align: center;
				background:-webkit-gradient(linear, right top, right bottom, from (gray), to (black));
			}
        </style>
    </head>
    <body>
    <center>
    <div id="header"><h1>Rumus Luas, Volume dan Keliling Balok</h1></div>
        <form action="RUMUSFIRDA.php" method="GET">
        <table border="1" id="table">
        <tr style="position: center";>
        	<td colspan="3" id="Balok"><h2>BALOK</h2></td>
        </tr>

                <tr>
                    <td id="P">Panjang</td>
                    <td>=</td>
                    <td><input type="text" name="panjang" value="<?php echo $panjang; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td id="L">Lebar</td>
                    <td>=</td>
                    <td><input type="text" name="lebar" value="<?php echo $lebar; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td id="T">Tinggi</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Volume Balok = ".$volume." cm^3 <br/>";
                echo "Luas Balok = " .$Luas. " cm^2 <br/>" ;
            ?>
        </form>
        </center>
    </body>
</hmtl>