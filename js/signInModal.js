let overlay = document.querySelector("#overlay")

// Admin Sign-in Modal
let adminSignIn = document.querySelector("#admin");
let adminModalOpen = document.querySelector("#admin-modal");
let adminModalClose = document.querySelector("#admin-modal-close-btn");


adminSignIn.addEventListener("click", ()=>{
    overlay.style.display = "block"
    adminModalOpen.style.display = "block";
})

adminModalClose.addEventListener("click",()=>{
        adminModalOpen.style.display = "none";
        overlay.style.display = "none"
})