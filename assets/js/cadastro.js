const form = document.getElementById('form');
const campos = document.querySelectorAll('.campos');
const spans = document.querySelectorAll('.spanRequired');
const emailRegex = /^[\w+.]+@\w+\.\w{2,}(?:\.\w{3})?$/

form.addEventListener('submit', (event) => {
    event.preventDefault(); //desabilita o submit
    
    //executa as verificações
    nameValidate();
    emailValidate();
    passValidate();  

    //caso passe por todas as validaçoes ele permite o submit
    if(emailValidate() && passValidate() && nameValidate()){

        form.submit();

    }

})

function setError(index){
    campos[index].style.border = '2px solid #e63636';
    spans[index].style.display = 'block';
}

function removeError(index){
    campos[index].style.border = '2px solid';
    spans[index].style.display = 'none';
}

function nameValidate(){
    if(campos[0].value.length < 3){
        setError(0);
        return false;
    }else{
        removeError(0);
        return true;
    }
}

function emailValidate(){
    if(!emailRegex.test(campos[1].value)){
        setError(1);
        return false;
    }else{
        removeError(1);
        return true;
    }
}

function passValidate(){
    if(campos[2].value.length < 7){
        setError(2);
        return false;
    }else{
        removeError(2);
        return true;
    }
}
