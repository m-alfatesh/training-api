# CI/CD Fundamentals

## 1. What is CI?

CI (Continuous Integration) is the practice of frequently integrating code changes into a shared repository and automatically checking those changes.

## 2. What is CD?

CD (Continuous Delivery/Deployment) is the practice of automatically preparing or releasing application changes after they pass the required checks.

## 3. CI vs CD

CI focuses on integrating code changes and verifying them through automated checks.

CD focuses on delivering or deploying the verified changes to the next environment or production.

## 4. What is a Pipeline?

A Pipeline is a sequence of automated steps that runs when a defined event occurs, such as a Push or Pull Request.

Example:

Push / Pull Request
↓
Checkout Code
↓
Install Dependencies
↓
Run Tests
↓
Build
↓
Deployment

## 5. What is a Trigger?

A Trigger is an event that starts a Workflow.

Examples:
- Push
- Pull Request

## 6. What is a Job?

A Job is a group of Steps that are executed together on a runner.

## 7. What is a Step?

A Step is an individual task inside a Job.

Examples:
- Checkout code
- Run a command
- Show PHP version

## 8. What happens when a Step fails?

If a Step fails, the Job normally stops executing the following Steps and the Workflow is marked as failed.

In our failure test, the `Simulate Failure` Step used `exit 1`, which caused the Step and Job to fail. The `CI Pipeline Finished` Step was not executed.
