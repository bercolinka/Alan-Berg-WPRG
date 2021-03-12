
<FORM action="index2.php">
<TABLE>

<TR>
<TD>Podaj figure:</TD>
<TD><INPUT figura="Podaj figuree"></TD>
</TR>

<TR>
<TD>Podaj wysokosc[cm]:</TD>
<TD><INPUT wysokosc="wysokosc"></TD>
</TR>

<TR>
<TD>Podaj podstawe[cm]:</TD>
<TD><INPUT podstawa="podstawa"></TD>
</TR>

<TR>
<TD> &nbsp; </TD>
<TD> <INPUT type="submit" value="Potwierdz"></TD>
</TR>
</TABLE>
</FORM>

<?php
function pole($figura)
{
    switch ($figura)
    {
        case "prostokat":
        echo("Pole prostokata wynosi: ". $podstawa );
        

    }

}
?> 
