# Installation Notes

The following document explains the process required in order to run the laravel application.

---

## Step 1 : Download and Install Docker
Please make sure you have docker installed on your system before continuing.
You may get docker at : https://www.docker.com/get-started

## Step 2 : Clone the Github Repository
Clone this repo via the command line or additionally you may download the repo directly through your web browser code by clicking the green code download button on github

```bash
$ git clone https://github.com/swinb0/Harry-Potter-Character-DB.git
```

## Step 3 : Run docker-compose up
Open a windows command prompt or linux terminal and navigate to the directory of the repository you just downloaded (use cd command).
You will know you are in the correct directory as the application folder contains 4 files : docker-compose.yml, Dockerfile, php.ini and app/

```bash
$ docker-compose up
```

This will set up the application and needed database configurations in a containerized environment. Thus no further local setup is required.
Please wait until you see the following output in your terminal

```bash
app_1  | Migration table created successfully.
app_1  | Migrating: 2014_10_12_000000_create_users_table
app_1  | Migrated:  2014_10_12_000000_create_users_table (0.06 seconds)
app_1  | Migrating: 2014_10_12_100000_create_password_resets_table
app_1  | Migrated:  2014_10_12_100000_create_password_resets_table (0.06 seconds)
app_1  | Migrating: 2019_08_19_000000_create_failed_jobs_table
app_1  | Migrated:  2019_08_19_000000_create_failed_jobs_table (0.04 seconds)
app_1  | Migrating: 2020_08_21_013755_create_character_table
app_1  | Migrated:  2020_08_21_013755_create_character_table (0.03 seconds)
app_1  | Laravel development server started: http://0.0.0.0:8000
app_1  | PHP 7.4.9 Development Server (http://0.0.0.0:8000) started
```


## Optional Step 4 : Clean Up
After you have tested the application you may remove the docker images and containers by executing the following commands.

PLEASE NOTE by executing the following commands you will remove all docker images and containers on your computer. This is not recommended if you are using docker for other projects as this will remove those associated images and containers as well.


```bash
$ docker system prune
$ docker image prune -a
```

# References
This application makes use of the potterapi which is available at :
https://www.potterapi.com/v1/
