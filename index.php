<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <?php
    $text = "Forse possiamo cambiarla ma è l'unica che c'è
              Questa vita di stracci e sorrisi e di mezze parole
              Forse cent'anni o duecento è un attimo che va
              Fosse di un attimo appena sarebbe con me
              Tutti vestiti di vento a inseguirci nel sole
              Tutti aggrappati ad un filo e non sappiamo dove
              Minchia signor tenente
              Che siamo usciti dalla centrale
              Ed in costante contatto radio
              Abbiamo preso la provinciale
              Ed al chilometro 41
              Presso la casa cantoniera
              Nascosto bene la nostra auto
              C'asse vedesse che non c'era
              E abbiam montato l'autovelox
              E fatto multe senza pietà
              A chi passava sopra i 50
              Fossero pure i 50 d'età
              E preso uno senza patente
              Minchia signor tenente
              Faceva un caldo che se bruciava
              La provinciale sembrava un forno
              C'era l'asfalto che tremolava
              E che sbiadiva tutto lo sfondo
              Ed è così, tutti sudati
              Che abbiam saputo di quel fattaccio
              Di quei ragazzi morti ammazzati
              Gettati in aria come uno straccio
              Caduti a terra come persone
              Che han fatto a pezzi con l'esplosivo
              Che se non serve per cose buone
              Può diventare così cattivo che dopo
              Quasi non resta niente
              Minchia signor tenente
              E siamo qui con queste divise
              Che tante volte ci vanno strette
              Specie da quando sono derise
              Da un umorismo di barzellette
              E siamo stanchi di sopportare
              Quel che succede in questo paese
              Dove ci tocca farci ammazzare
              Per poco più d'un milione al mese
              E c'è una cosa qui nella gola
              Una che proprio non ci va giù
              E farla scendere è una parola
              Se chi ci ammazza prende di più
              Di quel che prende la brava gente
              Minchia signor tenente
              Lo so che parlo col comandante
              Ma quanto tempo dovrà passare
              Per star seduto su una volante
              La voce in radio ci fa tremare
              Che di coraggio ne abbiamo tanto
              Ma qui diventa sempre più dura
              Quando ci tocca di fare i conti
              Con il coraggio della paura
              E questo è quel che succede adesso
              Che poi se c'è una chiamata urgente se prende su
              E ci si va lo stesso
              E scusi tanto se non è niente
              Minchia signor tenente
              Per cui se pensa che c'ho vent'anni
              Credo che proprio non mi dà torto
              Se riesce a mettersi nei miei panni
              Magari non mi farà rapporto
              E glielo dico sinceramente
              Minchia signor tenente";
    $bad_words = $_GET["badWords"];
  ?>
  <body>
    <h1>Signor Tenente - Giorgio Faletti</h1>
    <div class="text-box">
      <p> <?php echo str_replace($bad_words, '***', $text) ?></p>
    </div>
    <p>La lunghezza del paragrafo è <span> <?php echo strlen($text) ?> </span> carattri</p>
  </body>
</html>
