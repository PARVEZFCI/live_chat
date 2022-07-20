const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input_field"),
sendBtn = form.querySelector("button");
chat_box = document.querySelector(".chat-box");


form.onsubmit = (e)=>{
	e.preventDefault();
}

sendBtn.onclick = () =>{

	let xhr = new XMLHttpRequest();
	xhr.open("POST","php/insert_chat.php",true);
	xhr.onload = ()=>{

		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				let data = xhr.response;
				inputField.value = "";
				
			}
		}

	}
	let formData = new FormData(form);
	xhr.send(formData);
}

setInterval(()=>{
	let xhr = new XMLHttpRequest();
	xhr.open("POST","php/get_chat.php",true);
	xhr.onload = ()=>{

		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				let data = xhr.response;
				chat_box.innerHTML = data;
			        
				
			}
		}

	}
	let formData = new FormData(form);
	xhr.send(formData);

},500)