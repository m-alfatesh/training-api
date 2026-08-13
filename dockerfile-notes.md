
# Dockerfile Basics

## 1. What is a Dockerfile?

A Dockerfile is a text file that contains instructions used to build a Docker Image.

## 2. Why do we use Dockerfile?

We use Dockerfile to define how a Docker Image should be created in a consistent and repeatable way.

## 3. Dockerfile vs Docker Image

A Dockerfile contains instructions for building an Image, while a Docker Image is the result created from those instructions and is used to create Containers.

## 4. Dockerfile Instructions

### FROM

Specifies the base Image used to build the new Image.

### WORKDIR

Sets the working directory inside the Image for subsequent instructions.

### COPY

Copies files or directories from the build context into the Image.

### RUN

Executes a command while building the Image.

### CMD

Specifies the default command that runs when a Container starts.
