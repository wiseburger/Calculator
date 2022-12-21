function doVal(){
    var getInps = document.getElementsByTagName("input");
    var errMs = document.querySelectorAll(".textfieldRequiredMsg");
    var errNum = document.querySelectorAll(".textfieldInvalidFormatMsg");
    for(let i = 0; i < getInps.length; i++){
        let curNum = getInps[i].value;
        if(getInps[i].value.length == 0){
            //empty field
            errMs[i].style.display = "block";
            errMs[i].style.color = "red";
            return false;
        }
        else{
            errMs[i].style.display = "none";
        }

        if(isNaN(curNum)){
            //alphabet entered
            errNum[i].style.display = "block";
            errNum[i].style.color = "red";
            return false;
        }
        else{
            errNum[i].style.display = "none";
        }
    }
}