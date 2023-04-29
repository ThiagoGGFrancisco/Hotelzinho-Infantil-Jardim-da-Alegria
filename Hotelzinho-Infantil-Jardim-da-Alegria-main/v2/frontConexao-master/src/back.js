const infoPesssoais = document.querySelector("#nome")

const showInfoPessoais = (result)=>{
   for(const campo in result){
       if(document.querySelector("#"+campo)){
           document.querySelector('#'+campo).value =  result[campo]        
       }             
   }                 
}

cep.addEventListener("blur", (e)=>{
   let search = infoPesssoais.value.replace("-", "");  
   const options = {
      method: 'POST',
      mode: 'cors',
      cache: 'default'             
   } 

   fetch(`http://localhost:8010/aluno/cadastrar`, options)
   .then(response =>{response.json()
   .then(data => showInfoPessoais(data))
})
   .catch(e => console.log("deu ruin; " + e, message))

console.log(infoPesssoais.value)
})