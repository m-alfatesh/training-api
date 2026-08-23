# Server Setup & User Management

## 1. Why should we avoid using the root account permanently?

The root account has full administrative privileges over the Linux system. Using it permanently increases the risk of accidentally modifying or deleting important system files. Using a regular user account with sudo provides a safer way to perform administrative tasks only when necessary.

## 2. What is sudo?

sudo stands for "Superuser Do". It allows an authorized user to execute specific commands with administrative privileges without logging in directly as the root user.

## 3. Difference between root and a regular user

The root user has unrestricted access to the system and can perform administrative operations. A regular user has limited permissions and normally cannot modify protected system resources unless they are granted additional privileges, such as membership in the sudo group.

## 4. What are User and Group in Linux?

A user represents an individual account on a Linux system. A group is a collection of users that can share permissions and access to files or system resources.

## 5. Linux File Permissions

Linux uses three basic permissions:

- r (Read): Allows a user to read the contents of a file.
- w (Write): Allows a user to modify the contents of a file.
- x (Execute): Allows a user to execute a file or access a directory.

Permissions are assigned separately to the file owner, the group, and other users.

## 6. Allowing a User to Access the Server Using an SSH Key

SSH key authentication uses a key pair consisting of a private key and a public key. The private key remains securely on the client machine, while the public key is stored on the server in the user's `~/.ssh/authorized_keys` file.

For the `developer` user, the SSH configuration allows the user to connect directly to the server using the configured SSH key without logging in as root.
