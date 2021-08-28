<?php
include_once 'imdb.class.php';
?>

<hr>



<hr>
<?php
$code = $_GET["code"];
$oIMDB = new IMDB('http://www.imdb.com/title/'.$code.'/');



if ($oIMDB->isReady) 
	
	{
		echo '<h3>اطلاعات فیلم</h3><div style="    display: flex;    flex-direction: column;    align-items: center;">';

	echo "عنوان : <input value='{$oIMDB->getTitle()}' style='width:80%;'/><br/>";
    echo "ادرس : <input value='{$oIMDB->getUrl()}' style='width:80%;'/><br/>";
	echo "امتیاز imdb : <input value='{$oIMDB->getRating()}' style='width:80%;'/><br/>";
	echo "امتیاز metacritic : <input value='{$oIMDB->getMetaScore()}' style='width:80%;'/><br/>";
	echo "مدت زمان : <input value='{$oIMDB->getRuntime()}' style='width:80%;'/><br/>";
	echo "کشور سازنده : <input value='{$oIMDB->getCountry()}' style='width:80%;'/><br/>";
	echo "کارگردان : <input value='{$oIMDB->getDirector()}' style='width:80%;'/><br/>";
	echo "نویسندگان : <input value='{$oIMDB->getWriter()}' style='width:80%;'/><br/>";
	echo "شرکت های سازنده : <input value='{$oIMDB->getCompany()}' style='width:80%;'/><br/>";
	echo "موسیقی : <input value='{$oIMDB->getMusic()}' style='width:80%;'/><br/>";
	echo "رده بندی سنی : <input value='{$oIMDB->getMpaa()}' style='width:80%;'/><br/>";
	echo "سال انتشار : <input value='{$oIMDB->getYear()}' style='width:80%;'/><br/>";
	echo "زبان : <input value='{$oIMDB->getLanguage()}' style='width:80%;'/><br/>";
  	echo "خلاصه : <textarea  style='width:80%;'>{$oIMDB->getPlot()}</textarea><br/>";
    echo "نوع رسانه : <input value='{$oIMDB->getType()}' style='width:80%;'/><br/>";
    echo "ژانر : <input value='{$oIMDB->getGenre()}' style='width:80%;'/><br/>";
	echo "بودجه : <input value='{$oIMDB->getBudget()}' style='width:80%;'/><br/>";
	echo "جوایز : <input value='{$oIMDB->getAwards()}' style='width:80%;'/><br/></div>";
echo '<h3>پوستر و بازیگران</h3>';
			echo '<div style="padding: 5px;   margin-left: auto;   margin-right: auto;   font-family: arial;   border: 2px dashed green;   width: 50%; text-align: center; display: flex;align-items: center;flex-direction: row;">';
			
  echo "<img src='{$oIMDB->getPoster('small', false)}' style=' margin-left: auto;   margin-right: auto;width:50%;height:500px;'/>" ;
			echo '</div>';

   
		echo '<div style="padding: 5px;   margin-left: auto;   margin-right: auto;   font-family: arial;   border: 2px dashed green;   width: 50%; text-align: center; display: flex;align-items: center;flex-direction: row;">';
			
			
			   $castImages = $oIMDB->getCastImages(5, false, 'small');
    foreach (explode(' / ', $oIMDB->getCast(5, false)) as $name) {
        echo '<div style="padding:10px;"><img src="' . $castImages[$name] . '" alt="' . $name . '"> | ' . $name . '</div>';
    }
			echo '</div>';

	
} else {
    echo '404';
}
?>

