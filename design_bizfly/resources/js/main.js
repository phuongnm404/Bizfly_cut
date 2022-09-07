window.filter_chiendich = 
function () {
    var search_value = document.getElementById('searchvalue_chiendich').value;
    var search_list = document.getElementsByClassName('list_chiendich');
    for(var i of search_list) {
        if(i.innerHTML.search(search_value)== -1) {
            i.style.display = "none";
        } else {
            i.style.display = "block";
        }
    }   
}
window.filter_nhom = 
function() {
    var search_value = document.getElementById('searchvalue_nhom').value;
    var search_list = document.getElementsByClassName('list_nhom');
    for(var i of search_list) {
        if(i.innerHTML.search(search_value)== -1) {
            i.style.display = "none";
        } else {
            i.style.display = "block";
        }
    }   
}