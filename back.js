function processa_back() {

    console.log("passei")
    let option = document.getElementById('option').value
    let url = "https://excuser.herokuapp.com/v1/excuse/"

    if (option != "random"){
        url += option
    }

    let ajax = new XMLHttpRequest()
    ajax.open('GET', url)
        
        ajax.onreadystatechange = () => {

            if(ajax.readyState == 4 && ajax.status == 200) {

                let respostaJson = ajax.responseText
                let respostaObj = JSON.parse(respostaJson)

                console.log(respostaObj[0].excuse)
                document.getElementById('textarea').innerHTML = respostaObj[0].excuse
            }

           if(ajax.readyState == 4 && ajax.status == 404) {
                document.getElementById('textarea').innerHTML = 'ststuas da requisição' + ajax.status
            }
        }
    ajax.send()
}