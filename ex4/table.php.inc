class table {
    var $data;
    var $header;
    var $rows;
    var $i=0;
    
      function __construct(){
    }
    
        function __construct($data){
        $this->$data = $data;
    }

  function set_header($array){
      $this->$header = $array;
  }
  
  function add_row($array){
      $this->$rows[$i] = $array;
      $this->$i =  $this->$i + 1;
  }

  function __toString(){
  echo "<tr>";
    foreach($header as $head){
      echo "<th>$head</th>";
    }
  echo "</tr>";
  $j = 0
  foreach($rows as $row[$j]){
  echo "<tr>";
     foreach($row as $element){
     echo "<td>$element</td>";
     }
  echo "</tr>";
  }
  }
  
  
}
?>
