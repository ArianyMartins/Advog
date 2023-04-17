var chatButton = document.getElementById("chat-button");
var chatBox = document.getElementById("chat-box");

chatButton.addEventListener("click", function() {
	if (chatBox.style.display === "none") {
		chatBox.style.display = "block";
	} else {
		chatBox.style.display = "none";
	}
});