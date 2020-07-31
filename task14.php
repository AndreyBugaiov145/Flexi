<!DOCTYPE html>
<head>

   <style>

    div.page{
        display:none;
        
        position: fixed;
        top:0;
        right: 0;
        left: 0;
        bottom: 0;
        background-color: rgba(153, 51, 153,0.8);
        align-items: center;
        justify-content:center;
      }
      div.alert{
        width: 200px;
        height: 150px;
        background-color: silver;
        border-radius: 15px;
        padding: 15px;
        font-size: 1.4em;

      }
      #btnOptn{
        margin-left: 25%;
        margin-top: 25%;
        padding: 10px;
        background-color: green;
        box-shadow: 3px 4px 15px;
        border-radius:  15px;
      }
      #btnClose{
        position: relative;
        top: 45px;
        padding: 10px;
        background-color: red;
        box-shadow: 3px 4px 15px;
        border-radius:  15px;
      }
      button{
        outline:none;
      }
      :target~div{
        display: flex;
      } 
   </style>

</head>
<body>

  <a href="#show" id="show"><button id="btnOptn">Открыть модальное окно</button></a>
  <div class="page" >
    <div class="alert">
      <span>Теуст - какой-то текст))</span>
      <a href="#cloce" id="cloce"><button id="btnClose">закрыть</button></a>
    </div>
  </div>
  
    <br><br>
</body>
</html>