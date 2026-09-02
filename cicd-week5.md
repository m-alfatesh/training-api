# CI/CD Week 5 Practice

## 1. What is the Pipeline I Built?

I built a CI Pipeline for the Laravel project using GitHub Actions.

The pipeline contains two jobs:

- `test`: Prepares the PHP/Laravel environment and runs automated tests.
- `build`: Builds the Docker Image after the tests succeed.

The `build` job depends on the `test` job using `needs: test`.

## 2. When Does the Pipeline Run?

The pipeline runs when:

- A Push is made.
- A Pull Request is created or updated.

## 3. What Happens on Push?

When code is pushed, GitHub Actions starts the CI Pipeline.

The pipeline:

1. Checks out the code.
2. Sets up PHP.
3. Installs Composer dependencies.
4. Prepares the Laravel environment.
5. Runs Laravel tests.
6. Builds the Docker Image if the tests pass.

## 4. What Happens on Pull Request?

When a Pull Request is created or updated, the same CI Pipeline runs to verify that the changes pass the automated tests and can be built successfully.

## 5. What Happens If Tests Fail?

If the tests fail, the `test` job fails and the `build` job does not run.

This prevents a Docker Image from being built from code that has not passed the tests.

## 6. Why Does Build Depend on Tests?

The Docker Image should only be built after the application passes its automated tests.

The dependency is defined using:

`needs: test`

This makes the `build` job wait for the `test` job to complete successfully.

## 7. What Is the Difference Between a Job and a Step?

A **Job** is a group of related tasks that runs as a unit on a GitHub Actions runner.

A **Step** is an individual task inside a Job.

For example, `test` is a Job, while `Checkout code`, `Setup PHP`, and `Run tests` are Steps inside that Job.

## 8. What Did I Learn During CI/CD Week?

During CI/CD Week, I learned how to:

- Understand CI/CD concepts.
- Create GitHub Actions workflows.
- Configure triggers for Push and Pull Request.
- Understand Jobs and Steps.
- Run Laravel automated tests in CI.
- Build Docker Images automatically.
- Use `needs` to control Job dependencies.
- Understand how pipeline failures affect later Jobs.
- Test both successful and failed pipeline scenarios.
