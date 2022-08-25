/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

$(document).ready(function(){
    $("#header").load("./ui-header.html"); 
    $("#footer").load("./ui-footer.html");
});
function openSearchDropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function closeSearchDropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function selectFilteredValue() {
  document.getElementById("search_input").value = event.target.getAttribute("data-value");
  closeSearchDropdown();
}

function filterSearchDropdown() {
  var input, filter, ul, li, span, i;
  input = document.getElementById("search_value");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  span = div.getElementsByTagName("span");
  for (i = 0; i < span.length; i++) {
      txtValue = span[i].textContent || span[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
          span[i].style.display = "";
      } else {
          span[i].style.display = "none";
      }
  }
}