<?php
if (isset($_GET['directional'])) { $directional=$_GET['directional'];
}else{ 
  $directional="";
    }

  switch ($directional) {
    case "lession7-day43":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 07 - Guide
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession7-day44":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 07 - Guide
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession7-day45":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 07 - Guide
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession7-day46":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 07 - Guide
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession7-day47":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 07 - Guide
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession7-day48":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 07 - Guide
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession7-day49":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 07 - Guide
        </h3>
      </div>
      <div class='panel-body'>";
      break;
    
    default:
      echo "<div class='panel panel-info autocollapse'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 07 - Guide
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  }

      //Day 43
      if ($directional=="lession7-day43") { 
        echo "<a href='index.php?directional=lession7-day43'>
          <div class='alert alert-info' role='alert'>
          Ngày 43 - Nghe ngấm</div>
        </a>"; 
      } else { 
        echo "<a href='index.php?directional=lession7-day43'>
          <div class='alert alert-danger' role='alert'>
            Ngày 43 - Nghe ngấm</div>
        </a>";
      } 
      //Day 44
      if ($directional=="lession7-day44") {
        echo "<a href='index.php?directional=lession7-day44'>
          <div class='alert alert-info' role='alert'>Ngày 44 - Nói đuổi</div>
        </a>";
      } else {
          echo "<a href='index.php?directional=lession7-day44'>
          <div class='alert alert-danger' role='alert'>Ngày 44 - Nói đuổi</div>
        </a>";
      }
      //Day 45
      if ($directional=="lession7-day45") {
        echo "<a href='index.php?directional=lession7-day45'>
        <div class='alert alert-info' role='alert'>Ngày 45 - Phản xạ đa chiều - Wrong Way!</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession7-day45'>
          <div class='alert alert-danger' role='alert'>Ngày 45 - Phản xạ đa chiều - Wrong Way!</div>
        </a>";
      }
      //Day 46
      if ($directional=="lession7-day46") {
        echo "<a href='index.php?directional=lession7-day46'>
        <div class='alert alert-info' role='alert'>Ngày 46 - Phản xạ đa chiều - Family Trip</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession7-day46'>
          <div class='alert alert-danger' role='alert'>Ngày 46 - Phản xạ đa chiều - Family Trip</div>
        </a>";
      }
      //Day 47
      if ($directional=="lession7-day47") {
        echo "<a href='index.php?directional=lession7-day47'>
        <div class='alert alert-info' role='alert'>Ngày 47 - Phản xạ đa chiều - Rest Stop</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession7-day47'>
          <div class='alert alert-danger' role='alert'>Ngày 47 - Phản xạ đa chiều - Rest Stop</div>
        </a>";
      }
      //Day 48
      if ($directional=="lession7-day48") {
        echo "<a href='index.php?directional=lession7-day48'>
        <div class='alert alert-info' role='alert'>Ngày 48 - Thử thách</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession7-day48'>
          <div class='alert alert-danger' role='alert'>Ngày 48 - Thử thách</div>
        </a>";
      }
      //Day 49
      if ($directional=="lession7-day49") {
        echo "<a href='index.php?directional=lession7-day49'>
        <div class='alert alert-info' role='alert'>Assessment - Lesson 7</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession7-day49'>
          <div class='alert alert-danger' role='alert'>Assessment - Lesson 7</div>
        </a>";
      }
?>