
<!DOCTYPE html>
<html lang="ru" ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></link>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="app.js"></script>
    <style media="screen">
    .div{
      text-align: center;
    }
    </style>
    <title>Todo list</title>
  </head>
  <body ng-controller="firstCtrl">
    <div class="container">
      <form>
        <div class="form-group div">
          <h1>Todo list на AngularJS!</h1>
          <label>Введите новое задание</label>
          <br>
          <input type="text" placeholder="Введите что-нибудь" ng-model = "tmp">
          <label class="btn btn-outline-info" ng-click="addTask()">Добавить</label>
        </div>
      </form>
      <div class="alert-warning" >
        <ul>
          <li ng-repeat="task in taskArray">{{task}}<label class="btn btn-sm btn-danger" ng-click="delTask(this.task)">x</label></li>
        </ul>
      </div>
    </div>
  </body>
</html>
