const form = document.querySelector(".signup form");
continueBtn = form.querySelector(".button input");
errorTxt = form.querySelector('.error-text');

form.onsubmit = (e)=>{
	e.preventDefault();
}
continueBtn.onclick = ()=>{
	let xhr = new XMLHttpRequest();
	xhr.open("POST","php/signup.php",true);
	xhr.onload = ()=>{

		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				let data = xhr.response;
				if (data == "Success") {
					location.href = "user.php";


				}else{
					errorTxt.style.display = "block";
					errorTxt.textContent = data;

				}
			}
		}

	}
	let formData = new FormData(form);
	xhr.send(formData);

}