<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inorganic_chemistry_application</title>
    <link rel="stylesheet" href="css/reset.css" >
    <link rel="stylesheet" href="css/index.css" />

</head>
<body>
    <div class=card>

        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>CaCO<span>3</span></div>
          <div class=circle></div> 
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>SrCO<span>3</span></div> 
          <div class=circle></div>  

        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
            <input type="checkbox" class=checkbox name="">
            <div class=Chemical-formula>BaCO<span>3</span></div> 
            <div class=circle></div>  
        </div>
          <form> 
            <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
            <input type="text" name="text1" style="visibility:hidden"><br>
          </form> 
          <br>
          <br>
    

          <button id="point">
            <p id="point-button">POINT</p>
            <p id="point-text">炭酸塩は水に溶けにくいものが多いです。<br>アルカリ金属イオンが相手だと溶けます。<br>アルカリ土類金属とは沈殿作ります。</p>
         </button>
 
         <button id="check">
           <p id="check-button">CHECK</p>
           <p id="check-text-p5">アルカリ金属　Li Na K Rb Cs Fr 周期表の1属に属します。<br>アルカリ土類金属　Ca Sr Ba Ra 周期表の2属に属します。</p>          
         </button>

         
         

     <ul class="page">
       <li><a href="/index4">Previous</a></li>
       <li class="this">5</li>
       <li><a href="/index6">6</a></li>
       <li><a href="/index7">7</a></li>
       <li><a href="/index6">Next</a></li>
     </ul>
       
     


    </div>

    <script language="JavaScript">
        function setTF(fObj,vType)
        {
          fObj.style.visibility = vType;
        };
    
        document.getElementById("point-text").style.visibility ="hidden";

document.getElementById("point").onclick = function() {
  const point = document.getElementById("point-text");
  const point1 = document.getElementById("point-button");
  
   if(point.style.visibility=="visible"){
    
     point.style.visibility = "hidden";
     point1.style.visibility = "visible";
     
  }else{
     point.style.visibility = "visible";
     point1.style.visibility = "hidden";
  }

}

document.getElementById("check-text-p5").style.visibility ="hidden";

document.getElementById("check").onclick = function() {
  const check = document.getElementById("check-text-p5");
  const check1 = document.getElementById("check-button");
  
   if(check.style.visibility=="visible"){
    
     check.style.visibility = "hidden";
     check1.style.visibility = "visible";
     
  }else{
     check.style.visibility = "visible";
     check1.style.visibility = "hidden";
  }

}
        
    </script>  

</body>
{{-- document.getElementById("point").onclick = function() { 
  document.getElementById("point-text").innerHTML = "炭酸塩は水に溶けにくいものが多いです。<br>アルカリ金属イオンが相手だと溶けます。<br>アルカリ土類金属とは沈殿作ります。";
  
};*/

/* window.addEventListener('load', function(){
document.getElementById("check").addEventListener('click', function(){
alert("アルカリ金属　Li Na K Rb Cs Fr   周期表の1属に属します。　　　　アルカリ土類金属　Ca Sr Ba Ra   周期表の2属に属します。");
});
});--}}