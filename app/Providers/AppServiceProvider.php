<?php

namespace app\Providers;

use View;
use App\hrm\Settings;
use App\hrm\Leave;
use App\hrm\Project;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        
        view()->composer('*', function ($view) {
            $view->with('ver','1.6');
        });
        

             /* Settings Values */
        $settings=Settings::all();

        foreach ($settings as $settingss => $values) {
                //echo $values;
            $field=$values->field;
            $content=$values->value;
            //echo $field."==".$content;
            //echo "<br />";
            /*
            view()->composer('*', function ($view) {
            $view->with('.$field.','.$content.');
            });
            */
            
            //for view
            //View::share('.$field.','.$content.');
            //view()->share('.$field.','.$content.');
            View::share($field,$content);
            view()->share($field,$content);
            
            
            //for Controller
         $this->app->singleton('.$field.', function ($content) {
          return $content;
        });
        
         
           }

                
         /* Badges */
         $leave_count=Leave::Where('status', '=', '0')->count();
         View::share('leave_count', $leave_count);
         $project_count=Project::Where('status', '=', '0')->count();
         View::share('project_count', $project_count);
       
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     */

    
        
    public function register()
    {
        $this->app->bind(
            'Illuminate\Contracts\Auth\Registrar',
            'App\Services\Registrar'
        );
    }
}
