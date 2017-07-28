<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>todolist</title>
    <style media="screen">
      body{
        background-color: #E5E5E5;
      }
      h1{
          text-align: center;
          font-size: 80px;
      }
      .titre{
        width: 30%;
        border: 2px solid grey;
        padding: 15px 0 15px 45px;
        background-color: #f6f6ee;
        margin: 5px;

      }
      *{
        list-style-type: none;
        font-family: Helvetica;
      }
    </style>
  </head>
  <body>
      <h1>~ TO DO LIST ~</h1>
      <h2>Modification des tâches: </h2>
         <form class="" action="/tasks/update/{{ $task->id }}" method="post">
          {{ csrf_field() }}
            <div class="titre">
              <label for="titre">Modif de la Todo << {{ $task->titre }} >></label></br></br>
              <input type="text" name="titre" id="titre"></br></br>
              <button name="button">Ok</button>
            </div>
        </form>
  </body>
</html>
