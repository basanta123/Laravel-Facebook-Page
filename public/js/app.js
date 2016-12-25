var app = angular.module('pageVampApp', ['ui.router']);

app.config(function($stateProvider, $urlRouterProvider) {
    
    $urlRouterProvider.otherwise('/');
    
    $stateProvider
        
        // HOME STATES AND NESTED VIEWS ========================================
        .state('page', {
            url: '/',
            templateUrl: 'page.html',
            controller: 'pageVampController'
        })
        
        
        .state('posts', {
            url: '/posts',
            templateUrl: 'posts.html',
            controller: 'pageVampController'
        })

        

        .state('post' , {
         url: '/post/:id',
         templateUrl: 'single-post.html',
         controller: function($scope, $stateParams,$http) {
            $scope.id = $stateParams.id;
            $http.get("/api/v1/post/"+$scope.id)
            .then(function(response) {
             $scope.post = response.data.message;
            

            });
          }
       })


        
        
});

app.controller('pageVampController', function($scope,$http) {
    

$http.get("/api/v1/page")
            .then(function(response) {
               $scope.page = response.data;

});

$http.get("/api/v1/posts")
            .then(function(response) {
             $scope.posts = response.data;

});


    
 });