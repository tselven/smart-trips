<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Forum</title>
    <link rel="stylesheet" href="src/css/custom.css">
</head>
<body>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Topics</h2>
            <ul>
                <li>Topic 1</li>
                <li>Topic 2</li>
                <li>Topic 3</li>
                <!-- Add more topics as needed -->
            </ul>
            <h2>Groups</h2>
            <ul>
                <li>Group 1</li>
                <li>Group 2</li>
                <li>Group 3</li>
                <!-- Add more groups as needed -->
            </ul>
        </div>
        <div class="main-content">
            <div class="chat-container">
                <div class="chat-box" id="chat-box">
                    <div class="chat-message">
                        <span class="bot-message">Welcome to the Chatbot Forum!</span>
                    </div>
                </div>
                <input type="text" id="user-input" class="user-input" placeholder="Type your message...">
                <button onclick="sendMessage()" class="send-button">Send</button>
            </div>
        </div>
    </div>
    <script src="src/js/custom.js"></script>
</body>
</html>
