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
 {{-- 修正まだ --}}
        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>Ag<span>2</span>S</div>
          <div class=circle-black>黒色</div> 
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>PbS</div> 
          <div class=circle-black>黒色</div>  

        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>

        <div class=memorize>  
            <input type="checkbox" class=checkbox name="">
            <div class=Chemical-formula>Zus</div> 
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
           <li><a href="/index5">Previous</li>
           <li><a href="/index5">5</li>
           <li class="this">6</li>
           <li><a href="/index7">7</li>
           <li><a href="/index7">Next</li>
        </ul>  


    </div>
    <script language="JavaScript">
        function setTF(fObj,vType)
        {
          fObj.style.visibility = vType;
        };
    
        document.getElementById("point").onclick = function() {
          document.getElementById("point-text").innerHTML = "Cu(OH)<span class=kasuu>2</span> は青白色<br>Fe(OH)<span class=kasuu>2</span>は緑白色<br>Fe(OH)<span class=kasuu>3</span>は赤褐色<br>の沈殿を作ります。<br>アルカリ土類金属イオンやPb<span class=ion>2+</span>があると沈殿します。";
          
        };
    </script>   

</body>
