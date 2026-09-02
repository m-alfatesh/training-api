# Cloud Fundamentals

## 1. Cloud Computing

### What is Cloud Computing?

Cloud Computing is the use of computing resources such as servers, storage, networking, and processing power over the Internet instead of managing all the physical infrastructure locally.

### Why do companies use Cloud Computing?

Companies use Cloud Computing because it allows them to access computing resources without having to purchase and maintain all the physical hardware themselves.

Some benefits include:

- Flexible resource allocation.
- Easier scaling when resources need to be increased or decreased.
- Reduced need to manage physical hardware.
- Access to infrastructure through the Internet.
- Pay for the resources that are needed.

### Local Server vs Cloud Server

A local server is physical hardware managed by the organization itself.

A cloud server is a virtualized server provided through a Cloud Provider.

| Local Server | Cloud Server |
|---|---|
| Physical hardware is managed locally | Infrastructure is provided by a Cloud Provider |
| Requires purchasing and maintaining hardware | Resources can be provisioned when needed |
| Scaling may require additional hardware | Resources can be increased more easily |
| Organization manages the physical infrastructure | Cloud Provider manages the underlying infrastructure |

---

## 2. Virtual Machine

### What is a Virtual Machine?

A Virtual Machine (VM) is a virtual computer that runs on physical hardware through virtualization technology.

A VM can have its own operating system, CPU resources, RAM, storage, and network configuration.

A Hypervisor is responsible for managing Virtual Machines and allocating physical resources to them.

### Why use a Virtual Machine?

Virtual Machines are used to:

- Run isolated environments on the same physical server.
- Run different operating systems on the same physical hardware.
- Allocate specific resources to different environments.
- Improve the utilization of physical server resources.

### VM vs Docker Container

A Virtual Machine includes a complete operating system, while a Docker Container shares the host operating system kernel.

| Virtual Machine | Docker Container |
|---|---|
| Includes a complete operating system | Shares the host OS kernel |
| Requires more resources | Uses fewer resources |
| Usually takes longer to start | Usually starts faster |
| Provides isolation at the VM/OS level | Provides application-level isolation |

Docker containers and Virtual Machines can also be used together. For example, Docker can run inside a Cloud Virtual Machine.

---

## 3. Server Resources

When creating a Virtual Machine in a Cloud environment, several resources can be selected.

### CPU

CPU provides processing power for running applications and executing tasks.

A VM with more CPU resources can handle more processing workloads.

### RAM

RAM is the memory used by the operating system and applications while they are running.

Applications that require more memory may need a VM with more RAM.

### Storage

Storage is used to save the operating system, application files, databases, logs, and other data.

Storage capacity can vary depending on the requirements of the application.

### Public IP

A Public IP is an IP address that can be used to communicate with a server from outside its private network, depending on the configured network and security rules.

It can be used when a service needs to be accessible from the Internet.

### Private IP

A Private IP is used for communication inside a private network.

For example, multiple Virtual Machines can communicate with each other using their private IP addresses.

---

## 4. Cloud Providers

Examples of major Cloud Providers include:

- Amazon Web Services (AWS)
- Microsoft Azure
- Google Cloud

### What does a Cloud Provider do?

A Cloud Provider provides cloud infrastructure and services that organizations can use without owning the underlying physical hardware.

The provider manages the physical data centers, servers, networking infrastructure, and other underlying hardware.

### What does a Cloud Provider provide when creating a VM?

When creating a Virtual Machine, a Cloud Provider can provide and configure resources such as:

- Operating System
- CPU
- RAM
- Storage
- Networking
- Public and Private IP addresses

The available options depend on the provider and the selected service.

### Why do VM prices vary?

VM prices vary because different Virtual Machines use different amounts and types of resources.

For example, a VM with more CPU, RAM, and storage generally requires more infrastructure resources than a smaller VM.

Pricing can also depend on factors such as the selected VM type, storage type, region, and usage.

---

## 5. Summary

Cloud Computing allows organizations to use computing infrastructure without managing all of the physical hardware themselves.

Virtual Machines provide isolated virtual computing environments with resources such as CPU, RAM, storage, and networking.

Docker Containers are different from Virtual Machines because containers share the host operating system kernel and are generally lighter.

Cloud Providers such as AWS, Microsoft Azure, and Google Cloud provide infrastructure and services that allow users to create and manage cloud resources.

The amount and type of resources assigned to a VM affect its capabilities and usually its cost.

## 6. Scope of This Training Day

This training day focused on understanding Cloud Computing, Virtual Machines, server resources, and Cloud Providers.

No Virtual Machine was created during this task, and no server deployment, SSH configuration, or advanced networking was performed.
