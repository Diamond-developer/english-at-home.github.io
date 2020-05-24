<?php
if (isset($_GET['directional'])) { $directional=$_GET['directional'];
}else{ 
  $directional="";
    }

  switch ($directional) {
    case "lession10-day64":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>s
          Lesson 10 - Work Place
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession10-day65":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 10 - Work Place
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession10-day66":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 10 - Work Place
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession10-day67":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 10 - Work Place
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession10-day68":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 10 - Work Place
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession10-day69":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 10 - Work Place
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession10-day70":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 10 - Work Place
        </h3>
      </div>
      <div class='panel-body'>";
      break;
    
    default:
      echo "<div class='panel panel-warning autocollapse'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 10 - Work Place
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  }

      //Day
      if ($directional=="lession10-day64") { 
        echo "<a href='index.php?directional=lession10-day64'>
          <div class='alert alert-info' role='alert'>
          Ngày 64 - Nghe ngấm</div>
        </a>"; 
      } else { 
        echo "<a href='index.php?directional=lession10-day64'>
          <div class='alert alert-danger' role='alert'>
            Ngày 64 - Nghe ngấm</div>
        </a>";
      } 
      //Day
      if ($directional=="lession10-day65") {
        echo "<a href='index.php?directional=lession10-day65'>
          <div class='alert alert-info' role='alert'>Ngày 65 - Nói đuổi</div>
        </a>";
      } else {
          echo "<a href='index.php?directional=lession10-day65'>
          <div class='alert alert-danger' role='alert'>Ngày 65 - Nói đuổi</div>
        </a>";
      }
      //Day
      if ($directional=="lession10-day66") {
        echo "<a href='index.php?directional=lession10-day66'>
        <div class='alert alert-info' role='alert'>Ngày 66 - Phản xạ đa chiều - I Have a Bit of a Sweet Tooth</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession10-day66'>
          <div class='alert alert-danger' role='alert'>Ngày 66 - Phản xạ đa chiều - I Have a Bit of a Sweet Tooth</div>
        </a>";
      }
      //Day
      if ($directional=="lession10-day67") {
        echo "<a href='index.php?directional=lession10-day67'>
        <div class='alert alert-info' role='alert'>Ngày 67 - Phản xạ đa chiều - Home Cooking</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession10-day67'>
          <div class='alert alert-danger' role='alert'>Ngày 67 - Phản xạ đa chiều - Home Cooking</div>
        </a>";
      }
      //Day
      if ($directional=="lession10-day68") {
        echo "<a href='index.php?directional=lession10-day68'>
        <div class='alert alert-info' role='alert'>Ngày 68 - Phản xạ đa chiều - Easy as Pie</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession10-day68'>
          <div class='alert alert-danger' role='alert'>Ngày 68 - Phản xạ đa chiều - Easy as Pie</div>
        </a>";
      }
      //Day0
      if ($directional=="lession10-day69") {
        echo "<a href='index.php?directional=lession10-day69'>
        <div class='alert alert-info' role='alert'>Ngày 69 - Thử thách</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession10-day69'>
          <div class='alert alert-danger' role='alert'>Ngày 69 - Thử thách</div>
        </a>";
      }
      //Day
      if ($directional=="lession10-day70") {
        echo "<a href='index.php?directional=lession10-day70'>
        <div class='alert alert-info' role='alert'>Assessment - Lesson 10</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession10-day70'>
          <div class='alert alert-danger' role='alert'>Assessment - Lesson 10</div>
        </a>";
      }
?>