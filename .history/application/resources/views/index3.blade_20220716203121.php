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
          <div class=Chemical-formula>Cu(OH)<span>2</span> </div>
          <div class=circle-CuOH></div> 
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
          <input type="checkbox" class=checkbox name="">
          <div class=Chemical-formula>Fe(OH)<span>2</span> </div> 
          <div class=circle-FeOH2></div>  
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>


        <div class=memorize>  
            <input type="checkbox" class=checkbox name="">
            <div class=Chemical-formula>Fe(OH)<span>3</span> </div> 
            <div class=circle-reddish-brown></div> 
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



       <ul class="page">
          <li><a href="/index2">Previous</li>
          <li class="this">3</li>
          <li><a href="/index4">4</li>
          <li><a href="/index5">5</li>
          <li><a href="/index4">Next</li>
       </ul>
       
      


    </div>


    <script language="JavaScript">
        function setTF(fObj,vType)
        {
          fObj.style.visibility = vType;
        };
    
        document.getElementById("point").onclick = function() {
          document.getElementById("point-text").innerHTML = "Cu(OH)<span class=kasuu>2</span> ????????????<br>Fe(OH)<span class=kasuu>2</span>????????????<br>Fe(OH)<span class=kasuu>3</span>????????????<br>???????????????????????????";
          
        };
    </script>   

</body>