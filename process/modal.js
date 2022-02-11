
console.log("testing");

const images = document.querySelectorAll(".gallery-image");
let imgSrc;       // variable ou vont etre stoker les image
// get images src onclick
images.forEach((img) => {
    img.addEventListener("click", (e) => {
        imgSrc = e.target.src;
        //run modal function
        imgModal(imgSrc);
    });
});
//creating the modal
let imgModal = (src) => {
    const modal = document.createElement("div");
    modal.setAttribute("class", "modal");
    //add the modal to the main section or the parent element
    document.querySelector(".main").append(modal);
    //adding image to modal
    const newImage = document.createElement("img");
    newImage.setAttribute("src", src);
    //ajouter une partie commentaire a la modal
    const PartComment = document.createElement("comment");
    PartComment.setAttribute("src", src);







    //creating the close button
    const closeBtn = document.createElement("i");
    closeBtn.setAttribute("class", "fa fa-crosshairs"); // ne pas ouvlier de changer le style de btn qui n'est pas dans le base de ref inclu dans le header
    //close function
    closeBtn.onclick = () => {
        modal.remove();
    };
    modal.append(newImage, closeBtn);
};