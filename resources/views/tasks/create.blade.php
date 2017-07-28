<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>todolist</title>
  </head>
  <body>
    <form action="save" method="post">
       {{ csrf_field() }}
       <h1>New TODO</h1>
      <div class="titre">
        <label for="titre">New Todo</label>
        <input type="text" name="titre" id="titre">
        <button name="button">Enregistrer</button>
      </div>

    </form>
  </body>
</html>
