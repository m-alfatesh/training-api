# Cloud & Infrastructure Summary

## Cloud Computing

Cloud Computing provides computing resources such as servers, storage, and networking through the Internet. It allows users to use infrastructure without managing physical hardware directly.

## Virtual Machines

A Virtual Machine (VM) is a virtualized computer that runs an operating system and provides resources such as CPU, memory, storage, and networking. During this training, an Ubuntu Virtual Machine was used as the server environment.

## Public IP and Private IP

A Public IP is an address that allows the server to be reached over the Internet. The Public IP of the training VM was used to connect to the server through SSH.

A Private IP is used for communication within a private network and is not normally directly reachable from the public Internet.

## SSH

SSH (Secure Shell) is a protocol used to securely connect to and manage a remote server through a command-line interface.

## SSH Keys

SSH Key authentication uses a pair of keys: a private key and a public key. The private key remains on the client machine, while the public key is stored on the server. This allows users to authenticate without sending the private key to the server.

## Users and sudo

Linux supports multiple user accounts with different permissions. The root user has full administrative privileges.

The sudo command allows an authorized regular user to execute commands with administrative privileges. During the training, the developer user was added to the sudo group.

## Linux Permissions

Linux file permissions control who can read, write, or execute files.

- r = Read
- w = Write
- x = Execute

Permissions are assigned to the file owner, group, and other users. The chmod command can be used to change file permissions.

## Ports

A Port is a logical endpoint used by network services to accept connections.

Common ports include:

- 22 = SSH
- 80 = HTTP
- 443 = HTTPS

## Firewall and UFW

A Firewall controls network traffic by allowing or blocking connections based on defined rules.

UFW (Uncomplicated Firewall) is a firewall management tool available on Ubuntu. During the training, SSH on Port 22 was allowed before enabling UFW to prevent losing remote access.

Port 8080 was temporarily opened for testing and then removed. At the end of the configuration, only the required SSH rule remained.
