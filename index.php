<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
 <head>
  <title>PiSwitch</title>
  <link href="style.css" media="screen" type="text/css" rel="stylesheet">
  <link rel="shotcut icon" type="image/x-icon" href="images/fav00icon.ico">
<?php
$start = microtime(true);
?>
 </head>

<?php
 header("Content-Type: text/html; charset=UTF-8");
 header("Expires: Mon, 1 Jan 2000 07:00:00 GMT");
 header("Cache-Control: no-cache, no-store, must-revalidate");
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache");
 include 'status.php';
 include 'param.php';
 include 'name.php';
?>

<body>

 <h1>PiSwitch - Interface
  <a href="http://raspberrypi.org" target="_blank"><img src="images/pi.png" width="33" height="40"></a>
 </h1>

<p>
 <form method="post" action="switch.php">
  <input type="submit" name="sent11" value="<?php echo $name1; ?> an" class="switchon">

 <form method="post" action="switch.php">
  <input type="submit" name="sent10" value="<?php echo $name1; ?> aus" class="switchoff">
</form>

</p>

<p>
 <form method="post" action="switch.php">
  <input type="submit" name="sent21" value="<?php echo $name2; ?> an" class="switchon">

 <form method="post" action="switch.php">
  <input type="submit" name="sent20" value="<?php echo $name2; ?> aus" class="switchoff">
</form>
</p>

<p>
 <form method="post" action="switch.php">
  <input type="submit" name="sent31" value="<?php echo $name3; ?> an" class="switchon">

 <form method="post" action="switch.php">
  <input type="submit" name="sent30" value="<?php echo $name3; ?> aus" class="switchoff">
</p>

<p>
 <form method="post" action="switch.php">
  <input type="submit" name="kette1" value="<?php echo $name4; ?> an" class="switchon">

 <form method="post" action="switch.php">
  <input type="submit" name="kette0" value="<?php echo $name4; ?> aus" class="switchoff">
</p>
</form>

<div class="status">

<table border="1">
 <tr>
  <th>Bezeichnung</th>
  <th>Status</th>
 </tr>

 <tr>
  <td><?php echo $name1; ?></td>
  <td><?php echo $s1; ?></td>
 </tr>

 <tr>
  <td><?php echo $name2; ?></td>
  <td><?php echo $s2; ?></td>
 </tr>

 <tr>
  <td><?php echo $name3; ?></td>
  <td><?php echo $s3; ?></td>
 </tr>

 <tr>
  <td><?php echo $name4; ?></td>
  <td><?php echo $s4; ?></td>
 </tr>
</table>

</div>

<!---
<input type="radio" name="steckdose" value="steckdose01">Steckdose 1<br></br></input>
<input type="radio" name="steckdose" value="steckdose02">Steckdose 2<br></br></input>
<input type="radio" name="steckdose" value="steckdose03">Steckdose 3<br></br></input>

