const btn = document.querySelectorAll("button");
const extrusion_list = document.querySelector(".extrusion");
const vulcanize_list = document.querySelector(".vulcanize");
const splicing_list = document.querySelector(".splicing");


function changeColor(){
    let value = event.target.id;
    //console.log(value);

    let xhr4 = new XMLHttpRequest(); //creating XML Object
    xhr4.open("POST","php/changeColor.php",true);
    xhr4.onload = ()=>{
        if(xhr4.readyState === XMLHttpRequest.DONE){
            if(xhr4.status === 200){
                let data4 = xhr4.response;
                console.log(data4);
            }
        }
    }
    xhr4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr4.send("value=" + value);
}

setInterval(()=>{
    //let's start Ajax
    let xhr = new XMLHttpRequest(); //creating XML Object
    xhr.open("GET","php/index.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                extrusion_list.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 1000); //this function will run frequently after 500ms
