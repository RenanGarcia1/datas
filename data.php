<!DOCTYPE html>
<head>
    <title>Datas</title>
</head>
<body>
<style>  
div.a{   
 text-align: center;
 }
div.b{
	color: brown;
}	
div.c{
	color: green;
	text-align: center;
}	
</style>
        <form method="get">
		<div class="a">             
				<h1>Diferença de duas datas em dias</h1>
				<div class="b">
					   <label for="date1"><h2>Primeira Data</h2><label>
                        <input type="date" name="date1" id="date1" >

                    <br>
					<br>
                        <label for="date2"><h2>Segunda Data</h2><label>
                        <input type="date" name="date2" id="date2" >
						</div>
						</div>
                    <br>
					<br>
					<div class="c">
                        <input type="submit" value="Diferença em dias">
	
        </form>
        <?php
            $d1 = $_GET["date1"];
            $d2 = $_GET["date2"];		
            if($d1 and $d2){
                $dt1 = new DateTime($d1);
                $dt2 = new DateTime($d2);
                $dateDiff = $dt1->diff($dt2);    
                echo "<br> <br> A diferença em dias é de: ". $dateDiff->days."";
            }
        ?>
