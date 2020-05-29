
// TABS
  $(document).ready(function(){
    $('.tabs').tabs();
  
// NAVBAR---------------------------------------------------------------

  $('.sidenav').sidenav();

// MODAL

  $('.modal').modal();
});

// REQUETE FETCH

    
// je fais ma request fetch
let productId;

function upVote (productId){
  const formData = new FormData();
  formData.append("productId", productId);
  // console.log("productId");
  // console.log(formData.append("productId", productId));
  productId = productId;
  let myRequest = fetch('../PDO/votes.php',{
    method: "POST",
    body: formData
    
  });
  // console.log(formData);
  
  myRequest
    .then(jsonResponse =>{
      if(jsonResponse.status == 200){
        return jsonResponse.text()
      }else{
        console.log("error request");
      }
    }) 
    .then(vote => {
      console.log(vote);
      let upVoteBtn = document.querySelector(`.upvote-btn[data-id="${productId}"]`);
      
      console.log(upVoteBtn);
      if(vote){
        upVoteBtn.textContent = (vote);
        upVoteBtn.style.backgroundColor = "rgb(172, 56, 56)";
      }else{
        upVoteBtn.textContent = "log in";
        upVoteBtn.style.backgroundColor = "rgb(172, 56, 56)"; 
      }
    })
}

  


