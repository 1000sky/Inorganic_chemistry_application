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
          <div class=Chemical-formula>CdS</div>
          <div class=circle>黄色</div> 
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
            <div class=Chemical-formula>NiS</div> 
            <div class=circle-black>黒色</div>  
  
          </div>
          <form> 
            <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
            <input type="text" name="text1" style="visibility:hidden"><br>
          </form> 
          <br>
          <br>

        
     
     
      <div>
        <h3 class=point>POINT</h3>
       <details>

       </details>


     </div>



     <ul class="page">
       <li><a href="/index2">Previous</li>
       <li><a href="/">1</li>
       <li><a href="/index2">2</li>
       <li class="this">3</li>
       <li>Next</li>
    </ul>
       


    </div>
    <script language="JavaScript">
        function setTF(fObj,vType)
        {
          fObj.style.visibility = vType;
        };
    
        document.getElementById("point").onclick = function() {
          document.getElementById("point-text").innerHTML = "Cu(OH)<span class=kasuu>2</span> は青白色<br>Fe(OH)<span class=kasuu>2</span>は緑白色<br>Fe(OH)<span class=kasuu>3</span>は赤褐色<br>の沈殿を作ります。";
          
        };
    </script>   
</body>