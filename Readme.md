# About the project
# Webhook PHP


This is a simple demo application that demonstrates how to set up and use a webhook for communication between a client and a server. 

## Technologies Used
- **PHP**: Server-side programming language.
- **JSON**: Data format for sending and receiving information.
- **HTTP POST Requests**: Method for client-server communication.

## Prerequisites

Before running this application, make sure you have the following installed:

- **PHP** (v7 or higher)
  - Download PHP from [here](https://www.php.net/downloads.php).

- **A web browser** to test the app in a local environment (e.g., Chrome, Firefox).

## Setup and Installation

1. Clone or download this repository to your local machine.
   
2. Navigate to the root folder of the application using your terminal or command prompt.

3. Run the PHP server by executing the following command:

   ```bash
   php -S localhost:8000 -t webhook

His command starts the PHP server on port 8000 in the webhook directory.

4. To test the client, open another terminal window and run the following command to send a request to the server:

   ```bash
   php client.php

This command sends a webhook request to the server and displays the server's response.

## How to Use

The server.php file listens for POST requests sent to /server.php.
The client.php file sends a POST request to the server with a JSON payload containing a message and timestamp.
After processing the request, the server:
Logs the received data to a logs/webhook_log.txt file.
Responds with a success message and the received data.
The client outputs the server's response to the terminal.
Logging
The server logs the data received from the client in the logs/webhook_log.txt file. This file contains:

The timestamp when the data was received.
The JSON data sent by the client.

## Results:
