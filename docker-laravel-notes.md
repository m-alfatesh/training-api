# Dockerizing Laravel Application

## 1. How does Laravel run inside a Container?

Docker builds an Image containing the Laravel application, PHP, Composer dependencies, and the required PHP extensions. When the Container starts, Laravel's Artisan server runs inside the Container.

## 2. What is the role of Dockerfile?

The Dockerfile contains the instructions used to build the Laravel Docker Image. It defines the PHP base Image, installs required extensions, copies the project files, installs Composer dependencies, and defines how Laravel starts.

## 3. Laravel on Ubuntu vs Docker

When Laravel runs directly on Ubuntu, it depends on the software and configuration installed on the host machine.

When Laravel runs inside Docker, the application and its required environment are packaged inside an isolated Container, making the environment more consistent.

## 4. What happens during docker build?

Docker reads the Dockerfile instructions and creates a Docker Image layer by layer. The result is an Image named `laravel-training`.

## 5. What happens during docker run?

Docker creates a Container from the `laravel-training` Image and starts the command defined in the Dockerfile. Port 8000 on the host is mapped to port 8000 inside the Container.
