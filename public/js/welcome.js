(function() {
    var text = [];

    var txt = document.getElementsByTagName("h1");
    for (var i=0; i < txt.length; i++) {
        text.push(txt[i].innerText);
    }
    console.log(txt);

    console.log(text);

})();



//   ​var array = [];

// (function(){
//     var elements = document.getElementsByTagName("h3");
//     for (var i = 0; i < elements.length; i++) {
//         array.push(elements[i].innerText);
//     }
// })();

// ​alert(array);​