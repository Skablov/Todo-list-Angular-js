angular.module("myApp",[])
.controller("firstCtrl",($scope, $http) =>
{
  $http.post("add.php",{'command': 'read'}).then(response =>
  {
    $scope.taskArray = response.data;
  });
  $scope.taskArray = [];
  $scope.addTask = () =>
  {
    if($scope.tmp == undefined || $scope.tmp == '')
    {
      alert("Вы ничего не ввели");
      return;
    }
    for(let i = 0; i < $scope.taskArray.length; i++)
    {
      if($scope.taskArray[i] == $scope.tmp)
      {
        alert("Такое задание уже есть!");
        return;
      }
    }
    $http.post("add.php",{'command': 'add', 'data': $scope.tmp}).then(response =>
    {
      $scope.taskArray.push($scope.tmp);
    });

  }
  $scope.delTask = (value) =>
  {
    $http.post("add.php",{'command': 'del', 'data': value}).then(response =>
    {
      for(let i = 0; i < $scope.taskArray.length; i++)
      {
        if($scope.taskArray[i] == value)
        {
          $scope.taskArray.splice(i, 1);
          return;
        }
      }
    })
  }
});
