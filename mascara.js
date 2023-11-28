const escreva = () => {
    const inputs = document.querySelector('.numeroI')
    const numero = document.querySelector('.numero')
    
    numero.textContent = `${inputs.value}`
   

    inputs.value = numero.value
    if (inputs.value.length === 4 || inputs.value.length === 9) {
        
    }
}
const escreva1 = () => {
    const inputs = document.querySelector('.nomeCartao')
    const nome = document.querySelector('.nome')
    
    nome.textContent = `${inputs.value}`
   

    inputs.value = nome.value
    if (inputs.value.length >20 ) {
       
    }
}
const escreva2 = () => {
    const inputs = document.querySelector('.validade')
    const nome = document.querySelector('.venc')
    
    nome.textContent = `${inputs.value}`
   

    inputs.value = nome.value
    if (inputs.value.length >20 ) {
       
    }
}

