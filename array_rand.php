 <?php
     
    $array_in = array(1,5,8,9,10,"angel","anna");
        // шукаємо елемент "angel"
    $search_element = "angel";
    search($array_in, $search_element);
        
    function search($array_in, $search_element){
      if(!empty($array_in)) {
        $rand_key = array_rand($array_in);
        $count = 1;
     
     
        while($array_in[$rand_key] !== $search_element) {
          $count++;
          $rand_key = array_rand($array_in);
          if($count > (count($array_in) * 1000)) {
			$rand_key = NULL;
            break;
          }
        }
        if($rand_key !== NULL){
          echo "Шуканий елемент $search_element знайдено під ключем $rand_key за $count ітерацій<br>";
        } else {
          echo "Шуканий елемент не знайдено<br>";
        }
      } else {
        echo "Шуканий елемент не встигли знайти за $count ітерацій";
      }
    }