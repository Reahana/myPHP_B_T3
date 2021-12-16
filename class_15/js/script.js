//div

var newBtn = document.getElementById('newBtn');
newBtn.onclick =function ()
{
    var height = document.getElementById('height').value;
    var width = document.getElementById('width').value;
    var bgColor = document.getElementById('color').value;
    var radius = document.getElementById('radius').value;
    var float = document.getElementById('float').value;

    var div =document.createElement('div');
    var h1 =document.createElement('h1');
    var img =document.createElement('img');
    var p =document.createElement('p');

    h1.innerHTML ="This is a heading";
    p.innerHTML ="This is a paragraph"
    img.setAttribute('src', 'img/2.jpg');
    img.style.height = '200px';
    img.style.width = '300px';
    div.append(h1);
    div.append(img);
    div.append(p);
    div.style.height = height + 'px';
    div.style.width = width + 'px';
    div.style.backgroundColor = bgColor;
    div.style.borderRadius = radius + 'px';
    div.style.float = float ;

    console.log(div);
   
    var custom = document.getElementById('custom');
    custom.append(div);
}











//sider

// var data =['img/1.jpg','img/2.jpg','img/3.jpg','img/4.jpg'];
// var sliderMainImage = document.getElementById('sliderMainImage');
// var index = 0;

// function changeImage() {
//     sliderMainImage.setAttribute('src', data[index]);
//     index++;
//     if(index == data.length)
//     {
//         index=0;
//     }
// }
// setInterval(changeImage,1000);






//image

// var img1 =document.getElementById('img1');
// img1.onclick =function () {
//     var mainImage = document.getElementById('mainImage');
//     var imgUrl = img1.getAttribute('src');
//     mainImage.setAttribute('src', imgUrl);
// }
// var img2 =document.getElementById('img2');
// img2.onclick =function () {
//     var mainImage = document.getElementById('mainImage');
//     var imgUrl = img2.getAttribute('src');
//     mainImage.setAttribute('src', imgUrl);
// }
// var img3 =document.getElementById('img3');
// img3.onclick =function () {
//     var mainImage = document.getElementById('mainImage');
//     var imgUrl = img3.getAttribute('src');
//     mainImage.setAttribute('src', imgUrl);
// }
// var img4 =document.getElementById('img4');
// img4.onclick =function () {
//     var mainImage = document.getElementById('mainImage');
//     var imgUrl = img4.getAttribute('src');
//     mainImage.setAttribute('src', imgUrl);
// }
// var reset =document.getElementById('reset');
// reset.onclick =function () {
//     var mainImage = document.getElementById('mainImage');
//     var imgUrl = ['img/default.jpg'];
//     mainImage.setAttribute('src', imgUrl);
// }






// console.log(result + " " + watch);
// document.getElementById('clock').innerHTML = result + " " + watch;

// function test() {
// var dateTime = new Date();
// var month = ['January', 'February','March','April','May','June','July','August', 'September','October','November','December'];
// var day = ['Sunday','Monday', 'Tuesday','Wednesday','Thursday','Friday', 'Saturday'];
// var hour = dateTime.getHours();
// var minites = dateTime.getMinutes();
// var second = dateTime.getSeconds();
// var year = dateTime.getFullYear();

// var result = day[dateTime.getDay()] + ' ' + dateTime.getDate()+"th" + ' ' +  month[dateTime.getMonth()] + ' '+ year
// var watch = hour + " : " +  minites + " : " +  second ;
// document.getElementById('clock').innerHTML = result + " | " + watch;
// }
    
// setInterval(test,1000);
// setTimeout(test,4000)


// var btn =document.getElementById('btn')

// btn.onclick =function () {
//     var number =Number( document.getElementById('number').value);
//     var x = ' ';
//     if(number%2 == 0) 
//     {
//      x= 'even'
//     }
//     else{
//         x ='odd'
//     }
//     document.getElementById('result').innerHTML = x;
    
// }
// btn.onclick =function () {
//     var number =Number( document.getElementById('number').value);
//     var result = 'Prime';
//     var i;
//     for(i=2;i<number;i++)
//     {
//         if(number%i == 0)
//         {
//             result = 'Not Prime';
//             break;
//         }
//          else
//         {
//         continue;
//         }
//     }
    
//     document.getElementById('result').innerHTML = result;
    
// }
