# Cloud Virtual Machine Notes

## 1. Virtual Machine

I used an Ubuntu 24.04 LTS Virtual Machine provided by DigitalOcean.

The Virtual Machine was a DigitalOcean Droplet named:

ubuntu-s-1vcpu-512mb-10gb-nyc1

The Droplet was already available in the DigitalOcean account and was used for this training task.

The VM had a public IPv4 address and was accessed remotely using SSH.

## 2. Public IP

The Public IP is the IP address used to reach the Virtual Machine from outside its private network.

The Public IPv4 address of the VM used during the training was:

142.93.240.227

The Public IP allowed me to establish an SSH connection from my local Ubuntu machine to the Cloud VM.

## 3. Connecting to the Server Using SSH

I connected to the Cloud Virtual Machine from my local Ubuntu machine using SSH.

The connection was established using the SSH private key stored locally on my machine.

The command used was:

ssh -i ~/.ssh/id_ed25519 root@142.93.240.227

After a successful connection, the terminal prompt changed to the root user on the remote Ubuntu server.

## 4. Purpose of an SSH Key

An SSH Key is used to authenticate a user when connecting to a remote server through SSH.

It allows the server to verify that the connecting user has the corresponding private key without requiring the private key to be transferred to the server.

The private key must remain secure and should never be shared or uploaded to GitHub.

## 5. Public Key vs Private Key

An SSH key pair contains two keys:

### Public Key

The Public Key can be added to the remote server.

It is used by the server as part of the SSH authentication process.

### Private Key

The Private Key is stored securely on the user's local machine.

It must not be shared with anyone or uploaded to GitHub.

The private key is used by the SSH client to prove ownership of the corresponding public key.

## 6. Practical Verification

After connecting to the Cloud VM, I verified the server environment using Linux commands.

I checked:

- Current user using `whoami`
- Operating system using `cat /etc/os-release`
- IP addresses using `hostname -I`
- Storage using `df -h`
- Memory using `free -h`
- CPU information using `lscpu`

I also created a directory named `training` and a file named `server-test.txt`.

The file contained:

Cloud VM is working

After exiting the SSH session and reconnecting to the server, the directory and file were still available.

This confirmed that the Cloud Virtual Machine was working correctly and that the created data persisted after reconnecting.
