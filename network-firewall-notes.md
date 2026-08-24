# Networking & Firewall Basics

## 1. Public IP

A Public IP is an IP address that can be used to reach a server over the Internet. The DigitalOcean VM has a Public IP address that is used to connect to the server remotely through SSH.

## 2. Private IP

A Private IP is an IP address used for communication within a private network. It is not normally directly reachable from the public Internet.

## 3. What is a Port?

A Port is a logical endpoint used by network services to receive and handle network connections. Different services use different port numbers.

Common examples include:

- Port 22: SSH
- Port 80: HTTP
- Port 443: HTTPS

## 4. What is a Firewall?

A Firewall controls network traffic entering or leaving a system. It uses rules to allow or deny connections to specific ports and services.

UFW (Uncomplicated Firewall) is a firewall management tool available on Ubuntu.

## 5. Why must SSH be allowed before enabling UFW?

SSH must be allowed before enabling UFW because the SSH connection is used to remotely access the server. If the SSH port is blocked when the firewall is enabled, the current connection or future SSH connections may be blocked, which could prevent remote access to the server.

In this training, Port 22 was allowed before UFW was enabled.

## 6. What happens when a Port used by a service is closed?

If a port used by a service is blocked by the firewall, incoming connections to that service can be denied. As a result, users may not be able to access the service through that port even if the service itself is running.

## 7. Firewall Configuration in This Training

UFW was initially inactive. Port 22/TCP was allowed before enabling the firewall.

After UFW was enabled, Port 8080/TCP was temporarily allowed for testing. The rule was then deleted after the test.

At the end, only SSH on Port 22 remained allowed.
