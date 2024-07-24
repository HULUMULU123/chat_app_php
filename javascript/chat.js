const form = document.querySelector(".typing-area");
const inputField = form.querySelector(".input-field");
const sendBtn = form.querySelector("button");
const chatbox = document.querySelector(".chat-box");
form.onsubmit = (e) => {
  e.preventDefault();
};

sendBtn.onclick = () => {
  //start Ajax
  let xhr = new XMLHttpRequest(); //creating XML object
  xhr.open("POST", "php/insert-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        console.log(data);
      }
    }
  };
  //   we have to send the form data through ajax to php
  let formData = new FormData(form); //creating new formData Object
  xhr.send(formData); //sendign the form data to php
  inputField.value = "";
};

chatbox.onmouseenter = () => {
  chatbox.classList.add("active");
};

chatbox.onmouseleave = () => {
  chatbox.classList.remove("active");
};
setInterval(() => {
  //start Ajax
  let xhr = new XMLHttpRequest(); //creating XML object
  xhr.open("POST", "php/get-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;

        chatbox.innerHTML = data;
        if (!chatbox.classList.contains("active")) {
          scrollToBottom();
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
}, 500); //this function will frequently after 500ms

function scrollToBottom() {
  chatbox.scrollTop = chatbox.scrollHeight;
}
