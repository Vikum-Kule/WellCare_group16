
//    const inpFile = document.getElementById("myFile");
//    const btnUpload = document.getElementById("BtnUpload");

//     btnUpload.addEventListener("click",function(){
//         const xhr = new XMLHttpRequest();
//         const formData = new FormData();

//         console.log(inpFile.files);

//     });

  // Get the modal
  var modal = document.getElementById("myModal");
  var myBtn= document.getElementById("myBtn");
  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  myBtn.onclick = function(){
    modal.style.display = "block";
    modalImg.src =myImg.src;
    captionText.innerHTML =caption.innerHTML;
  }
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() { 
    modal.style.display = "none";
    
  }