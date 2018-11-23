window.onload = function(){
    var time = new Date().getHours();
    if (time < 12) {
        document.getElementById('greeting').innerHTML = '<h1>Good Morning</h1>';
        document.getElementById('home').style.backgroundImage = "url(wp-content/themes/designhub/img/ben-den-engelsen-1142125-unsplash.jpg)";
    } else if(time < 17){
        document.getElementById('greeting').innerHTML = '<h1>Good Afternoon</h1>';
        document.getElementById('home').style.backgroundImage = "url(wp-content/themes/designhub/img/antonio-grosz-66955-unsplash.jpg)";
    } else if (time < 20) {
        document.getElementById('greeting').innerHTML = '<h1>Good Evening</h1>';
        document.getElementById('home').style.backgroundImage = "url(wp-content/themes/designhub/img/zoey-tien-377901-unsplash.jpg)";
    } else {
        document.getElementById('greeting').innerHTML = '<h1>Good Night</h1>';
        document.getElementById('home').style.backgroundImage = "url(wp-content/themes/designhub/img/atanas-dzhingarov-1148680-unsplash.jpg)";
    }
    
}

document.getElementById('filter').addEventListener('focus', function(e){
    e.target.placeholder = "Search Products";
});

document.getElementById('filter').addEventListener('blur', function(e){
    e.target.placeholder = "";
});