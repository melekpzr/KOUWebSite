// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com
  var snowsrc="melek.png"
  var srcone="sumeyra.png"
  var dilek="dilek.png"
  var aysenur="aysenur.png"
  var no = 30;

  var hidesnowtime = 0;

  var snowdistance = "pageheight";
// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com

// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com
  var ie4up = (document.all) ? 1 : 0;
  var ns6up = (document.getElementById&&!document.all) ? 1 : 0;

	function iecompattest(){
	return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
	}// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com

  var dx, xp, yp;   
  var am, stx, sty;  
  var i, doc_width = 800, doc_height = 200; 
  
  if (ns6up) {
    doc_width = self.innerWidth;
    doc_height = 200;
  } else if (ie4up) {
    doc_width = iecompattest().clientWidth;
    doc_height = 200;
  }// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com

  dx = new Array();
  xp = new Array();
  yp = new Array();
  am = new Array();
  stx = new Array();
  sty = new Array();
  snowsrc=(snowsrc.indexOf("http://www.webkodu.com")!=-1)? "melek.png" : snowsrc
  srcone=(srcone.indexOf("http://www.webkodu.com")!=-1)? "sumeyra.png" : srcone
  dilek=(srcone.indexOf("http://www.webkodu.com")!=-1)? "dilek.png" : dilek  
  aysenur=(srcone.indexOf("http://www.webkodu.com")!=-1)? "aysenur.png" : aysenur

  
    for (i = 3; i < no-15; ++ i) {  
    dx[i] = 0;                       
    xp[i] = Math.random()*(doc_width-50);  
    yp[i] = Math.random()*doc_height;
    am[i] = Math.random()*20;        
    stx[i] = 0.02 + Math.random()/10; // set step variables
    sty[i] = 0.7 + Math.random();    
		if (ie4up||ns6up) {
      if (i == 3) {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 45px; LEFT: 45px; \"><a href=\"http://www.webkodu.com\"><img src='"+aysenur+"' border=\"0\"><\/a><\/div>");

	  } else {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 45px; LEFT: 45px; \"><img src='"+aysenur+"' border=\"0\"><\/div>");

	 }
    }// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com
  }

  
  
  
   for (i = 2; i < no-10; ++ i) {  
    dx[i] = 0;                       
    xp[i] = Math.random()*(doc_width-50);  
    yp[i] = Math.random()*doc_height;
    am[i] = Math.random()*20;        
    stx[i] = 0.02 + Math.random()/10; // set step variables
    sty[i] = 0.7 + Math.random();    
		if (ie4up||ns6up) {
      if (i == 2) {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 45px; LEFT: 45px; \"><a href=\"http://www.webkodu.com\"><img src='"+dilek+"' border=\"0\"><\/a><\/div>");

	  } else {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 45px; LEFT: 45px; \"><img src='"+dilek+"' border=\"0\"><\/div>");

	 }
    }// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com
  }

  
  
  
  for (i = 1; i < no-5; ++ i) {  
    dx[i] = 0;                       
    xp[i] = Math.random()*(doc_width-50);  
    yp[i] = Math.random()*doc_height;
    am[i] = Math.random()*20;        
    stx[i] = 0.02 + Math.random()/10; // set step variables
    sty[i] = 0.7 + Math.random();    
		if (ie4up||ns6up) {
      if (i == 1) {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 45px; LEFT: 45px; \"><a href=\"http://www.webkodu.com\"><img src='"+snowsrc+"' border=\"0\"><\/a><\/div>");

	  } else {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 45px; LEFT: 45px; \"><img src='"+snowsrc+"' border=\"0\"><\/div>");

	 }
    }// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com
  }
  
   for (i = 0; i < no; ++ i) {  
    dx[i] = 0;                       
    xp[i] = Math.random()*(doc_width-50);  
    yp[i] = Math.random()*doc_height;
    am[i] = Math.random()*20;        
    stx[i] = 0.02 + Math.random()/10; // set step variables
    sty[i] = 0.7 + Math.random();    
		if (ie4up||ns6up) {
      if (i == 0) {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 45px; LEFT: 45px; \"><a href=\"http://www.webkodu.com\"><img src='"+srcone+"' border=\"0\"><\/a><\/div>");

	  } else {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 45px; LEFT: 45px; \"><img src='"+srcone+"' border=\"0\"><\/div>");

	 }
    }// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com
  }
// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com






  function snowIE_NS6() { 
    doc_width = ns6up?window.innerWidth-10 : iecompattest().clientWidth-10;
		doc_height=(200 && snowdistance==200)? 200 : (ie4up && snowdistance==200)?  200 : (ie4up && !window.opera && snowdistance==200)? 200 : 200;
    for (i = 0; i < no; ++ i) {  
      yp[i] += sty[i];
      if (yp[i] > doc_height-50) {
        xp[i] = Math.random()*(doc_width-am[i]-30);
        yp[i] = 0;
        stx[i] = 0.02 + Math.random()/10;
        sty[i] = 0.7 + Math.random();
      }
      dx[i] += stx[i];
      document.getElementById("dot"+i).style.top=yp[i]+"px";
      document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";  
    }// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com
    snowtimer=setTimeout("snowIE_NS6()", 10);
  }// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com

	function hidesnow(){
		if (window.snowtimer) clearTimeout(snowtimer)
		for (i=0; i<no; i++) document.getElementById("dot"+i).style.visibility="hidden"
	}
		// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com

if (ie4up||ns6up){
    snowIE_NS6();
		if (hidesnowtime>0)
		setTimeout("hidesnow()", hidesnowtime*1000)
		}
	// Bu Bir WebKodu.com Ürünüdür. http://www.webkodu.com