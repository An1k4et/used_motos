const submit = document.getElementById("decrypt");
const form = document.querySelector("form");
form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting when any input is not given
  };
  

submit.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/details.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {        
          var test = xhr.response; //when user send message the input box become empty
          console.log(test);
        }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}