<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="thanks.php"  method="post">
        <div>
          <label  for="nom">Nom :</label>
          <input  type="text"  id="nom"  name="nom">
        </div>
        <div>
          <label  for="prenom">Prénom :</label>
          <input  type="text"  id="prenom"  name="prenom">
        </div>
        <div>
          <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
          <label  for="tel">Numero de telephone :</label>
          <input  type="tel"  id="tel"  name="user_tel">
        </div>
        <div>
          <select name="sujet" id="sujet">
            <option value="1">Please choose an option</option>
            <option value="2">l'avez vous mis dans du riz</option>
            <option value="3">l'avez vous redemarer?</option>
          </select>

        </div>
        <div>
          <label  for="message">Message :</label>
          <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
          <button  type="submit">Envoyer votre message</button>
        </div>
      </form>
      <?php
  var_dump($_POST);
?>
</body>
</html>