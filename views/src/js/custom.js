/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";
//for chat bot
function sendMessage() {
    var userInput = document.getElementById("user-input").value;
    if (userInput.trim() === "") return;
    
    appendMessage(userInput, true);
    
    // Send user input to the server (backend) for processing
    // In this simplified example, we'll just show a predefined bot response
    var botResponse = getBotResponse(userInput);
    appendMessage(botResponse, false);
    
    // Clear user input field
    document.getElementById("user-input").value = "";
    
    // Scroll to bottom of chat box
    var chatBox = document.getElementById("chat-box");
    chatBox.scrollTop = chatBox.scrollHeight;
}

function appendMessage(message, isUser) {
    var chatBox = document.getElementById("chat-box");
    var messageElement = document.createElement("div");
    messageElement.classList.add("chat-message");
    
    if (isUser) {
        messageElement.innerHTML = "<span class='user-message'>" + message + "</span>";
    } else {
        messageElement.innerHTML = "<span class='bot-message'>" + message + "</span>";
    }
    
    chatBox.appendChild(messageElement);
}

function getBotResponse(userInput) {
    // Simulated bot response based on user input
    // In a real-world scenario, you would have a backend API or logic to generate bot responses
    var botResponses = {
        "hi": "Hello!",
        "how are you": "I'm just a bot, but thanks for asking!",
        "bye": "Goodbye! Have a great day!"
    };
    
    userInput = userInput.toLowerCase().trim();
    return botResponses[userInput] || "I'm sorry, I didn't understand that.";
}


//for tab in info page
// Open the default tab on page load
document.getElementById("tab1").style.display = "block";

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;

  // Hide all tab content
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the 'active' class from all tablinks
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }

  // Show the specific tab content
  document.getElementById(tabName).style.display = "block";

  // Add the 'active' class to the button that opened the tab
  evt.currentTarget.classList.add("active");
}
