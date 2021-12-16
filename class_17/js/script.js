var products =[
    {id: 1, name:'Shirt' , price :2000},
    {id: 2, name:'Saree' , price :4000},
    {id: 3, name:'Dress' , price :1500},
    {id: 4, name:'Shoe' , price :800},
    {id: 5, name:'Earring', price :500},
    {id: 6, name:'Mobile', price :55500}
];    //array

var select = '';
select+= '<select item="1" onchange="setPriceQuantityAndTotalPrice(this.value,this)">';
select+= '<option disabled selected> --Select Product-- </option>';
$.each(products,function (key,value){
    select+='<option value="'+value.id+'">'+value.name +'</option>';
})
select+= '</select>';

$('#td1').append(select);


/*============== New Row add ================ */
var index = 2;
$('#addBtn').click(function () 
{
     var tr ='';
     tr += '<tr>';
     tr += '<td>';
     tr+= '<select item="'+index+'" onchange="setPriceQuantityAndTotalPrice(this.value,this)">';
     tr+= '<option disabled selected> --Select Product-- </option>';
     $.each(products,function (key,value)
     {
         tr+='<option value="'+value.id+'">'+value.name +'</option>';
     })
     tr+= '</select>';
     tr += '</td>';
     tr += ' <td><input type="number" dataId="'+index+'" onkeyup="updateTotalPriceByPrice(this)" id="price'+index+'"/></td>';
     tr += '<td><input type="number"  dataId="'+index+'"  onkeyup="updateTotalPriceByQty(this)" id="qty'+index+'"></td>';
     tr += '<td><input type="text" id="total'+index+'" readonly class="item-total-price"></td>';
     tr += '<td><button type="button" class="removeBtn">-</td>';
     tr += '</tr>';

     $('#newRow').append(tr);
     index++;
});
/*============== New Row add ================ */


/*============== New Row remove ================ */
$(document).on('click','.removeBtn',function(){
    $(this).closest('tr').remove();
    setGrandTotal();
});
/*============== New Row remove ================ */


/*****
  value = product id
  select = html select element
 *******/
function setPriceQuantityAndTotalPrice(value,select)
{   
    var newId= $(select).attr('item') 

    var product = products.find(product => {
        return product.id == value
    });
    $('#price'+newId).val(product.price);
    $('#qty'+newId).val(1);
    $('#total'+newId).val(product.price*1);
    setGrandTotal();
}
/* Total price updated */
function updateTotalPriceByQty(input)
{
   var index= $(input).attr('dataId');
   var qty = $(input).val();
   var price =$('#price'+index).val();
   var total = price * qty;
   $('#total'+ index).val(total);
   setGrandTotal();
}
function updateTotalPriceByPrice(input)
{
   var index= $(input).attr('dataId');
   var price = $(input).val();
   var qty =$('#qty'+index).val();
   var total = price * qty;
   $('#total'+ index).val(total);
   setGrandTotal();
}

function setGrandTotal()
{
    var sum = 0;
    $('.item-total-price').each(function(){
        sum = sum + Number($(this).val());
    });
    $('#grandTotal').text(sum);
}