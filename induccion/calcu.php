<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="./si.php" method="post">
      
      <label for="num1">Numero 1</label>
      <input type="text" name="num1" id="num1" />

      <label for="num2">Numero 2</label>
      <input type="text" name="num2" id="num2" />

      <select name="opcion" id="opcion">
        <option value="+">Suma</option>
        <option value="-">Resta</option>
        <option value="*">Multiplicacion</option>
        <option value="/">Division</option>
      </select>

      <button type="submit">Resultado</button>

    </form>

  </body>
</html>
