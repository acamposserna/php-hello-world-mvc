## Hello World MVC

### A simple MVC pattern using PHP

This project implements a simple Model-View-Controller design pattern using the PHP programming language.

The MVC design pattern divides the application into three components:

- Model: manages the data and the business logic of the application.
- View: It is the application's user interface.
- Controller: Accepts input and converts it to commands for the model or view.

### Application Structure

project-root/  
    index.php -> Entry point for the application.  
    config.php -> Application constants and configuration variables.  
    app/  
        autoloader.php -> Load all classes.  
        core/  
            Config.php -> Config class.  
            View.php -> Class to manage views.  
            FrontController.php -> This class loads the controllers and executes the actions.  
        models/  
            messages_model.php -> Model to generate messages.  
        views/  
            _header.php -> Header for all pages.  
            _footer.php -> Footer for all pages.  
            home.php -> Home page.  
            404.php -> Error page.  
        controllers/  
            home_controller.php -> Home page controller.  

### License

This project is shared under license CC BY 4.0 (<https://creativecommons.org/licenses/by/4.0/>)
