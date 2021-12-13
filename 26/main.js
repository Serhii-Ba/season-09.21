let cnt = document.getElementById('count');

// cnt.innerText = 'privet';
//
// let i = 0;
setInterval(function(){
    let d = new Date();
    cnt.innerText = d.toString();
}, 1*1000);

//
// i = 0;
// setInterval(function(){
//     test.style.left = i++;
// }, 100);


document.getElementById('place').addEventListener('mousemove', function(e){
    moveObject(e)
});

function moveObject(e) {
    let test = document.getElementById('test');
    test.style.top = e.clientY;
    test.style.left = e.clientX;
}
