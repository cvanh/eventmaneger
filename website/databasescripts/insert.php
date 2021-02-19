<form method="POST" action="./insert_event.php" enctype="multipart/form-data" id="formulier_admin">
    <label>voer de waarde in de volgende velden toe</label>
    <br />
    <!-- <input value="<?php echo ($row['titel_event']);?>" id="titel_event" type="text" /> <br /><br /> -->
    <label>voeg hier de foto aan toe</label>
    <input name="foto_event" name="image" id="foto_event" type="file" /><br /><br />  
    <label>locatie van het evenement</label>
    <input name="locatie_event" id="locatie_event" type="text" /><br /><br />
    <!-- TODO make a location picker -->
    <label>de beschrijving van het evenement</label>
    <textarea id="beschrijving_event" name="description_event" rows="10" cols="30">
   
        </textarea> <br /><br />
    <label>de ticket prijs(euro)</label>
    <input name='price_event' id="price_event" type="text" /><br /><br />
    <label>aantal tickets</label>
    <input name='number_tickets' id="number_tickets " type="text" /><br /><br />
    
    <label>titel van het evenement</label>
    <input name='titel_event' id="titel_event" type="text" /><br /><br />
    <label>datum van het evenement</label>
    <input name='date_event' id="date_event" type="date" /><br /><br />
    <!--TODO make permission system-->
    <input type="submit">
</form>
<head>
<!-- <meta http-equiv='refresh' content='0; URL=http://example.com/'> -->
</head>