const form = document.getElementById('form');
const campos = document.querySelectorAll('.campos');
const spans = document.querySelectorAll('.spanRequired');
const emailRegex = /^[\w+.]+@\w+\.\w{2,}(?:\.\w{3})?$/

form.addEventListener('submit', (event) => {
    event.preventDefault(); //desabilita o submit
    
    //executa as verificações
    emailValidate();
    passValidate();  

    //caso passe por todas as validaçoes ele permite o submit
    if(emailValidate() && passValidate()){

        form.submit();

    }

})

function setError(index){
    campos[index].style.border = '2px solid #e63636';
    spans[index].style.display = 'block';

    return false;
}

function removeError(index){
    campos[index].style.border = '2px solid';
    spans[index].style.display = 'none';
}

function emailValidate(){
    if(!emailRegex.test(campos[0].value)){
        setError(0);
        return false;
    }else{
        removeError(0);
        return true;
    }
}

function passValidate(){
    if(campos[1].value.length < 8){
        setError(1);
        return false;
    }else{
        removeError(1);
        return true;
    }
}
