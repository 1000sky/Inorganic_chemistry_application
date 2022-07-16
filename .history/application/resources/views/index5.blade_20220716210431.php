<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inorganic_chemistry_application</title>
    <link rel="stylesheet" href="css/reset.css" >
    <link rel="stylesheet" href="css/index.css" />

    <script language="JavaScript"><!--
      function setTF(fObj,vType)
      {
        fObj.style.visibility = vType;
      }
       --></script>
</head>
<body>
    <div class=card>

        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>CaCO<span>3</span></div>
          <div class=circle>白色</div> 
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
          <div class=circle>白色</div>  

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
            <div class=circle>白色</div>  
  
          </div>
          <form> 
            <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
            <input type="text" name="text1" style="visibility:hidden"><br>
          </form> 
          <br>
          <br>
    

          <div id="point">
            <p id="point-text">POINT</p>
          </div>
         
          <button id="cheak">cheak</button>
         

     <ul class="page">
       <li><a href="/index4">Previous</li>
       <li class="this">5</li>
       <li><a href="/index6">6</li>
       <li><a href="/index7">7</li>
       <li><a href="/index6">Next</li>
     </ul>
       
     


    </div>

    <script language="JavaScript">
        function setTF(fObj,vType)
        {
          fObj.style.visibility = vType;
        };
    
        document.getElementById("point").onclick = function() {
          document.getElementById("point-text").innerHTML = "炭酸塩は水に溶けにくいものが多いです。<br>アルカリ金属イオンが相手だと溶けます。<br>アルカリ土類金属とは沈殿作ります。";
          
        };

        window.addEventListener('load', function(){
        document.getElementById("cheak").addEventListener('click', function(){
        alert("アルカリ金属　Li Na K Rb Cs Fr   周期表の1属に属します<br>アルカリ土類金属　Ca Sr Ba Ra   周期表の2属に属します");
       });
      });
    </script>  

</body>