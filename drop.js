//sidebar dropdown

const AllDropdown = document.querySelectorAll('.sidebar .dropdown');

AllDropdown.forEach(item =>{
    const a = item.parentElement.querySelector('a:first-child');
    a.addEventListener('click', function (e) {
        e.preventDefault();

        if(!this.classList.contains('active')){
            AllDropdown.forEach(i => {
                const aLink = i.parentElement.querySelector('a:first-child');
                aLink.classList.remove('active');
                i.classList.remove('show');
            });
        }

        this.classList.toggle('active');
        item.classList.toggle('show');
    });
})

window.addEventListener('click', function (e) {
    if (e.target !== user) {
        if(e.target !== dropdown) {
           if(AllDropdown.classList.contains('active')) {
               AllDropdown.classList.remove('active');
           }
        }
    }
});

//profile dropdown

const profile = document.querySelector('.user');
const user = profile.querySelector('.circ');
const dropdown = profile.querySelector('.profile-link');

user.addEventListener('click', function () {
    dropdown.classList.toggle('show');
});

window.addEventListener('click', function (e) {
    if (e.target !== user) {
        if(e.target !== dropdown) {
           if(dropdown.classList.contains('show')) {
               dropdown.classList.remove('show');
           }
        }
    }
});

document.querySelector("#m_0").addEventListener("click", function(){
    document.getElementById("main_0").classList.add("active");
    document.getElementById("main_1").classList.remove("active");
    document.getElementById("main_2").classList.remove("active");
    document.getElementById("main_3").classList.remove("active");
    document.getElementById("main_4").classList.remove("active");
});

document.querySelector("#m_1").addEventListener("click", function(){
    document.getElementById("main_0").classList.remove("active");
    document.getElementById("main_1").classList.add("active");
    document.getElementById("main_2").classList.remove("active");
    document.getElementById("main_3").classList.remove("active");
    document.getElementById("main_4").classList.remove("active");
});

document.querySelector("#m_2").addEventListener("click", function(){
    document.getElementById("main_0").classList.remove("active");
    document.getElementById("main_1").classList.remove("active");
    document.getElementById("main_2").classList.add("active");
    document.getElementById("main_3").classList.remove("active");
    document.getElementById("main_4").classList.remove("active");
});

document.querySelector("#m_3").addEventListener("click", function(){
    document.getElementById("main_0").classList.remove("active");
    document.getElementById("main_1").classList.remove("active");
    document.getElementById("main_2").classList.remove("active");
    document.getElementById("main_3").classList.add("active");
    document.getElementById("main_4").classList.remove("active");
});

document.querySelector("#m_4").addEventListener("click", function(){
    document.getElementById("main_0").classList.remove("active");
    document.getElementById("main_1").classList.remove("active");
    document.getElementById("main_2").classList.remove("active");
    document.getElementById("main_3").classList.remove("active");
    document.getElementById("main_4").classList.add("active");
});

//roll patient_id number

const btn = document.getElementById("setPatientId");
const p_id = document.getElementById("patientid");
const min = 1000;
const max = 9999;
let randomnum;

btn.onclick = function() {
    randomnum = Math.floor(Math.random() * max ) + min;
    p_id.value = randomnum;
}

// HMO popup

document.querySelector("#Yes").addEventListener("click", function(){
    document.getElementById("HMO").classList.add("active");
});

document.querySelector("#No").addEventListener("click", function(){
    document.getElementById("HMO").classList.remove("active");
});

document.querySelector("#Yes").addEventListener("click", function(){
    document.getElementById("tit").classList.add("active");
});

document.querySelector("#No").addEventListener("click", function(){
    document.getElementById("tit").classList.remove("active");
});

document.querySelector("#Yes").addEventListener("click", function(){
    document.getElementById("submit").classList.remove("active");
});

document.querySelector("#No").addEventListener("click", function(){
    document.getElementById("submit").classList.add("active");
});

document.querySelector("#Yes").addEventListener("click", function(){
    document.getElementById("submit2").classList.add("active");
});

document.querySelector("#No").addEventListener("click", function(){
    document.getElementById("submit2").classList.remove("active");
});

const y = document.getElementById("Yes");
const n = document.getElementById("No");
const f = document.getElementById("main_1");

y.addEventListener("click", function(){
    f.classList.add("open");
});

n.addEventListener("click", function(){
    f.classList.remove("open");
});

//file upload

const fileinput = document.querySelector(".file-input");
const filew = document.getElementById("form-groupH2");
const  upload = document.querySelector(".form-groupH2_2");

upload.addEventListener("click", () =>{
    fileinput.click();
})

fileinput.onchange = ({target}) => {
    let file = target.files[0];
    if(file){
        let filename = file.name;
        let filetype = filename.split(".")[1];
        if(filename.length >= 12){
            let splitname = filename.split(".");
            filename = splitname[0].substring(0, 13) + "... ." + splitname[1];
        }
        fileshow(filename, filetype);
    }
}

const fileshow = (filename, filetype) =>{
  if(filew.innerHTML += `<div class="showfilebox">
                        <div class="left">
                            <span class="filetype">${filetype}</span>
                            <h3>${filename}</h3>
                        </div>
                        <div class="right">
                            <span><i class='bx bx-window-close'></i></span>
                        </div>
                    </div>`){
                        
                    }

const cross = document.querySelectorAll(".right");
const show = document.querySelectorAll(".showfilebox");

for(let x =0; x < cross.length; x++){
    cross[x].addEventListener("click", () =>{
        show[x].classList.add("hide");
    });
}
}

document.querySelector('#search').addEventListener('input', filterlist);
function filterlist(){
    const searchinput = document.querySelector("#search");
    const filter = searchinput.value.toLowerCase();
    const listitems = document.querySelectorAll(".data1");

    listitems.forEach((item) =>{
        let text = item.textContent;
        if(text.toLowerCase().includes(filter.toLowerCase())){
            item.style.display = "";
        } else{
            item.style.display = "none";
        }
    });
}

document.querySelector('#search1').addEventListener('input', filterlist1);
function filterlist1(){
    const searchinput1 = document.querySelector("#search1");
    const filter1 = searchinput1.value.toLowerCase();
    const listitems1 = document.querySelectorAll(".data2");

    listitems1.forEach((item) =>{
        let text = item.textContent;
        if(text.toLowerCase().includes(filter1.toLowerCase())){
            item.style.display = "";
        } else{
            item.style.display = "none";
        }
    });
}