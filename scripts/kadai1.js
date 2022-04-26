let formElement = document.querySelector('formId');

formElement.addEventListener('submit', handlSubmit);

function handleSubmit(event){
    location.href = 'get_js.html';
}
