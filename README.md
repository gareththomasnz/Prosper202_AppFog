# Prosper202_AppFog
Customized version of Prosper202 to run on appfog cloud hosting. You might think you it would work out of box but it doesn't. One of the main issues I saw was that when you are running on cloud hosting the incoming IP address would always be from a load balancer. I've fixed that and a few other issues.

## Current Stauts
I've ran traffic against the production build for a few months have not noticed any issues. If you do find an issue please report it.

## Installation Instructions
1. First you need to have an appfog account and install the appfog command line tools:
```
https://docs.appfog.com/getting-started/af-cli
```

2. Next clone this repository on your local machine:
```
git clone git@github.com:spyderman4g63/Prosper202_AppFog.git
```

3. Move into the new directory:
```
cd Prosper202_AppFog
```

4. Push the file to app fog
```
af push {your app name}
```

5. When asked to deploy from your current location enter Y
```
Would you like to deploy from the current directory? [Yn]: Y
```

6. Appfog should detect a PHP application. Enter Y. If not you may have to specify that this is a PHP app
```
Detected a PHP Application, is this correct? [Yn]: Y
```

7. Select the infastructure you would like to deploy on. I've only tested AWS, but all should theoretically work:
```
1: AWS US East - Virginia
2: AWS EU West - Ireland
3: AWS Asia SE - Singapore
4: HP AZ 2 - Las Vegas
Select Infrastructure: 1
```

8. Press enter to accept the default url or enter a new url:
```
Application Deployed URL [new_prosper202.aws.af.cm]: 
```

9. Select the amount of memory. You can alway upgrade this later. Enter for default
```
Memory reservation (128M, 256M, 512M, 1G, 2G) [128M]: 
```

10. For number of instances use the default of 1. I think there may be problems with p202 running on multiple instances that need ironed out
```
How many instances? [1]: 
```

11. Enter no to bind existing services if you don't have a DB created
```
Bind existing services to 'new_prosper202'? [yN]: N
```

12. We need to create a new Mysql DB. Enter Y at the first prompt. Then select the option for MySQL
```
Create services to bind to 'new_prosper202'? [yN]: y
1: mongodb
2: mysql
3: postgresql
4: rabbitmq
5: redis
What kind of service?: 2
```

13. Enter a name for your database
```
Specify the name of the service [mysql-f37d9]: prosper202_db
```

14. No need to create other services at this point
```
Create another? [yN]: n
```

15. You can save the config if you choose too or enter n:
```
Would you like to save this configuration? [yN]: n
````

16. If everything works ok you should see something similar to this:
```
Creating Application: OK
Creating Service [prosper202_db]: OK
Binding Service [prosper202_db]: OK
Uploading Application:
  Checking for available resources: OK
  Processing resources: OK
  Packing application: OK
  Uploading (7K): OK   
Push Status: OK
Staging Application 'new_prosper202': OK                                        
Starting Application 'new_prosper202': OK 
```

17. Finally, open the url from step 8 in your browser and go through the standard Prosper202 setup. 

## License
Prosper202 and Tracking202 License
Attribution-NonCommercial-ShareAlike 3.0 Unported
http://creativecommons.org/licenses/by-nc-sa/3.0/legalcode
