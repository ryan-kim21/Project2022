<!DOCTPYE>
<html>
 <head><meta charset="utf-8"></head>
  <body>

  <h1>Login page</h1>
  <button type="button" onclick="location.href='https://ap-northeast-2.quicksight.aws.amazon.com/sn/dashboards/754e45f0-475c-4116-8bb3-ec75614cc5cf';"> 접속현황 </button>
<?php

   $hostname=$_SERVER["HTTP_HOST"]; //도메인명(호스트)명을 구합니다.
   $uri= $_SERVER['REQUEST_URI']; //uri를 구합니다.
   $query_string=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.
   $phpself=$_SERVER["PHP_SELF"]; //현재 실행되고 있는 페이지의 url을 구합니다.
   $basename=basename($_SERVER["PHP_SELF"]); //현재 실행되고 있는 페이지명만 구합니다.

   echo$hostname."<br>";
   echo$uri."<br>";
   echo$query_string."<br>";
   echo$phpself."<br>";
   echo$basename."<br>";


   $ip_address;
   $ip_address = $_SERVER["REMOTE_ADDR"];
   echo '$ip_address : '.$ip_address.'<br>';
   //test commit12
?>



 <button type="button" onclick="location.href='https://project2022.auth.ap-northeast-2.amazoncognito.com/signup?response_type=token&client_id=7u53bj0p0885gr2t7khj7fmmsk&redirect_uri=https://project2022-test.tk/rds.php' "> 로그인 </button>
</body>
</html>