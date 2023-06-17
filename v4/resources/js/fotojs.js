var path = "C:/Users/MSI/Documents/Extmf/3 Веб-технологии/HELP2.0/public/img/";
fotos = [path + "cat1.jpg", path + "cat2.jpg", path + "cat3.jpg", path + "cat4.jpg", path + "cat5.jpg", path + "cat6.jpg", path + "cat7.jpg", path + "cat8.jpg", path + "cat9.jpg", path + "cat10.jpg", path + "cat11.jpg", path + "cat12.jpg", path + "cat13.jpg", path + "cat14.jpg", path + "cat15.jpg"];
titles = "жесть грустит";

function ShowFoto() {
    var img_ar = new Array(15);
    var length_img = img_ar.length;
    var numberofshownfoto = 0;
        var container = document.createElement("div")[length_img];
    for (i = 0; i < length_img; i++) {
        div_img = document.createElement("div");
        //div_img.className = float:left;                   
        //как указать стиль флот лефт
        for_img = document.createElement("img");
        for_img.src = fotos[numberofshownfoto];
        for_img.alt = "кот грустит" + (numberofshownfoto + 1);
        for_img.title = titles;
        for_img.addEventListener("click", PopUpShow);
        div_img.appendChild(for_img);
        numberofshownfoto++;
    }
    container.appendChild(for_img);
}
ShowFoto();

$(document).ready(function(){
    //Скрыть PopUp при загрузке страницы    
    PopUpHide();
  });
  //Функция отображения PopUp
  function PopUpShow(){
    $("#popup1").show();
  }
  //Функция скрытия PopUp
  function PopUpHide(){
    $("#popup1").hide();
  }
    //var table = document.createElement("TABLE");
    // var row = new Array(3);
    //row = document.createElement("tr");
    //var cell = new Array(15);
    //cell = document.createElement("td");
/* for (c1 = 0; c1 < 3; c1++) {
     row = document.createElement('tr');
     for (c2 = 0; c2 < 5; c2++) {
       cell = document.createElement('td');
       var img = document.createElement("img");
       img.src = fotos[numberofshownfoto];
       img.alt = "кот грустит"+ (numberofshownfoto+1);
       img.title = titles;
       cell.appendChild(img);
       row.appendChild(cell);
       numberofshownfoto++;
     }
     table.appendChild(row);
     
     {
    var div = document.getElementsByTagName('div')[0];
    var numberofshownfoto = 0;
    var table = document.createElement("TABLE");
    var row = new Array(3);
    row = document.createElement("tr");
    var cell = new Array(15);
    cell = document.createElement("td");
    for (c1 = 0; c1 < 3; c1++) {
        row = document.createElement('tr');
        for (c2 = 0; c2 < 5; c2++) {
          cell = document.createElement('td');
          var img = document.createElement("img");
          img.src = fotos[numberofshownfoto];
          img.alt = "кот грустит"+ (numberofshownfoto+1);
          img.title = titles;
          cell.appendChild(img);
          row.appendChild(cell);
          numberofshownfoto++;
        }
        table.appendChild(row);
    }
    div.appendChild(table);
}
 }*/