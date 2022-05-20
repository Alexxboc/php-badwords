<?php 

// Definisco una variabile che contenga il testo da stamapare
$speech = "Scegliete la vita; scegliete un lavoro; scegliete una carriera; 
scegliete la famiglia; scegliete un maxitelevisore del cazzo; scegliete lavatrici, macchine, lettori CD e apriscatole elettrici. 
Scegliete la buona salute, il colesterolo basso e la polizza vita; scegliete un mutuo a interessi fissi; scegliete una prima casa; 
scegliete gli amici; scegliete una moda casual e le valigie in tinta; scegliete un salotto di tre pezzi a rate e ricopritelo con una stoffa del cazzo; 
scegliete il fai da te e chiedetevi chi cacchio siete la domenica mattina; scegliete di sedervi sul divano a spappolarvi il cervello e lo spirito con i quiz mentre vi ingozzate di schifezze da mangiare. 
Alla fine scegliete di marcire, di tirare le cuoia in uno squallido ospizio ridotti a motivo di imbarazzo per gli stronzetti viziati ed egoisti che avete figliato per rimpiazzarvi; scegliete un futuro; scegliete la vita. 
Ma perché dovrei fare una cosa così? Io ho scelto di non scegliere la vita, ho scelto qualcos'altro, le ragioni? Non ci sono ragioni, chi ha bisogno di ragioni quando ha l'eroina? ";

// Definisco una variabile che contenga la lunghezza della stringa
$speechLength = strlen($speech);
// Stampo in pagina il testo e la sua lunghezza
echo $speech, $speechLength;
// Definisco una varibaile con la parola da censurare scelta dall'utente attraverso il metodo GET
$badWord = $_GET['word'];
// Definisco una variabile che contenga il nuovo testo con la parola scelta 'rimpiazzata'
$newSpeech = str_replace($badWord, '***', $speech);
// Stampo in pagina il nuovo testo e la sua lunghezza
echo $newSpeech, strlen($newSpeech);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    
<p><?php echo $speech ?></p>

<strong><?php echo $speechLength ?></strong>

<p><?php echo $newSpeech ?></p>

<strong><?php echo strlen($newSpeech)?></strong>
</body>
</html>