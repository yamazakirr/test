document.write("<br><br>");
document.write("課題3");
document.write("<br>問1");

function area(half){
  document.write("<br>");
  return half*half*3.14;
}
// document.write("半径"+harf+area(5));
document.write(area(7));
document.write(area(10));

document.write("<br><br>");
document.write("問2");

function price(child,adult){
  document.write("<br>");
  return child*200 + adult*500+"円です。";

}

document.write(price(4,2));
// document.write("Bグループの合計金額は"+ price(5,1)+ "円です。");
// document.write("Cグループの合計金額は"+ price(7,3)+ "円です。");