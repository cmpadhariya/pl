function openpop(){
    document.getElementById('light').style.display='block';
    document.getElementById('fade').style.display='block';
    var d = document.getElementById("doc");
    d.className += " stop-scrolling";  
    }
    
    function closepop(){
      document.getElementById('light').style.display='none';
      document.getElementById('fade').style.display='none';
    }