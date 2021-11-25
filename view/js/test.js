const form = document.getElementById('form');
const title = document.getElementById('title');
const desc = document.getElementById('description');
const cat = document.getElementById('category');

form.addEventListener('submit', e => {
e.preventDefault();

checkInputs();
});

function checkInputs() {
// trim to remove the whitespaces
const titleValue = title.value.trim();
const descValue = desc.value.trim();
if(titleValue === '') {
    setErrorFor(title, 'Title cannot be blank');
} else{
    title.value=title.value.charAt(0).toUpperCase() + title.value.slice(1).toLowerCase() ;
    setSuccessFor(title);
}

if(descValue === '') {
    setErrorFor(desc, 'Description cannot be blank');
} else {
    setSuccessFor(desc);
}
if(cat.value===''){
    setErrorFor(cat, 'Choose category');
} else {
    setSuccessFor(cat);
}

}

function setErrorFor(input, message) {
const formControl = input.parentElement;
const small = formControl.querySelector('small');
formControl.className = 'mb-3 error';
small.innerText = message;
}

function setSuccessFor(input) {
const formControl = input.parentElement;
formControl.className = 'mb-3 success';
}
   
   
   
   
  