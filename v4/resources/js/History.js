pages = ['Главная', 'Обо мне', 'Мои интересы', 'Учёбы', 'Фотоальбом', 'Контакт', 'Тест'];
page_keys = ["main", "aboutMe", "hobby", "study", "album", "contact", "test"];

function showTable() {
  var bodyDiv = document.getElementById('tableHistory1');
  var table = document.createElement('table');
  table.classList.add('table');
  var row = new Array(8);
  var cell = new Array(15);
  var n=0

  row = document.createElement('tr');
  cell = document.createElement('th');
  cell.colSpan = 2;
  var div = document.createElement('div');
  div.classList.add('center')
  div.innerHTML = "История текущего сеанса";
  cell.appendChild(div);
  row.appendChild(cell);
  table.appendChild(row);

  for (c1 = 0; c1 < 7; c1++) {
      row = document.createElement('tr');

      cell = document.createElement('td');
      var div = document.createElement('div');
      div.classList.add('center')
      div.innerHTML = pages[n];
      cell.appendChild(div);
      row.appendChild(cell);

      cell = document.createElement('td');
      var div = document.createElement('div');
      div.classList.add('center')
      str = page_keys[n];
      if (sessionStorage.getItem(str)!=null){
        div.innerHTML = sessionStorage.getItem(str);
      }
      else{
        div.innerHTML = "0";
      }
      cell.appendChild(div);
      row.appendChild(cell);
      
      n++;
      table.appendChild(row);
  }
  bodyDiv.appendChild(table);
}
showTable();


function showTable2() {
  var bodyDiv = document.getElementById('tableHistory2');
  var table = document.createElement('table');
  table.classList.add('table');
  var row = new Array(8);
  var cell = new Array(15);
  var n=0

  row = document.createElement('tr');
  cell = document.createElement('th');
  cell.colSpan = 2;
  var div = document.createElement('div');
  div.classList.add('center')
  div.innerHTML = "История за всё время";
  cell.appendChild(div);
  row.appendChild(cell);
  table.appendChild(row);

  for (c1 = 0; c1 < 7; c1++) {
      row = document.createElement('tr');

      cell = document.createElement('td');
      var div = document.createElement('div');
      div.classList.add('center')
      div.innerHTML = pages[n];
      cell.appendChild(div);
      row.appendChild(cell);
      

      cell = document.createElement('td');
      var div = document.createElement('div');
      div.classList.add('center')
      str = page_keys[n];
      if (localStorage.getItem(str)!=null){
        div.innerHTML = localStorage.getItem(str);
      }
      else{
        div.innerHTML = "0";
      }
      cell.appendChild(div);
      row.appendChild(cell);
      
      n++;
      table.appendChild(row);
  }
  bodyDiv.appendChild(table);
}
showTable2();