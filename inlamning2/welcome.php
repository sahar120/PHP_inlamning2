<?php
$anvandernamn = $_POST["användernamn"];
$losenord = $_POST["lösenord"];

if ($anvandernamn == $losenord) {
    echo "Välkomna till webbsidan, din inloggning lyckades!";
}
else{
    echo "Det gick inte att logga in.";
}

?>

