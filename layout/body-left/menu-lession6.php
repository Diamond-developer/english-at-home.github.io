<?php
if (isset($_GET['directional'])) { $directional=$_GET['directional'];
}else{ 
  $directional="";
    }

  switch ($directional) {
    case "lession6-day36":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 06 - Food
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession6-day37":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 06 - Food
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession6-day38":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 06 - Food
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession6-day39":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 06 - Food
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession6-day40":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 06 - Food
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession6-day41":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 06 - Food
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession6-day42":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 06 - Food
        </h3>
      </div>
      <div class='panel-body'>";
      break;
    
    default:
      echo "<div class='panel panel-warning autocollapse'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 06 - Food
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  }

      //Day 1
      if ($directional=="lession6-day36") { 
        echo "<a href='index.php?directional=lession6-day36'>
          <div class='alert alert-info' role='alert'>
          Ngày 36 - Nghe ngấm</div>
        </a>"; 
      } else { 
        echo "<a href='index.php?directional=lession6-day36'>
          <div class='alert alert-danger' role='alert'>
            Ngày 36 - Nghe ngấm</div>
        </a>";
      } 
      //Day 5
      if ($directional=="lession6-day37") {
        echo "<a href='index.php?directional=lession6-day37'>
          <div class='alert alert-info' role='alert'>Ngày 37 - Nói đuổi</div>
        </a>";
      } else {
          echo "<a href='index.php?directional=lession6-day37'>
          <div class='alert alert-danger' role='alert'>Ngày 37 - Nói đuổi</div>
        </a>";
      }
      //Day 3
      if ($directional=="lession6-day38") {
        echo "<a href='index.php?directional=lession6-day38'>
        <div class='alert alert-info' role='alert'>Ngày 38 - Phản xạ đa chiều - I Have a Bit of a Sweet Tooth</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession6-day38'>
          <div class='alert alert-danger' role='alert'>Ngày 38 - Phản xạ đa chiều - I Have a Bit of a Sweet Tooth</div>
        </a>";
      }
      //Day 4
      if ($directional=="lession6-day39") {
        echo "<a href='index.php?directional=lession6-day39'>
        <div class='alert alert-info' role='alert'>Ngày 39 - Phản xạ đa chiều - Home Cooking</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession6-day39'>
          <div class='alert alert-danger' role='alert'>Ngày 39 - Phản xạ đa chiều - Home Cooking</div>
        </a>";
      }
      //Day 5
      if ($directional=="lession6-day40") {
        echo "<a href='index.php?directional=lession6-day40'>
        <div class='alert alert-info' role='alert'>Ngày 40 - Phản xạ đa chiều - Easy as Pie</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession6-day40'>
          <div class='alert alert-danger' role='alert'>Ngày 40 - Phản xạ đa chiều - Easy as Pie</div>
        </a>";
      }
      //Day 6
      if ($directional=="lession6-day41") {
        echo "<a href='index.php?directional=lession6-day41'>
        <div class='alert alert-info' role='alert'>Ngày 41 - Thử thách</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession6-day41'>
          <div class='alert alert-danger' role='alert'>Ngày 41 - Thử thách</div>
        </a>";
      }
      //Day 7
      if ($directional=="lession6-day42") {
        echo "<a href='index.php?directional=lession6-day42'>
        <div class='alert alert-info' role='alert'>Assessment - Lesson 01</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession6-day42'>
          <div class='alert alert-danger' role='alert'>Assessment - Lesson 01</div>
        </a>";
      }
?>