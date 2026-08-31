# Deployment & Monitoring Summary

## 1. How is the project run on the VM?

The Laravel project is deployed on the Cloud VM using Docker and Docker Compose.

The services are started using:

docker compose up -d

The project contains Laravel and MySQL containers.

## 2. How do you check if the Containers are running?

I use:

docker compose ps

This shows the Container name, state, and ports.

A running Container appears with the state Up.

## 3. How do you view Logs?

Laravel Logs:

docker compose logs --tail=30 laravel

MySQL Logs:

docker compose logs --tail=30 mysql

To follow Laravel Logs in real time:

docker compose logs -f laravel

## 4. How do you monitor resource usage?

I use:

docker stats

It shows CPU usage, Memory usage, Network I/O, and Block I/O for the Containers.

For server resources, I use Linux commands such as:

free -h

df -h

top

## 5. What do you do if the Laravel Container stops?

First, I check the Container status:

docker compose ps

Then I check the Laravel Logs:

docker compose logs --tail=30 laravel

After identifying the problem, I can start Laravel again:

docker compose start laravel

Then I test the API again.

## 6. What do you do if the MySQL Container stops?

First, I check the Container status:

docker compose ps

Then I check the MySQL Logs:

docker compose logs --tail=30 mysql

I start MySQL again using:

docker compose start mysql

Then I test the API to make sure the database connection is working again.

## 7. What are the first steps if the application does not work?

My first steps are:

1. Check the Container status using docker compose ps.
2. Check Laravel Logs.
3. Check MySQL Logs.
4. Check CPU and Memory usage using docker stats.
5. Check the server resources and disk space.
6. Test the API again after fixing the problem.
