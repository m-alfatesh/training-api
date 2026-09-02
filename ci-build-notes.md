# Automated Docker Image Build

## 1. What is a Test Job?

A Test Job is a CI Job that runs the application's automated tests to verify that the code works correctly.

In this project, the Test Job installs PHP and Composer dependencies, prepares Laravel, and runs:

php artisan test

## 2. What is a Build Job?

A Build Job is a CI Job that builds a Docker Image using the Dockerfile in the project.

In this project, the Docker Image is built with the name:

laravel-training

## 3. How do we make one Job wait for another?

GitHub Actions provides the `needs` keyword.

The Build Job uses:

needs: test

This means the Build Job will only start after the Test Job finishes successfully.

## 4. Why should we not build the Image if tests fail?

If the tests fail, the application may contain bugs or unexpected behavior.

Building a Docker Image in this situation would create an Image containing code that has not passed the automated tests.

Therefore, the Build Job should only run after the Test Job succeeds.
