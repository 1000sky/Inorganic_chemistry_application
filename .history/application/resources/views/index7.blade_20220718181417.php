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
          <div class=Chemical-formula>CdS</div>
          <div class=circle-yellow></div> 
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>FeS</div> 
          <div class=circle-black></div>  

        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>

        <div class=memorize>  
            <input type="checkbox" class=checkbox name="">
            <div class=Chemical-formula>NiS</div> 
            <div class=circle-black></div>  
  
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

        <div id="flame-reaction">
            <p id="flame-reaction2">CHECK</p>
        </div>




     <ul class="page">
       <li><a href="/index6">Previous</a></li>
       <li><a href="/index5">5</a></li>
       <li><a href="/index6">6</a></li>
       <li class="this">7</li>
     </ul>
       


    </div>
    <script language="JavaScript">
        function setTF(fObj,vType)
        {
          fObj.style.visibility = vType;
        };
    
        document.getElementById("point").onclick = function() {
          document.getElementById("point-text").innerHTML = "H<span class=kasuu>2</span>S は水溶液のPHによって沈殿する、しないに別れます。<br>酸性、中性、塩基性でもCdSは黄色沈殿<br>中性、塩基性で FeS NiSは黒色沈殿<br>沈殿しないものは炎色反応で判断します。";
          
        };

        document.getElementById("flame-reaction").onclick = function() {
          document.getElementById("flame-reaction2")
          .innerHTML = 
          "
          <div class=flame-reaction3>
            <p>炎色反応</p><br>  
            <div class=set>  Li  <div class=circle-Li></div> </div> 
            <div class=set>  Na  <div class=circle-Na></div> </div> 
            <div class=set>  K   <div class=circle-K></div> </div> 
            <div class=set>  Cu  <div class=circle-Cu></div>  </div> 
            <div class=set>  Ca  <div class=circle-Ca></div>  </div> 
            <div class=set>  Sr  <div class=circle-Sr></div> </div> 
            <div class=set>  Ba  <div class=circle-Ba></div>  </div> 
          </div>  ";
          
        };
    </script>   
</body