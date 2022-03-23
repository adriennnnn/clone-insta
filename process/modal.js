console.log("testing");

const images = document.querySelectorAll(".gallery-image");
let imgSrc;       // variable ou vont etre stoker les image
// get images src onclick
images.forEach((img) => {
    img.addEventListener("click", (e) => {
        imgSrc = e.target.src;
        //modal fonction
        imgModal(imgSrc);
    });
});
//modal
let imgModal = (src) => {
    const modal = document.createElement("div");
    modal.setAttribute("class", "modal");
    //add the modal to the main section or the parent element
    document.querySelector(".main").append(modal);
    //img modal
    const newImage = document.createElement("img");
    newImage.setAttribute("src", src);
    //ajouter une partie commentaire a la modal
    const PartComment = document.createElement("comment");
    PartComment.setAttribute("src", src);







    //btn 
    const closeBtn = document.createElement("i");
    closeBtn.setAttribute("class", "fa fa-crosshairs btn-close"); // ne pas ouvlier de changer le style de btn qui n'est pas dans le base de ref inclu dans le header
    //fonction close
    closeBtn.onclick = () => {
        modal.remove();
    };
    modal.append(newImage, closeBtn);
};


