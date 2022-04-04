let button = document.getElementById('confirm');

button.addEventListener('click', function(event){
  
  if(confirm("Are you sure")){

  } else{
    event.preventDefault()
  }
})

console.log(confirm);