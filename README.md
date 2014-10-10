### README


# Brand X project

--------

#### INITIAL SETUP

Technologies:
--PHP 5.4
--Slim Framework -- http://www.slimframework.com/
--Twig (template engine) -- http://twig.sensiolabs.org/
--Composer (Dependency management) -- https://getcomposer.org/


1. Clone into the directory



    ```
    git clone [add url]

    ```

2. Install app dependencies  (Note: only needed if you're adding packages)



    ```
    from project root:


    php composer.phar install

    ```


3. To regenerate WSDL classes, run following commands from site root:



    ```
    $ ./vendor/bin/wsdl2php -i https://connect-pmilastage-arclight.arcww2.com/1.3/pmi/ReferenceService.svc?singleWsdl -o data/services
    $ ./vendor/bin/wsdl2php -i https://connect-pmilastage-arclight.arcww2.com/1.3/pmi/AccessControlService.svc?singleWsdl -o data/services
    $ ./vendor/bin/wsdl2php -i https://connect-pmilastage-arclight.arcww2.com/1.3/pmi/ConsumerService.svc?singleWsdl -o data/services

    ```



Contact [ADD CONTACT INFO] if you have any issues with the initial setup.