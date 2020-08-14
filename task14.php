<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
          max-width: 60%; 
          background-color: silver;
          border-radius: 15px;
          padding: 15px;
          font-size: 1.4em;

        }
        .open{
          position: relative;
          margin: 40%;
        }

        #alert{
          display: none;
        }

        #alert:checked~div{
          display: flex;
        } 

        .head{
          float: left;
          max-height: 400px;
          overflow: auto;
        }
        .fotter_alert{
          float: left;
        }
   </style>

</head>
<body>
  <label for="alert" class="btn btn-primary open">Открыть модальное окно</label>
  <input type="checkbox" id="alert">
  <div class="page" >
    <div class="alert">
      <div class="head">
         <span>Теуст - какой-то текст))Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation t laborlaboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure a sint. Est corporis incidunt possimus eligendi reiciendis tenetur, hic totam nesciunt aspernatur temporibus eum, ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irureirure a sint. Est corporis incidunt possimus eligendi reiciendis tenetur, hic totam nesciunt aspernatur temporibus eum, rem eos dignissimos quiae et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure a sint. Est corporis incidunt possimus eligendi reiciendis tenetur, hic totam nesciunt aspernatur temporibus eum, ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure a sint. Est corpori a sint. Est corporis incidunt possimus eligendi reiciendis tenetur, hic totam nesciunt aspernatur temporibus eum, rem eos dignissimos quialaboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure a sint. Est corporis incidunt possimus eligendi reiciendis tenetur, hic totam nesciunt aspernatur temporibus eum, ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure a sint. Est corporis incidunt possimus eligendi reiciendis tenetur, hic totam nesciunt aspernatur temporibus eum, rem eos dignissimos quiae et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure a sint. Est corporis incidunt possimus eligendi reiciendis tenetur, hic totam nesciunt aspernatur temporibus eum, ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure a sint. Est corporis incidunt possimus eligendi reiciendis tenetur, hic totam nesciunt aspernatur temporibus eum, rem eos dignissimos quia?</span>
      </div>
     <div class="fotter_alert">
       <label for="alert" class="btn btn-secondary">Закрыть</label>
     </div>
    </div>
  </div>
</body>
</html>