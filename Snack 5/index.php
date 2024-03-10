<?php 
/*Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.*/

$text = "I gatti hanno un aspetto dolce e si ha subito voglia di riempirli di coccole. Alcuni di questi, però, dietro a un musetto bellissimo nascondono un carattere particolare. Tra questi ci sono i gatti dai piedi neri conosciuti anche come “tigri del formicaio”. Sono originari dell’Africa e si contraddistinguono dagli altri perché sono abili cacciatori e feroci con le loro prede, ma non con gli uomini. Nonostante sia una razza molto brava nella caccia, rischia purtroppo di estinguersi.

Uno degli ultimi esemplari dei gatti dai piedi neri che ha attirato l’attenzione è Gaia, una gattina di appena otto mesi che è arrivata all’Hogle Zoo nello Utah.

I gatti dai piedi neri sono abili cacciatori I gatti dai piedi neri, come abbiamo visto, sono originari dell’Africa, in particolare della Namibia, Sud Africa e Botswana. Si muovono principalmente nelle piante sabbiose ed erbose, evitando accuratamente le aree rocciose e ricche di cespugli per mettersi al riparo da possibili predatori. Sono tra i felini più piccoli presenti nel continente e hanno dimensioni ridotte rispetto agli altri gatti. Nonostante queste caratteristiche, sono molto abili nella caccia, anche di esemplari più grandi di loro, tanto da arrivare a saltare fino a 2 metri in altezza e 3 metri di distanza. I gatti dai piedi neri, poi sono animali notturni perché è proprio in questo momento della giornata che attaccano le loro prede arrivando a ucciderne fino a 14/15 al giorno.

Il loro aspetto è molto simile agli altri felini, hanno un pelo molto morbido e fitto sui toni del beige con diverse macchie. Per vivere in zone desertiche il loro fisico si è adattato: dal cranio, infatti, svettano due ampie orecchie per captare ogni rumore. Inoltre anche le zampe si sono adeguate alla perfezione, in effetti il loro nome deriva proprio dal colore dei cuscinetti (neri) che li protegge dal calore della sabbia desertica.";

$paragraphs = explode(". ", $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>


</head>
<body>
<?php

echo "<p>" . $text . "</p>";

foreach ($paragraphs as $paragraph) {
    
    if (substr($paragraph, -1) !== ".") {
        $paragraph .= ".";
    }
    echo "<p>" . $paragraph . "</p>";
}

?>

</body>
</html>