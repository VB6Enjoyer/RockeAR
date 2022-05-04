
const bandaForm = document.getElementById("banda-form");

const imgBandaInput = document.getElementById("art-img");

const errorDisplay = document.getElementById("error-img");

let supportedFiles = [
  "image/jpeg",
  "image/png"
];

bandaForm.addEventListener("submit", (e) => {

  let currentImg = imgBandaInput.files;

  if(currentImg.length > 0)
  {

    for(const img of currentImg)
    {

      if(img.size > 500000)
      {
        errorDisplay.innerHTML = `La imagen es muy pesada`;
        e.preventDefault();
      }
      
      if(!supportedFiles.includes(img.type))
      {
        errorDisplay.innerHTML = `El archivo no es una imagen`;
        e.preventDefault();
      }
    }
    
  }
});

