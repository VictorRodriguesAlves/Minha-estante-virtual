function alterarStatus(idStatus, idAlterarStatus){
    let status = document.querySelector("#"+idStatus);
    let alterarStatus = document.querySelector("#"+idAlterarStatus);

    if(status.innerHTML == "Não lido"){
        status.innerHTML = "Lido";
        alterarStatus.innerHTML = "Marcar como 'Não lido'";
    }else{
        status.innerHTML = "Não lido";
        alterarStatus.innerHTML = "Marcar como 'Lido'";
    }
}

