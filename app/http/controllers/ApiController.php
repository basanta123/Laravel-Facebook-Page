<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
//use Logentries\Handler;


class ApiController extends Controller
{
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
      
    {
       
        
       try{
       
              $content = $fb->get('/pagevamp?fields=id,name,fan_count,location,description,cover',env('FACEBOOK_APP_ID').'|'.env('FACEBOOK_APP_SECRET'));
              $monolog = Log::getMonolog();
             $monolog->pushHandler(new \Logentries\Handler\LogentriesHandler(env('LOGENTRIES_TOKEN')));
             $monolog->addInfo('Facebook page data pulled successfully in our application');
             return $content->getGraphUser();

      
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        dd($e->getMessage());
    }
    }

    /**
     * Showing latest 5 posts of the facebook page.
     *
     * @return  array of data
     */
     public function posts(\SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
      
    {
       
        
       try{
       
              $content = $fb->get('/pagevamp/feed?limit=5',env('FACEBOOK_APP_ID').'|'.env('FACEBOOK_APP_SECRET'));
              $monolog = Log::getMonolog();
             $monolog->pushHandler(new \Logentries\Handler\LogentriesHandler(env('LOGENTRIES_TOKEN')));
             $monolog->addInfo('Posts made by Facebook page  pulled successfully in our application');

            
            return $content->getGraphEdge();

      
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        dd($e->getMessage());
    }
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,\SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
    {
         $content = $fb->get('/'.$id,env('FACEBOOK_APP_ID').'|'.env('FACEBOOK_APP_SECRET'));
              $monolog = Log::getMonolog();
             $monolog->pushHandler(new \Logentries\Handler\LogentriesHandler(env('LOGENTRIES_TOKEN')));
             $monolog->addInfo('Post with id ' .$id .'  pulled successfully in our application');

             return $content->getGraphNode();

            
           // return $content->getGraphEdge();
    }

    
}
