let txt = document.getElementById('text');
txt.innerHTML = '<strong>Hello</strong> world!';
//document.getElementById('btn').innerText = 'test button changed without variable';



function changeButtonBorder()
{
    let btn = document.getElementById('btn');
    let enterElement = document.getElementById('enter');

    let enterVal = enterElement.value;
    //enterElement.value ='sdfsdf';

    btn.innerText = enterVal;
    btn.style.border = '1px solid red';
}

function clearEnterValue()
{
    let enterElement = document.getElementById('enter');
    enterElement.value = '';
}






















/*
let userAge = 10;
const userName = "Alex";

console.log('Hello, ' + userName + ', len: ' + userName.length + ' (console)');
//document.write('Hello from end');

if (userAge >= 18) {
    // show adult
} else {
    // child
}

for (let i = 0; i < 10; i++) {

}

a = 0;
while (a < 10) {

    a++;
}

function getUserList(arg1, arg2) {

    t = 10;
    v = 20;
    z = t + v;

    return z;
}
*/
