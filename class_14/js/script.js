// var btn = document.getElementById("btn");
// btn.onclick=function()
// {
//     var start =Number( document.getElementById("startingNumber").value);
//     var end = Number(document.getElementById("endingNumber").value);
//     var choice = document.getElementsByName("choice");
//     var temp =' ' ;
//     if(choice[0].checked == true)
//     {
//         temp = 'odd';
//     }
//     else
//     {
//         temp = 'even';
//     }
    
//     var i;
//     var x = ' ';


//    if(start>end){
//        if(temp == 'odd')
//         {
//             for(i=start; i>=end; i--)
//             {
//                 if(i%2 !=0)
//                 {
//                     x = x + i + ' ';
//                 }
            
//             }
//             document.getElementById("result").innerHTML = x;
//         }
//         else
//         {
//             for(i=start; i>=end; i--)
//             {
//                 if(i%2 ==0)
//                 {
//                 x = x + i + ' ';
//                 }
//             }
//             document.getElementById("result").innerHTML = x;
//         }
//    }
//    else
//    {
//     if(temp == 'odd')
//     {
//         for(i=start; i<=end; i++)
//         {
//             if(i%2 !=0)
//             {
//                 x = x + i + ' ';
//             }
//         }
//     }
//     else{
//         for(i=start; i<=end; i++)
//         {
//             if(i%2 ==0)
//             {
//                 x = x + i + ' ';
//             }
//         }
//     }
//         document.getElementById("result").innerHTML = x;
//    }
    
// }



var homeBtn = document.getElementById("homeBtn");
var aboutBtn = document.getElementById("aboutBtn");
var contactBtn = document.getElementById("contactBtn");

var home = document.getElementById("home");
var about = document.getElementById("about");
var contact = document.getElementById("contact");

homeBtn.onclick = function(){
    event.preventDefault();
    home.setAttribute('class','content-wrapper');
    about.setAttribute('class','content-wrapper d-none');
    contact.setAttribute('class','content-wrapper d-none');

    homeBtn.setAttribute('class', 'active');
    aboutBtn.setAttribute('class', ' ');
    contactBtn.setAttribute('class', ' ');

  
}
aboutBtn.onclick = function(){
    event.preventDefault();
    home.setAttribute('class','content-wrapper  d-none');
    about.setAttribute('class','content-wrapper ');
    contact.setAttribute('class','content-wrapper d-none');

    homeBtn.setAttribute('class', '');
    aboutBtn.setAttribute('class', 'active ');
    contactBtn.setAttribute('class', ' ');
   
}
contactBtn.onclick = function(){
    event.preventDefault();
    home.setAttribute('class','content-wrapper  d-none');
    about.setAttribute('class','content-wrapper d-none');
    contact.setAttribute('class','content-wrapper ');
    homeBtn.setAttribute('class', '');
    aboutBtn.setAttribute('class', ' ');
    contactBtn.setAttribute('class', ' active');
   
}