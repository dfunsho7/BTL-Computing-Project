var index=0;
var questions=[
	["Hi I'm Julie,<br>The BTL Crowdfunding Virtual Assistant.<br>Always here to help You! Hi! is the magic word to start with. <br> "],
	["Hello, Welcome to BTL Crowdfunding! Do you want to start a campaign to raise funds for knife victim?"],
	["Can I ask victim's name?"],
	["Please let us know victim's age?"],
	["In which area the incident happened?"],
	["On which date and time the incident took place?"],
	["Is the victim died or on treatment"],
	["What is your relationship with victim?"],
	["Target amount required for the victim's family or treatment?"],
	["Steps to start a campaign.<br> 1. Signup and login <br> 2. Goto dashboard & add your story <br> 3. Story get flashed on our website's homepage <br> 4. Donations received on your story in our BTL Paypal Account <br> 5. Received donations will be transferred to your account."],
	["You want to signup to start a campaign, please <a href='signup.php'>click here</a>"],
	["Go Ahead, and start your campaign"],
	["BTL Crowdfunding wishes and help will be always with you"],
	["Goodbye. I hope you will come see me again with any questions or concerns you may have."],
];
var answers=[
	[''],
	[''],
	[''],
	[''],
	[''],
	[''],
	[''],
	[''],
	[''],
	[''],
	[''],
	[''],
	[''],
	[''],

];
function askQuestion(i){
	if(typeof(questions[index])==='undefined'){

	}else{
		setTimeout(function(){
	$(".chatbox").append('<span class="user_name">Julie</span> <span class="messages">'+questions[i]+'</span>');
	$(".chatbox").scrollTop($(".chatbox").prop('scrollHeight'));
},2000);
	} 
}

function chatInit(){
	askQuestion(index);
}
chatInit();

document.querySelector("#input").addEventListener('keypress',function(e){
	var key = e.keyCode || e.which;
	if (key==13){
		sendMessage();
	}
});

function sendMessage(){
		var input = $("#input").val();
		answers[index]=input;
		$(".chatbox").append('<span class="user_name">You</span> <span class="messages">'+input+'</span>');
		$(".chatbox").scrollTop($(".chatbox").prop('scrollHeight'));
		index++;
		askQuestion(index);
		$("#input").val('');
		$("#input").focus();
}
