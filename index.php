  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <title>Twitter API - Search  Hashtag</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  </head>

  <body>
      <div id="modal-overlay"></div>

      <div id="more-popout-overlay"></div>
  <style>
      body {
      background-image: linear-gradient(to right , #0F65A2 , #ef473a);
      }

      .searchBox {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,50%);
      background: #2f3640;
      height: 40px;
      border-radius: 40px;
      padding: 10px;

      }

      .searchBox:hover > .searchInput {
      width: 240px;
      padding: 0 6px;
      }

      .searchBox:hover > .searchButton {
      background: white;
      color : #2f3640;
      }

      .searchButton {
      color: white;
      float: right;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #2f3640;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: 0.4s;
      }

      .searchInput {
      border:none;
      background: none;
      outline:none;
      float:left;
      padding: 0;
      color: white;
      font-size: 16px;
      transition: 0.4s;
      line-height: 40px;
      width: 0px;

      }

      @mediascreen and (max-width: 620px) {
          .searchBox:hover > .searchInput {
          width: 150px;
          padding: 0 6px;
          }
          }
          .styled-select {
          border: 1px solid #ccc;
          box-sizing: border-box;
          border-radius: 3px;

          overflow: hidden;
          position: relative;
          }
          .styled-select, .styled-select select { width: 240px;}
          select:focus { outline: none; }
          .styled-select select {
          height: 34px;
          padding: 5px 0 5px 5px;
          background: transparent;
          border: none;

          /*hide default down arrow in webkit */
          -webkit-appearance: none;
          }

          @-moz-document url-prefix(){
          .styled-select select { width: 110%; }
          }

          .fa-sort-desc {
          position: absolute;
          top: 0;
          right: 12px;
          font-size: 24px;
          }

          select::-ms-expand { display: none; } /* hide default down arrow in IE10*/

          /* hack to fall back in opera */
          _:-o-prefocus, .selector {
          .styled-select { background: none; }
          }
  </style>
   <form method="POST" action="app/tweets.php">
  <div class="searchBox">
          
      <input class="searchInput" type="text" id="search" name="search" placeholder="Search">
      <button class="searchButton" > <i class="fa fa-search"> </i> </button>
       
        <div class="styled-select">
            <select name="type" id="type">
                <option value="recent">recent</option>
                <option value="mixed">mixed</option>
                <option value="popular">popular</option>
            </select>
            <span class="fa fa-sort-desc"></span>
        </div>
         </form>
  </div>