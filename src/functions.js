var ns4 = (document.layers);
var ie4 = (document.all && !document.getElementById);
var ie5 = (document.all && document.getElementById);
var ns6 = (!document.all && document.getElementById);

function grabStyle(id)
{
   if(ns4)             return document.layers[id].style;
   else if(ie4)        return document.all[id].style;
   else if(ie5 || ns6) return document.getElementById(id).style;
}
function grabObject(id)
{
   if(ns4)             return document.layers[id];
   else if(ie4)        return document.all[id];
   else if(ie5 || ns6) return document.getElementById(id);
}

function Darken(object)
{
   var divStyle=grabStyle(object);
   divStyle.backgroundColor="#bfcfff";
}

function Lighten(object)
{
   var divStyle=grabStyle(object);
   divStyle.backgroundColor="#ccdcff";
}

function Show(object)
{
   var divStyle=grabStyle(object);
   divStyle.visibility="visible";
   divStyle.position="relative";
}

function Hide(object)
{
   var divStyle=grabStyle(object);
   divStyle.visibility="hidden";
   divStyle.position="absolute";
}

function Resize(object,width,height)
{
   var divStyle=grabStyle(object);
   divStyle.width=width;
   divStyle.height=height;
}