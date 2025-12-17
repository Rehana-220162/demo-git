function applyStyle(){
    const element=document.getElementById("text1");
    element.style.color='white';
    element.style.fontsize='30px';
    element.style.backgroundcolor='green';
    element.style.padding='10px';
}
let isStyled=false;
function hovering(){
 const element=document.getElementById("text2");
if(isStyled=false){
    element.style.color='white';
    element.style.fontsize='25px';
    element.style.backgroundcolor='purple';
    element.style.padding='12px';
    isStyled=true;
}
else{
    element.style.color='white';
    element.style.fontsize='25px';
    element.style.backgroundcolor='purple';
    element.style.padding='12px';
    isStyled=false;
}
}
