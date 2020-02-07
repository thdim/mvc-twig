<?php
  /*
   * Base Controller
   * Loads the models and views
   */

   class Controller {
     // Load model
     public function model($model) {
      // Require model file
      require_once '../app/models/'.$model.'.php';

      // Instatiate model
      return new $model();
     }

     // Load view
     public function view($view, $data = []) {
      // Load Twig
      $loader = new \Twig\Loader\FilesystemLoader('../app/views');
      $twig = new \Twig\Environment($loader, [
          'cache' => false,
      ]);
      
      // Check for the view file
      if(file_exists('../app/views/'.$view.'.html')) {
        echo $twig->render($view.'.html', $data);
      } else {
        // View does not exist
        die('View does not exist');
      }
     }
   }