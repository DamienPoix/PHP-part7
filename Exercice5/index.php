<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="#" method="post">
      <select  name="gender">
        <option value="MR">Mr</option>
        <option value="Mme">Mme</option>
      </select>
      <input type="text" name="firstname"  />
      <input type="text" name="lastname"  />
      <button type="submit" name="OHÉ"></button>
    </form>
    <p>
      <?php echo $_POST['gender']; ?>
    </p>
    <p>
      <?= $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
    </p>
  </body>
</html>
