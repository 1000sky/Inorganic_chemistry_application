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
          <div class=Chemical-formula>CaSO<span>4</span></div>
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
          <div class=Chemical-formula>SrSO<span>4</span></div> 
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
          <div class=Chemical-formula>BaSO<span>4</span></div> 
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
          <div class=Chemical-formula>PbSO<span>4</span></div>
          <div class=circle></div> 
        </div>
        <form> 
          <input type="button" class=button name="" value="memo" onClick="setTF(this.form.text1,'visible')">
          <input type="text" name="text1" style="visibility:hidden"><br>
        </form> 
        <br>
        <br>

        <div id="point">POINT
           <p id="point-text"></p>
        </div>

        <button id="check">
          <p id="check-text">CHECK</p>
        </button>
        
        <ul class="page">
          <li>Previous</li>
          <li class="this">1</li>
          <li><a href="/index2">2</a></li>
          <li><a href="/index3">3</a></li>
          <li><a href="/index2">Next</a></li>
         </ul>    
    </div>  
    
     <script language="JavaScript">
      function setTF(fObj,vType)
      {
        fObj.style.visibility = vType;
      };
  
      document.getElementById("point").onclick = function() {
        document.getElementById("point-text").innerHTML = "?????????????????????,??????????????????????????????<br>????????????????????????????????????Pb<span class=ion>2+</span>??????????????????????????????";
        
      };

      document.getElementById("check").onclick = function() {
        document.getElementById("check-text").innerHTML = "???????????????????????????Ca Sr Ba Ra   ????????????2??????????????????";
        
      };



    

      /* document.getElementById("check").onclick = function() {
        document.getElementById("check-text").innerHTML = "???????????????????????????Ca Sr Ba Ra   ????????????2??????????????????";
        
      ;

      document.getElementById("check").onclick = function() 
        document.getElementById("check").idList.remove("check-text");
      }
*/

      /* window.addEventListener('load', function(){
        document.getElementById("check").addEventListener('click', function(){
        alert("???????????????????????????Ca Sr Ba Ra   ????????????2??????????????????");
       });
      });*/
       </script>   
</body>
</html>