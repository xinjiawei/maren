<?php include "anti_qq.php";?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">
    <title>脏.话生成器-分级版-demo</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
      //var cata = "common";
      function changeFlag() {
        if (flag == 0) {
          var cata = "common";
          document.querySelector(".copy-status").className = "copy-status flag0";
          showtimeout = setTimeout(function () {
            document.querySelector(".copy-status").className = "copy-status";
          }, 15000);
        } else if (flag == 1) {
          var cata = "yang";
          document.querySelector(".copy-status").className = "copy-status flag1";
          showtimeout = setTimeout(function () {
          document.querySelector(".copy-status").className = "copy-status";
          }, 15000);
        } else if (flag == 2) {
          var cata = "qiu";
          document.querySelector(".copy-status").className = "copy-status flag2";
          showtimeout = setTimeout(function () {
          document.querySelector(".copy-status").className = "copy-status";
          }, 15000);
        } else {
          console.log("flag err");
        }
        console.log(cata);
        $.get(
          "maren.php",
          {
            catalog: cata,
            format: "json",
          },
          function (data, status) {
            console.log(data);
            document.getElementById("area1").innerText = data.text;
          }
        );
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/xe-clipboard" async></script>
    <style type="text/css">
      .copy-status {
        height: 60px;
        text-align: center;
        font-size: 20px;
        font-weight: 700;
      }
      .copy-status > span {
        display: none;
      }
      .copy-status.success {
        color: green;
      }
      .copy-status.success > .success {
        display: block;
      }
      .copy-status.flag0 {
        color: green;
      }
      .copy-status.flag0 > .flag0 {
        display: block;
      }
      .copy-status.flag1 {
        color: green;
      }
      .copy-status.flag1 > .flag1 {
        display: block;
      }
      .copy-status.flag2 {
        color: green;
      }
      .copy-status.flag2 > .flag2 {
        display: block;
      }
      .copy-status.error {
        color: red;
      }
      .copy-status.error > .error {
        display: block;
      }
    </style>
  </head>
  <body>
    <!--<button id="reflush">刷新</button>-->
    <button name="gua" onclick="flag=0;changeFlag()">普通人级</button>
    <button name="gua" onclick="flag=1;changeFlag()">庆哲级</button>
    <button name="gua" onclick="flag=2;changeFlag()">若隆级</button>

    <div>
      <div class="copy-status">
        <span class="success">复制成功</span>
        <span class="flag0">普通战力</span>
        <span class="flag1">庆哲级战力</span>
        <span class="flag2">若隆级战力</span>
        <span class="error">The browser is not supported.</span>
      </div>

      <div id="area1">wow</div>
      <!--
      <input type="text" value="复制到内容222">-->
      <button class="btn2">复制</button>
    </div>
    <script>
      (function () {
        var showtimeout;
        function copyEvent(text) {
          clearTimeout(showtimeout);
          if (XEClipboard.copy(text)) {
            document.querySelector(".copy-status").className =
              "copy-status success";
          } else {
            document.querySelector(".copy-status").className =
              "copy-status error";
          }
          showtimeout = setTimeout(function () {
            document.querySelector(".copy-status").className = "copy-status";
          }, 1500);
        }
        document
          .querySelector(".btn2")
          .addEventListener("click", function (evnt) {
            let inpElem = evnt.target.previousElementSibling;
            copyEvent(inpElem.innerHTML);
          });
      })();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/xe-utils" async></script>
    <script src="https://cdn.jsdelivr.net/npm/xe-ajax" async></script>
  </body>
</html>
