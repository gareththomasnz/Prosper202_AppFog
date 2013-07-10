Prosper202_AppFog

Customized version of Prosper202 to run on appfog cloud hosting


Installation Instructions
- First you need to have an appfog account and install the appfog command line tools:
```
https://docs.appfog.com/getting-started/af-cli
```
- Next clone this repository on your local machine:
```
git clone git@github.com:spyderman4g63/Prosper202_AppFog.git
```
 
- Move into the new directory:
```
cd Prosper202_AppFog
```
- Push the file to app fog
```
af push {your app name}
```

- When asked to deploy from your current location enter Y
```
Would you like to deploy from the current directory? [Yn]: Y
```

- Appfog should detect a PHP application. Enter Y. If not you may have to specify that this is a PHP app
```
Detected a PHP Application, is this correct? [Yn]: Y
```

- Select the infastructure you would like to deploy on. I've only tested AWS, but all should theoretically work:
```
1: AWS US East - Virginia
2: AWS EU West - Ireland
3: AWS Asia SE - Singapore
4: HP AZ 2 - Las Vegas
Select Infrastructure: 1
```

- Press enter to accept the default url or enter a new url:
```
Application Deployed URL [new_prosper202.aws.af.cm]: 
```

- Select the amount of memory. You can alway upgrade this later. Enter for default
```
Memory reservation (128M, 256M, 512M, 1G, 2G) [128M]: 
```

- For number of instances use the default of 1. I think there may be problems with p202 running on multiple instances that need ironed out
```
How many instances? [1]: 
```

- Enter no to bind existing services if you don't have a DB created
```
Bind existing services to 'new_prosper202'? [yN]: N
```

- We need to create a new Mysql DB. Enter Y at the first prompt. Then select the option for MySQL
```
Create services to bind to 'new_prosper202'? [yN]: y
1: mongodb
2: mysql
3: postgresql
4: rabbitmq
5: redis
What kind of service?: 2
```

- Enter a name for your database
```
Specify the name of the service [mysql-f37d9]: prosper202_db
```

- No need to create other services at this point
```
Create another? [yN]: n
```

- You can save the config if you choose too or enter n:
```
Would you like to save this configuration? [yN]: n
````

- If everything works ok you should see something similar to this:
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
