<html>
    <head>
        <title>Do While</title>
    </head>
    <body>
    <?php
            $i=1;
            $jum=0;
            
            do {
                $jum=$jum+$i ;
                echo "Bilangan ke : $i, jumlah : $jum <br>";
                $i++;
            }while ($i <= 5);
?>
    </body>
</html>