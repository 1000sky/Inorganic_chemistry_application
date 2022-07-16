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
            <div class=Chemical-formula>AgCl</div> 
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
            <div class=Chemical-formula>PbCl<span>2</span></div> 
            <div class=circle></div> 
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
           <li><a href="/">Previous</li>
           <li><a href="/">1</li>
           <li class="this">2</li>
           <li><a href="/index3">3</li>
           <li><a href="/index3">Next</li>
           </ul>
           
         </div>  




    </div>
    

   <script language="JavaScript">
    function setTF(fObj,vType)
    {
      fObj.style.visibility = vType;
    };

    document.getElementById("point").onclick = function() {
      document.getElementById("point-text").innerHTML = "硫酸の塩は本来,水に溶けやすいです。<br>アルカリ土類金属イオンやPb<span class=ion>2+</span>があると沈殿します。";
      
    };


    window.addEventListener('load', function(){
      document.getElementById("cheak").addEventListener('click', function(){
      alert("アルカリ土類金属　Ca Sr Ba Ra   周期表の2属に属します");
     });
    });
    </script>   


</body>
