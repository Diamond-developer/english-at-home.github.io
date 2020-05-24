<?php
if (isset($_GET['directional'])) { $directional=$_GET['directional'];
}else{ 
  $directional="";
    }

  switch ($directional) {
    case "lession9-day57":
      echo "<div class='panel panel-success'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 09 - Emotion
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession9-day58":
      echo "<div class='panel panel-success'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 09 - Emotion
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession9-day59":
      echo "<div class='panel panel-success'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 09 - Emotion
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession9-day60":
      echo "<div class='panel panel-success'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 09 - Emotion
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession9-day61":
      echo "<div class='panel panel-success'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 09 - Emotion
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession9-day62":
      echo "<div class='panel panel-success'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 09 - Emotion
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession9-day63":
      echo "<div class='panel panel-success'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 09 - Emotion
        </h3>
      </div>
      <div class='panel-body'>";
      break;
    
    default:
      echo "<div class='panel panel-success autocollapse'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 09 - Emotion
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  }

      //Day 1
      if ($directional=="lession9-day57") { 
        echo "<a href='index.php?directional=lession9-day57'>
          <div class='alert alert-info' role='alert'>
          Ngày 57 - Nghe ngấm</div>
        </a>"; 
      } else { 
        echo "<a href='index.php?directional=lession9-day57'>
          <div class='alert alert-danger' role='alert'>
            Ngày 57 - Nghe ngấm</div>
        </a>";
      } 
      //Day 5
      if ($directional=="lession9-day58") {
        echo "<a href='index.php?directional=lession9-day58'>
          <div class='alert alert-info' role='alert'>Ngày 58 - Nói đuổi</div>
        </a>";
      } else {
          echo "<a href='index.php?directional=lession9-day58'>
          <div class='alert alert-danger' role='alert'>Ngày 58 - Nói đuổi</div>
        </a>";
      }
      //Day 3
      if ($directional=="lession9-day59") {
        echo "<a href='index.php?directional=lession9-day59'>
        <div class='alert alert-info' role='alert'>Ngày 59 - Phản xạ đa chiều - Woe Is Me!</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession9-day59'>
          <div class='alert alert-danger' role='alert'>Ngày 59 - Phản xạ đa chiều - Woe Is Me!</div>
        </a>";
      }
      //Day 4
      if ($directional=="lession9-day60") {
        echo "<a href='index.php?directional=lession9-day60'>
        <div class='alert alert-info' role='alert'>Ngày 60 - Phản xạ đa chiều - Rock n' Roll n' Feelings</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession9-day60'>
          <div class='alert alert-danger' role='alert'>Ngày 60 - Phản xạ đa chiều - Rock n' Roll n' Feelings</div>
        </a>";
      }
      //Day 5
      if ($directional=="lession9-day61") {
        echo "<a href='index.php?directional=lession9-day61'>
        <div class='alert alert-info' role='alert'>Ngày 61 - Phản xạ đa chiều - Social Media Depression</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession9-day61'>
          <div class='alert alert-danger' role='alert'>Ngày 61 - Phản xạ đa chiều - Social Media Depression</div>
        </a>";
      }
      //Day 9
      if ($directional=="lession9-day62") {
        echo "<a href='index.php?directional=lession9-day62'>
        <div class='alert alert-info' role='alert'>Ngày 62 - Thử thách</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession9-day62'>
          <div class='alert alert-danger' role='alert'>Ngày 62 - Thử thách</div>
        </a>";
      }
      //Day 7
      if ($directional=="lession9-day63") {
        echo "<a href='index.php?directional=lession9-day63'>
        <div class='alert alert-info' role='alert'>Assessment - Lesson 09</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession9-day63'>
          <div class='alert alert-danger' role='alert'>Assessment - Lesson 09</div>
        </a>";
      }
?>