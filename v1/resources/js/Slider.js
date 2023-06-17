flagShowPop=false;

$(document).ready(function(){
    PopUpHide();
    });
    //Функция отображения PopUp
    function PopUpShow(event){
        flagShowPop=true;
    $("#popup1").show();
}
function ClickOutSide(event){
    if((event.target.getAttribute("class")!="c-button")&&(flagShowPop=true)) {
        PopUpHide();
    };
}
    //Функция скрытия PopUp
    function PopUpHide(){
    $("#popup1").hide();
    flagShowPop = false;
    }

opus.addEventListener("click", PopUpShow);
window.addEventListener("click",ClickOutSide);