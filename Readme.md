# **APP WITH WEBHOOK AND PHP**

## 📋 Table of Contents

1. [📖 About the Project](#-about-the-project)
2. [🛠️ Tools Used](#%EF%B8%8F-tools-used)
3. [📋 Prerequisites](#-prerequisites)
4. [🚀 Project Usage](#-project-usage)
5. [📜 Preview]()

---

## 📖 About the Project

This project demonstrates basic webhook communication between a client and a server. The client sends a JSON payload via a POST request to the server, which processes the data and logs the information received. The server responds with a success message to recognize the webhook. This setup can be extended for event-based systems, notifications, and integrations between different services.


## 🛠️ Tools Used

**PHP:** The core language for implementing both the client and server.
**PHP Development Server:** Built-in server to run the application locally.
**JSON:** Data format used to send and receive the webhook payload.
**log files:** Used for saving and logging the received webhooks.

## 📋 Prerequisites

Before you begin, make sure you have:

**PHP****  for running the PHP scripts locally.

**A code editor**  e.g., Visual Studio Code or similar.


---

## 🚀 Project Usage

### 1. Clone the Repository
```bash
git 
```
### 2. Commands and Execute

Start the Webhook Server:
To start the server, navigate to the directory where the server.php file is located and run:
```
    php -S localhost:8000 -t path/to/project/folder
```
To send a webhook from the client to the server, run the following command in other terminal:

```
    php client.php

```
The server logs are saved in a file called webhook.log. You can check this file for details about the webhook requests that have been received.



You can create a new team and delete a team by entering the ID.

## 🎨 Preview

