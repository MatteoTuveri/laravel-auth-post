import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);

const previwImage =document.getElementById('image');
previwImage.addEventListener('change',(event)=>{
    var oFReader = new FileReader();
    oFReader.readAsDataURL(previwImage.files[0]);
    oFReader.onload = function (oFREvent){
        document.getElementById('uploadPreview').src = oFREvent.target.result;
    }
})