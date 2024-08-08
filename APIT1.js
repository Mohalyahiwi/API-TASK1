document.addEventListener('DOMContentLoaded',function(){
const buttons = document.querySelectorAll('button');
buttons.forEach(button => {
    button.addEventListener('click',()=>{
        const command=button.innerText.toLocaleLowerCase();
        fetch('APIT1.php',{
            method: 'POST',
            headers: {
                'Content-type': 'application/json'
            },
            body:JSON.stringify({command: command})})

            .then(response => response.json())
            .then(data=> console.log('Success:',data))
            .catch(error=>console.error('Error:',error));
        });
    });
});