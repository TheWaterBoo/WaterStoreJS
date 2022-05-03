//Script para agregar texto o creditos al copiar algo de tu pagina, algo util por si no quieres que copien algo o solo para marcar lo de tu propiedad
var pascont;
function addLinkcompteur(){
    if(typeof window.getSelection=="undefined")
    return;
    var selection=window.getSelection(),pagelink='<br><br>Copiaste texto de Water Boo, el fantasma te esta observando ¬.¬',
    copytext=selection+pagelink,newdiv=document.createElement('div');
    newdiv.style.position='absolute';newdiv.style.left='-99999px';
    document.body.appendChild(newdiv);
    newdiv.innerHTML=copytext;selection.selectAllChildren(newdiv);
    window.setTimeout(function(){
        document.body.removeChild(newdiv);
    },100);}
    window.addEventListener('copy',addLinkcompteur);
    window.addEventListener('cut',addLinkcompteur);
    window.addEventListener('contextmenu',pascont);
