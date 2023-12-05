const nombre = Registro.getElementById("nombre")
const apellidos = Registro.getElementById("apellidos")
const email = Registro.getElementById("email")
const pass = Registro.getElementById("password")
const form = Registro.getElementById("form")
const parrafo = Registro.getElementById("warnings")


form.addEventListener("submit",e=>{
    e.preventDefault()
    let warnigs =""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    parrafo.innerHTML = ""
    if(nombre.Value.length <3){
        warnigs += `El nombre es muy corto <br>`
        entrar = true
    }
    if(apellidos.Value.lenght <3){
        warnigs+=`El apellido es muy corto <br>`
        entrar = true
    }

    if(!regexEmail.test(email.Value)){
        warnigs += `El email no es valido <br>`
    }

    if(pass.Value.lenght < 8){
        warnigs += `La Contraseña no es valida <br>`
        entrar = true
    }

    if(entrar){
        parrafo.innerHTML = warnigs
    }
})