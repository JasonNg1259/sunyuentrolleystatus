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

    let xhr2 = new XMLHttpRequest(); //creating XML Object
    xhr2.open("GET","php/index2.php",true);
    xhr2.onload = ()=>{
        if(xhr2.readyState === XMLHttpRequest.DONE){
            if(xhr2.status === 200){
                let data2 = xhr2.response;
                vulcanize_list.innerHTML = data2;
            }
        }
    }
    xhr2.send();

    let xhr3 = new XMLHttpRequest(); //creating XML Object
    xhr3.open("GET","php/index3.php",true);
    xhr3.onload = ()=>{
        if(xhr3.readyState === XMLHttpRequest.DONE){
            if(xhr3.status === 200){
                let data3 = xhr3.response;
                splicing_list.innerHTML = data3;
            }
        }
    }
    xhr3.send();
}, 500); //this function will run frequently after 500ms
