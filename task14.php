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
          position: relative;
          float: left;
          min-width: 50px;
          max-width: 60%;
          max-height: 50%;
          min-height: 50px;
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
        #close{
          position: absolute;
          right: -130px;
        }
        .head{
          float: left;
          widows: 100%;
          max-height: 50%;
          overflow: hidden;
        }
        .fotter_alert{
          width: 100%;
          float: left;
          position: relative;
          top:-40px;
        }
   </style>

</head>
<body>

  <a href="#show" id="show"><button id="btnOptn">Открыть модальное окно</button></a>
  <div class="page" >
    <div class="alert">
      <div class="head">
         <span>Теуст - какой-то текст))Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation t labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure a sint. Est corporis incidunt possimus eligendi reiciendis tenetur, hic totam nesciunt aspernatur temporibus eum, ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure a sint. Est corporis incidunt possimus eligendi reiciendis tenetur, hic totam nesciunt aspernatur temporibus eum, rem eos dignissimos quia?</span>
      </div>
     <div class="fotter_alert">
       <a href="#cloce" id="cloce"><button id="btnClose">закрыть</button></a>
     </div>
    </div>
  </div>
  
    <br><br>
</body>
</html>