<?php
if (isset($_GET['directional'])) { $directional=$_GET['directional'];
}else{ 
  $directional="";
    }

  switch ($directional) {
    case "lession8-day50":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 08 - Travel
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession8-day51":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 08 - Travel
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession8-day52":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 08 - Travel
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession8-day53":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 08 - Travel
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession8-day54":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 08 - Travel
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession8-day55":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 08 - Travel
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession8-day56":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 08 - Travel
        </h3>
      </div>
      <div class='panel-body'>";
      break;
    
    default:
      echo "<div class='panel panel-danger autocollapse'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 08 - Travel
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  }

      //Day
      if ($directional=="lession8-day50") { 
        echo "<a href='index.php?directional=lession8-day50'>
          <div class='alert alert-info' role='alert'>
          Ngày 50 - Nghe ngấm</div>
        </a>"; 
      } else { 
        echo "<a href='index.php?directional=lession8-day50'>
          <div class='alert alert-danger' role='alert'>
            Ngày 50 - Nghe ngấm</div>
        </a>";
      } 
      //Day
      if ($directional=="lession8-day51") {
        echo "<a href='index.php?directional=lession8-day51'>
          <div class='alert alert-info' role='alert'>Ngày 51 - Nói đuổi</div>
        </a>";
      } else {
          echo "<a href='index.php?directional=lession8-day51'>
          <div class='alert alert-danger' role='alert'>Ngày 51 - Nói đuổi</div>
        </a>";
      }
      //Day
      if ($directional=="lession8-day52") {
        echo "<a href='index.php?directional=lession8-day52'>
        <div class='alert alert-info' role='alert'>Ngày 52 - Phản xạ đa chiều - The World Tour</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession8-day52'>
          <div class='alert alert-danger' role='alert'>Ngày 52 - Phản xạ đa chiều - The World Tour</div>
        </a>";
      }
      //Day
      if ($directional=="lession8-day53") {
        echo "<a href='index.php?directional=lession8-day53'>
        <div class='alert alert-info' role='alert'>Ngày 53 - Phản xạ đa chiều - Can I Upgrade, Please!</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession8-day53'>
          <div class='alert alert-danger' role='alert'>Ngày 53 - Phản xạ đa chiều - Can I Upgrade, Please!</div>
        </a>";
      }
      //Day
      if ($directional=="lession8-day54") {
        echo "<a href='index.php?directional=lession8-day54'>
        <div class='alert alert-info' role='alert'>Ngày 54 - Phản xạ đa chiều - A Tropical Hideaway</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession8-day54'>
          <div class='alert alert-danger' role='alert'>Ngày 54 - Phản xạ đa chiều - A Tropical Hideaway</div>
        </a>";
      }
      //Day
      if ($directional=="lession8-day55") {
        echo "<a href='index.php?directional=lession8-day55'>
        <div class='alert alert-info' role='alert'>Ngày 55 - Thử thách</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession8-day55'>
          <div class='alert alert-danger' role='alert'>Ngày 55 - Thử thách</div>
        </a>";
      }
      //Day
      if ($directional=="lession8-day56") {
        echo "<a href='index.php?directional=lession8-day56'>
        <div class='alert alert-info' role='alert'>Assessment - Lesson 08</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession8-day56'>
          <div class='alert alert-danger' role='alert'>Assessment - Lesson 08</div>
        </a>";
      }
?>