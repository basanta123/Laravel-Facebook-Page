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
        
        // nested list with custom controller
        .state('posts', {
            url: '/posts',
            templateUrl: 'posts.html',
            controller: 'pageVampController'
        });

        
        
        
});

app.controller('pageVampController', function($scope) {
    
   
   
    $scope.page = {
   "id": "460236830704465",
   "name": "Pagevamp",
   "fan_count": 35022,
   "location": {
      "city": "New York",
      "country": "United States",
      "state": "NY",
      "street": "222 Broadway",
      "zip": "10038"
   },
   "description": "Making a website was a problem. So we fixed it. Facebook Pages makes it easy for you to add and manage your information. We take the difficulty out of putting that information on your website. Don't waste several hours every week updating your website manually. Just update your Facebook page, and spend your time building your business and doing what you love. ",
   "cover": {
      "cover_id": "947237795337697",
      "offset_x": 0,
      "offset_y": 0,
      "source": "https://scontent.xx.fbcdn.net/v/t31.0-8/s720x720/12184154_947237795337697_1602229260809841778_o.jpg?oh=a5350d5158b3b8cfe04888a0f4ed5f91&oe=58DA23E9",
      "id": "947237795337697"
   }
};

$scope.posts = 
    [
      {
         "message": "This week our #StunningSite features Style by Kate\u0159ina Beda\u0148ov\u00e1.\nIf you are looking for a salon in Prague, Czech Republic, visit STYLE as they are known for their amazing service.\nCheck out their Pagevamp-powered website www.stylekb.cz",
         "created_time": "2016-12-22T12:33:34+0000",
         "id": "460236830704465_1238585246202949"
      },
      {
         "message": "This week our #StunningSite features RAV Design. RAV - stands for Rugged, Adventurous & Vibrant, a casual smart fashion brand in MALAYSIA. Check out their website for more information\nwww.ravdesign.com",
         "created_time": "2016-12-15T10:28:28+0000",
         "id": "460236830704465_1232470050147802"
      },
      {
         "message": "This week our #StunningSite features Ducati Lebanon.  Middle East Bikes S.A.L - a company of Sigma ME S.A.L- is the new exclusive importer-dealer for the DUCATI brand in Lebanon. Check out their website here:\nhttp://www.mebikes.com/",
         "created_time": "2016-12-08T12:17:07+0000",
         "id": "460236830704465_1225391614188979"
      },
      {
         "message": "Today, Pagevamp launches as the official website builder for Akky.mx, the largest domain registrar in Mexico. Akky.mx has close to 1 million domains under management making it a massive ecosystem of small businesses who are looking to boost their online presence. It gives us great pride to have been compared against the large incumbent website builders popular in the US and Western Europe, and be chosen as the best fit for Mexican small businesses.\n \nhttps://www.pagevamp.com/blog/pagevamp-partners-with-largest-registrar-in-mexico",
         "created_time": "2016-11-17T17:42:52+0000",
         "id": "460236830704465_1200109986717142"
      },
      {
         "message": "Our #StunningSite this week features Pride Fitness Center. Pride Fitness & MMA Training Center promotes active healthy lifestyles through training in various combat sports.\nBe sure to visit their website for more information http://www.pridefitnesscenter.com/",
         "created_time": "2016-11-11T08:05:18+0000",
         "id": "460236830704465_1193610647367076"
      }
   ];
    
});