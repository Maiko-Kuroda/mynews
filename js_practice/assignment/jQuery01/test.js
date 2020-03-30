var answer=prompt('数字を入力してください');
if(answer>=0){
    alert(i);
}else if(answer='abc'){
    alert('数値を入力してください');
}

var animal=['パンダ','ライオン','キリン'];
var i=0;
const targetVal='ライオン';
var answer=prompt('好きな動物を入れてください');
while(i<animal.length){
    if(answer==targetVal){
        alert(targetVal);
        break;
    }
    alert(animal[i]);
    i++
}


var weight=[
    {'animal':'パンダ','weight':'80kg'},
    {'animal':'ライオン','weight':'200kg'},
    {'animal':'キリン','weight':'300kg'}
    ];
var answer=prompt('体重が気になる動物は');
switch(answer){
    case'パンダ':
        alert('80kg');
        break;
    case'ライオン':
        alert('200kg');
        break;
    case'キリン':
        alert('300kg');
        break;
}

var obj={elephant:'1t',
    panda:'80kg',
    bird:'1kg'
};
var answer=prompt('e')
    console.log(obj.weight);

var answer=prompt('数字を入れてください,円周率をだします');
alert(i*i*3.14)