<script type="text/javascript">
   JotForm.init(function(){
      $('input_5').spinner({ imgPath:'http://d2g9qbzl5h49rh.cloudfront.net/images/', width: '60', maxValue:'59', minValue:'0', allowNegative: false, addAmount: 1, value:'0' });
      $('input_4').spinner({ imgPath:'http://d2g9qbzl5h49rh.cloudfront.net/images/', width: '60', maxValue:'23', minValue:'0', allowNegative: false, addAmount: 1, value:'0' });
      $('input_6').spinner({ imgPath:'http://d2g9qbzl5h49rh.cloudfront.net/images/', width: '60', maxValue:'59', minValue:'0', allowNegative: false, addAmount: 1, value:'0' });
      $('input_7').spinner({ imgPath:'http://d2g9qbzl5h49rh.cloudfront.net/images/', width: '60', maxValue:'7', minValue:'1', allowNegative: false, addAmount: 1, value:'0' });
      $('input_8').spinner({ imgPath:'http://d2g9qbzl5h49rh.cloudfront.net/images/', width: '60', maxValue:'12', minValue:'1', allowNegative: false, addAmount: 1, value:'0' });
      JotForm.alterTexts({"required":"Dies ist ein Pflichtfeld.","requireOne":"Mindestens ein Feld ist erforderlich.","requireEveryRow":"Jede Zeile benötigt.","requireEveryCell":"Jede Zelle ist erforderlich.","alphabetic":"Dieses Feld darf nur Buchstaben enthalten","cyrillic":"Dieses Feld kann nur kyrillische Zeichen enthalten","numeric":"Dieses Feld darf nur numerische Werte enthalten","alphanumeric":"Dieses Feld darf nur Buchstaben und Zahlen enthalten.","currency":"Diese Feld darf nur Währungswerte enthalten.","fillMask":"Der Feldwert muss die Maske ausfüllen","incompleteFields":"Es gibt unvollständige Pflichtfelder. Bitte füllen Sie diese aus. ","uploadFilesize":"Die Dateigröße kann nicht größer sein als:","uploadFilesizemin":"Die Dateigröße darf nicht tiefer sein als:","confirmClearForm":"Sind Sie sicher, dass Sie das Formular leeren wollen?","lessThan":"Ihre Bewertung sollte geringer als oder gleich sein wie","email":"Geben Sie eine gültige E-Mail Adresse ein","uploadExtensions":"Sie k&ouml;nnen nur folgende Dateien hochladen:","pleaseWait":"Bitte warten Sie...","confirmEmail":"email ist nicht korrekt","submissionLimit":"Es tut uns leid. Es ist nur ein Eintrag erlaubt. Mehrfacheinträge sind in diesem Formular deaktiviert.","gradingScoreError":"Gesamtbewertung sollte nur weniger als oder gleich sein zu","inputCarretErrorA":"Die Eingabe sollte nicht kleiner sein als der Minimalwert:","inputCarretErrorB":"Ihre Eingabe sollte den vorgegebenen Maximalwert nicht übersteigen:","maxDigitsError":"Die maximal erlaubten Ziffern sind","minSelectionsError":"Die mindestgeforderte Anzahl an Selektionen ist","maxSelectionsError":"Die Maximalauswahl an erlaubten Selektionen ist","pastDatesDisallowed":"Datum darf nicht in der Vergangenheit liegen.","multipleFileUploads_typeError":"{file} hat einen ungültigen Erweiterung. Nur {extensions} sind erlaubt.","multipleFileUploads_sizeError":"{file} ist zu groß, die maximale Dateigröße ist {sizeLimit}.","multipleFileUploads_minSizeError":"{file} ist zu klein, minimale Dateigröße ist {minSizeLimit}.","multipleFileUploads_emptyError":"{file} ist leer, bitte wählen Sie wieder Dateien ohne es.","multipleFileUploads_onLeave":"Die Dateien werden gerade hochgeladen. Wenn Sie die Seite jetzt verlassen, wird der Upload abgebrochen.","multipleFileUploads_fileLimitError":"Nur {fileLimit} Dateiuploads sind erlaub!","generalError":"In Ihrem Formular sind Fehler. Bitte beheben Sie diese bevor Sie fortfahren.","generalPageError":"Es existieren Fehler auf dieser Seite. Bitte beseitigen Sie sie bevor Sie fortfahren.","wordLimitError":"Too many words. The limit is","characterLimitError":"Too many Characters.  The limit is"});
   });
</script>
--->

<div id="footer_container">
 <div id="footer">
  <div>Version: 1.2  &#xa9 2015 <a href="http://twitter.com/landei00" target="_blank">Landei00</a></div>
  <div>Fehler gefunden oder Fragen? <a href="mailto:piswitch@landei.pfweb.eu">piswitch@landei.pfweb.eu</div></a>
  <div>-Raspberry Pi is a trademark of the Raspberry Pi Foundation-</div>
 </div>
</div>

<p>
<?php
$end = microtime(true);
$zeit = $end - $start;
echo "Zeit: ".$zeit."sek.!";
?>
</p>
</body>
</html>
