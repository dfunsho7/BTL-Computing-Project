<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #A20F39;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  position: fixed;
  bottom: 1px;
  right: 25px;
  width: 150px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 2px solid grey;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 500px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container input {
  width: 100%;
  padding: 15px;
  margin: 15px 0 15px 0;
  border: 1px solid grey;
  background: white;
  resize: none;
}


/* Set a style for the submit/send button */
.form-container .btn {
  background-color: maroon;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

@media screen and (max-width: 500px) {
  .form-container  {width: 100%;}
  .btn {width: 250px;}
  .chatbox{width: 100%;}
}
/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: black;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<button class="open-button" onclick="openForm()"><i class="fas fa-comments"></i>   Support</button>

<div class="chat-popup form-container" id="myForm">
  <div class="hdr"><b class="ask">ASK JULIE</b> <small>Your Virtual Assitant</small> </div>
    <div class="chatbox"></div>

    <input placeholder="Type your question here" type="text" id="input">
    <button  class="btn" onclick="sendMessage()">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script src="jquery.js"></script>
<script src="code.js"></script>
</body>
</html>
