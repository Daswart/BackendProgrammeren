<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1.08</title>
    <style>
        *{
            box-sizing: border-box;
        }
        table,td{
            border: 1px solid black;
            
        }
        input[type="text"]{
            
        }
    </style>
</head>
<body>
    <h3>Inschrijfformulier</h3>
    <form action="lab1.08.verwerken.php" method="post">
         <table>
        <tr>
            <td>Achternaam</td>
            <td><input type="text" name="achternaam"></td>
        </tr>
        <tr>
            <td>Voornaam</td>
            <td><input type="text" name="voornaam"></td>
        </tr>
        <tr>
            <td>Straat</td>
            <td><input type="text" name="straat"></td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td><input type="text" name="postcode"></td>
        </tr>
        <tr>
            <td>Plaats</td>
            <td>
                <select name="plaats">
                <option value="Almere">Almere</option>
                <option value="Zeewolde">Zeewolde</option>
                <option value="Lelystad">Lelystad</option>
                <option value="Biddinghuizen">Biddinghuizen</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>E-mailadres</td>
            <td><input type="email" name="email"></td>
        </tr>
    </table>
    <br>
    Kies een opleiding:<br>
    <input type="radio" name="opleiding" value="ICT">ICT<br>
    <input type="radio" name="opleiding" value="Engels">Engels<br>
    <input type="radio" name="opleiding" value="Techniek">Techniek<br>
    <input type="radio" name="opleiding" value="Nederlands">Nederlands<br><br>
    <input type="submit" name="submit" value="Versturen">
    <input type="reset" value="Reset">
    </form>
   

</body>
</html>