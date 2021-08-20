<?php
//for($i=0;$i<20;$i++){
//    echo "<p><input type='text' name='input- $i'> </p>";
//}

echo "<table style='border: 2px solid #ddd;'>";
    echo "<tr style='border: 2px solid #ddd;'>";
        for ($i=1; $i < 5; $i++){
            $r=rand(0,250);
            $g=rand(0,250);
            $b=rand(0,250);
            echo"<td style='border: 2px solid #ddd; background-color: rgb($r,$g,$b);'>$i</td>";
}
    echo "<tr>";
echo "</table>";

