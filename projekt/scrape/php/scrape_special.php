<?php
require_once('simple_html_dom.php');

$links = array("http://www.specialtyproduce.com/produce/Akebi_Fruit_9541.php",
"http://www.specialtyproduce.com/produce/Black_Twig_Apples_11313.php",
"http://www.specialtyproduce.com/produce/Criterion_Apple_11348.php",
"http://www.specialtyproduce.com/produce/Striped_Delicious_Apples_11192.php",
"http://www.specialtyproduce.com/produce/Double_Red_Apples_11284.php",
"http://www.specialtyproduce.com/produce/Freyberg_Apples_11312.php",
"http://www.specialtyproduce.com/produce/Early_Fuji_Apples_11387.php",
"http://www.specialtyproduce.com/produce/GoldRush_Apple_11346.php",
"http://www.specialtyproduce.com/produce/Lady_Williams_Apples_11445.php",
"http://www.specialtyproduce.com/produce/Liberty_Apple_9628.php",
"http://www.specialtyproduce.com/produce/Mother_Apple_11285.php",
"http://www.specialtyproduce.com/produce/Orin_Apples_869.php",
"http://www.specialtyproduce.com/produce/Sweet_Orin_Apple_9635.php",
"http://www.specialtyproduce.com/produce/Red_Gold_Apples_11283.php",
"http://www.specialtyproduce.com/produce/Sommerfeld_Apples_9629.php",
"http://www.specialtyproduce.com/produce/Swiss_Gourmet_Apples_9630.php",
"http://www.specialtyproduce.com/produce/Tydeman_Apples_11191.php",
"http://www.specialtyproduce.com/produce/Apricots_5194.php",
"http://www.specialtyproduce.com/produce/Blenheim_Apricots_4237.php",
"http://www.specialtyproduce.com/produce/Blenheim_Apricots_10834.php",
"http://www.specialtyproduce.com/produce/Bonny_Royal_Apricots_10861.php",
"http://www.specialtyproduce.com/produce/CotnCandy_Apricots_8986.php",
"http://www.specialtyproduce.com/produce/Modesto_Apricots_5173.php",
"http://www.specialtyproduce.com/produce/Moorpark_Apricots_10862.php",
"http://www.specialtyproduce.com/produce/White_Apricots_10863.php",
"http://www.specialtyproduce.com/produce/Bacon_Avocado_10023.php",
"http://www.specialtyproduce.com/produce/Gwen_Avocados_10956.php",
"http://www.specialtyproduce.com/produce/Nimlioh_Avocados_11347.php",
"http://www.specialtyproduce.com/produce/Puebla_Avocados_10594.php",
"http://www.specialtyproduce.com/produce/White_Mulberries_8902.php",
"http://www.specialtyproduce.com/produce/Orange_Raspberries_5343.php",
"http://www.specialtyproduce.com/produce/Bilva_Fruit_10639.php",
"http://www.specialtyproduce.com/produce/Blue_Crown_Fruit_9582.php",
"http://www.specialtyproduce.com/produce/Breadfruit_8746.php",
"http://www.specialtyproduce.com/produce/Cane_Fruit_10565.php",
"http://www.specialtyproduce.com/produce/Carambola_11453.php",
"http://www.specialtyproduce.com/produce/Capulin_Cherries_4365.php",
"http://www.specialtyproduce.com/produce/Cherums_9107.php",
"http://www.specialtyproduce.com/produce/Dragon_Fruit_6647.php",
"http://www.specialtyproduce.com/produce/Dragon_Fruit_1439.php",
"http://www.specialtyproduce.com/produce/Pitaya_4688.php",
"http://www.specialtyproduce.com/produce/Egg_Fruit_12312.php",
"http://www.specialtyproduce.com/produce/MicroFlowers_Blend_3839.php",
"http://www.specialtyproduce.com/produce/Orchid_MicroFlowers_3945.php",
"http://www.specialtyproduce.com/produce/Passionfruit_Flowers_12937.php",
"http://www.specialtyproduce.com/produce/Barrel_Cactus_Fruit_12670.php",
"http://www.specialtyproduce.com/produce/Peruvian_Apple_Cactus_Fruit_12971.php",
"http://www.specialtyproduce.com/produce/Golden_Torch_Cactus_Fruit_12494.php",
"http://www.specialtyproduce.com/produce/Foraged_Red_Prickly_Pear_Cactus_Fruit_9391.php",
"http://www.specialtyproduce.com/produce/Micro_Hearts_on_Fire_4067.php",
"http://www.specialtyproduce.com/produce/Micro_Gourmet_Lettuce_Mix_3211.php",
"http://www.specialtyproduce.com/produce/Micro_Mix_Mint_4488.php",
"http://www.specialtyproduce.com/produce/Micro_Sweet_Spice_Mix_3220.php",
"http://www.specialtyproduce.com/produce/Micro_Italian_Parsley_3176.php",
"http://www.specialtyproduce.com/produce/Micro_Verdolaga_3206.php",
"http://www.specialtyproduce.com/produce/MiniCrown_Tom_Thumb_3832.php",
"http://www.specialtyproduce.com/produce/Petite_Lemon_Grass_2736.php",
"http://www.specialtyproduce.com/produce/Petite_Freckles_Lettuce_2999.php",
"http://www.specialtyproduce.com/produce/Petite_Mint_Lavender_3816.php",
"http://www.specialtyproduce.com/produce/Petite_Mix_Mint_2673.php",
"http://www.specialtyproduce.com/produce/Petite_Pea_Greens_3030.php",
"http://www.specialtyproduce.com/produce/Petite_Sorrel_2196.php",
"http://www.specialtyproduce.com/produce/Che_Fruit_11146.php",
"http://www.specialtyproduce.com/produce/Gac_Fruit_12844.php",
"http://www.specialtyproduce.com/produce/Grapefruit_12317.php",
"http://www.specialtyproduce.com/produce/Cocktail_Grapefruit_4861.php",
"http://www.specialtyproduce.com/produce/MeloGold_Grapefruit_5847.php",
"http://www.specialtyproduce.com/produce/Melogold_Grapefruit_7603.php",
"http://www.specialtyproduce.com/produce/Oro_Blanco_Grapefruit_7396.php",
"http://www.specialtyproduce.com/produce/Oro_Blanco_Grapefruit_60.php",
"http://www.specialtyproduce.com/produce/Oro_Blanco_Grapefruit_3987.php",
"http://www.specialtyproduce.com/produce/Pomelo_Grapefruit_5841.php",
"http://www.specialtyproduce.com/produce/Rex_Union_Grapefruit_10122.php",
"http://www.specialtyproduce.com/produce/Star_Ruby_Grapefruit_7265.php",
"http://www.specialtyproduce.com/produce/Star_Ruby_Grapefruit_7115.php",
"http://www.specialtyproduce.com/produce/Star_Ruby_Grapefruit_4246.php",
"http://www.specialtyproduce.com/produce/Star_Ruby_Grapefruit_5169.php",
"http://www.specialtyproduce.com/produce/White_Grapefruit_13317.php",
"http://www.specialtyproduce.com/produce/Brazilian_Guavas_10050.php",
"http://www.specialtyproduce.com/produce/Lemon_Guavas_9488.php",
"http://www.specialtyproduce.com/produce/Pineapple_Guavas_9508.php",
"http://www.specialtyproduce.com/produce/Lemon_Verbena_3171.php",
"http://www.specialtyproduce.com/produce/Mint_308.php",
"http://www.specialtyproduce.com/produce/Pineapple_Mint_Tops_1372.php",
"http://www.specialtyproduce.com/produce/Peppermint_3089.php",
"http://www.specialtyproduce.com/produce/Pineapple_Sage_1160.php",
"http://www.specialtyproduce.com/produce/Jack_Fruit_693.php",
"http://www.specialtyproduce.com/produce/Jelly_Palm_Fruit_10845.php",
"http://www.specialtyproduce.com/produce/Baby_Red_Kiwi_11315.php",
"http://www.specialtyproduce.com/produce/Kraton_Fruit_12843.php",
"http://www.specialtyproduce.com/produce/Passion_Fruit_Leaves_10642.php",
"http://www.specialtyproduce.com/produce/Fresh_Tea_Leaves_12027.php",
"http://www.specialtyproduce.com/produce/Lemonade_Fruit_10121.php",
"http://www.specialtyproduce.com/produce/Sweet_Lemons_10363.php",
"http://www.specialtyproduce.com/produce/Assorted_Baby_Head_Lettuce_5580.php",
"http://www.specialtyproduce.com/produce/Red_Butter_Lettuce_5707.php",
"http://www.specialtyproduce.com/produce/Mitsuba_Lettuce_5388.php",
"http://www.specialtyproduce.com/produce/Mizuna_Lettuce_5386.php",
"http://www.specialtyproduce.com/produce/Red_Oak_Lettuce_5338.php",
"http://www.specialtyproduce.com/produce/Romaine_Lettuce_4809.php",
"http://www.specialtyproduce.com/produce/Rangpur_Limes_11302.php",
"http://www.specialtyproduce.com/produce/Cavaillon_Melon_4291.php",
"http://www.specialtyproduce.com/produce/French_Kiss_Melon_4597.php",
"http://www.specialtyproduce.com/produce/Sugar_Queen_Melon_4294.php",
"http://www.specialtyproduce.com/produce/Tendral_Melon_9826.php",
"http://www.specialtyproduce.com/produce/Valencia_Melon_4332.php",
"http://www.specialtyproduce.com/produce/Orange_Watermelon_1675.php",
"http://www.specialtyproduce.com/produce/Monk_fruit_8824.php",
"http://www.specialtyproduce.com/produce/Carmen_Miranda_Nectarines_5242.php",
"http://www.specialtyproduce.com/produce/Goldmine_Nectarines_7133.php",
"http://www.specialtyproduce.com/produce/Stanwick_Nectarines_12375.php",
"http://www.specialtyproduce.com/produce/White_Nectarines_4211.php",
"http://www.specialtyproduce.com/produce/Yellow_Nectarines_4186.php",
"http://www.specialtyproduce.com/produce/Noni_Fruit_12269.php",
"http://www.specialtyproduce.com/produce/Cara_Cara_Oranges_5136.php",
"http://www.specialtyproduce.com/produce/Navel_Oranges_5137.php",
"http://www.specialtyproduce.com/produce/Valencia_Oranges_6165.php",
"http://www.specialtyproduce.com/produce/Passionfruit_341.php",
"http://www.specialtyproduce.com/produce/Banana_Passionfruit_4452.php",
"http://www.specialtyproduce.com/produce/Banana_Passionfruit_9144.php",
"http://www.specialtyproduce.com/produce/Yellow_Passionfruit_9145.php",
"http://www.specialtyproduce.com/produce/Yellow_Passionfruit_11676.php",
"http://www.specialtyproduce.com/produce/Bowen_Peaches_7135.php",
"http://www.specialtyproduce.com/produce/First_Lady_Peaches_6183.php",
"http://www.specialtyproduce.com/produce/Ghiaccio_Peaches_10986.php",
"http://www.specialtyproduce.com/produce/Indian_Blood_Peaches_7182.php",
"http://www.specialtyproduce.com/produce/Last_Chance_Peaches_9601.php",
"http://www.specialtyproduce.com/produce/Late_Harvest_Peach_5447.php",
"http://www.specialtyproduce.com/produce/OHenry_Peaches_7184.php",
"http://www.specialtyproduce.com/produce/OHenry_Peaches_7168.php",
"http://www.specialtyproduce.com/produce/Rio_Oso_Peaches_7183.php",
"http://www.specialtyproduce.com/produce/Saturn_Peaches_5241.php",
"http://www.specialtyproduce.com/produce/Snow_White_Peaches_7169.php",
"http://www.specialtyproduce.com/produce/White_Peaches_4194.php",
"http://www.specialtyproduce.com/produce/Wild_Peaches_4377.php",
"http://www.specialtyproduce.com/produce/Yellow_Peaches_4234.php",
"http://www.specialtyproduce.com/produce/Peacotums_7850.php",
"http://www.specialtyproduce.com/produce/Fuyu_Persimmons_9071.php",
"http://www.specialtyproduce.com/produce/Sharon_Fruit_2577.php",
"http://www.specialtyproduce.com/produce/Plums_4244.php",
"http://www.specialtyproduce.com/produce/Armenian_Plums_12272.php",
"http://www.specialtyproduce.com/produce/Black_Splendor_Plums_12273.php",
"http://www.specialtyproduce.com/produce/Blue_Damson_Plums_12826.php",
"http://www.specialtyproduce.com/produce/Elephant_Heart_Plums_6462.php",
"http://www.specialtyproduce.com/produce/Elephant_Heart_Plums_7722.php",
"http://www.specialtyproduce.com/produce/Golden_Plums_4347.php",
"http://www.specialtyproduce.com/produce/Greengage_Plums_5286.php",
"http://www.specialtyproduce.com/produce/Howards_Miracle_Plums_11037.php",
"http://www.specialtyproduce.com/produce/Mini_Pink_Plums_7721.php",
"http://www.specialtyproduce.com/produce/Mirabelle_de_Metz_Plums_10984.php",
"http://www.specialtyproduce.com/produce/Santa_Rosa_Plums_7754.php",
"http://www.specialtyproduce.com/produce/Satsuma_Plums_7145.php",
"http://www.specialtyproduce.com/produce/Satsuma_Plums_10993.php",
"http://www.specialtyproduce.com/produce/Wild_Plums_9000.php",
"http://www.specialtyproduce.com/produce/Yummy_Rosa_Plums_12412.php",
"http://www.specialtyproduce.com/produce/Dancing_Demon_Pluots_5197.php",
"http://www.specialtyproduce.com/produce/Flavor_Fall_Pluots_11411.php",
"http://www.specialtyproduce.com/produce/Pomelos_6706.php",
"http://www.specialtyproduce.com/produce/African_Shaddock_Pomelo_13142.php",
"http://www.specialtyproduce.com/produce/Chandler_Pomelo_11864.php",
"http://www.specialtyproduce.com/produce/Mato_Buntan_Pomelo_11989.php",
"http://www.specialtyproduce.com/produce/Reinking_Pomelo_11859.php",
"http://www.specialtyproduce.com/produce/Tahitian_Pomelo_11920.php",
"http://www.specialtyproduce.com/produce/Thong_Dee_Pomelo_11853.php",
"http://www.specialtyproduce.com/produce/Valentine_Pomelo_11809.php",
"http://www.specialtyproduce.com/produce/Red_Palm_Fruit_9147.php",
"http://www.specialtyproduce.com/produce/Shea_Fruit_12903.php",
"http://www.specialtyproduce.com/produce/Snake_Fruit_10790.php",
"http://www.specialtyproduce.com/produce/Baby_Green_Zucchini_with_Flower_4982.php",
"http://www.specialtyproduce.com/produce/Star_Fruit_2002.php",
"http://www.specialtyproduce.com/produce/Taiwanese_Star_Fruit_20022.php",
"http://www.specialtyproduce.com/produce/Pixie_Tangerines_8351.php",
"http://www.specialtyproduce.com/produce/Primavera_Tangerines_5085.php",
"http://www.specialtyproduce.com/produce/Ugli_Fruit_296.php"
);

$names = array("Akebi Fruit",
"Apple Black Twig",
"Apple Criterion",
"Apple Delicious Striped",
"Apple Double Red",
"Apple Freyberg",
"Apple Fuji Early",
"Apple GoldRush",
"Apple Lady Williams",
"Apple Liberty",
"Apple Mother",
"Apple Orin",
"Apple Orin Sweet",
"Apple Red Gold",
"Apple Sommerfeld",
"Apple Swiss Gourmet",
"Apple Tydeman",
"Apricots",
"Apricots Blenheim",
"Apricots Blenheim",
"Apricots Bonny Royal",
"Apricots Cot-n-Candy",
"Apricots Modesto",
"Apricots Moorpark",
"Apricots White",
"Avocado Bacon",
"Avocados Gwen",
"Avocados Nimlioh",
"Avocados Puebla",
"Berries Mulberry White",
"Berries Raspberry Orange",
"Bilva Fruit",
"Blue Crown Fruit",
"Breadfruit",
"Cane Fruit",
"Carambola",
"Cherries Capulin",
"Cherums",
"Dragon Fruit",
"Dragon Fruit",
"Dragon Fruit Pitaya",
"Egg Fruit",
"Flowers Micro Flower Blend",
"Flowers Micro Orchid",
"Flowers Passionfruit",
"Foraged Cactus Barrel",
"Foraged Cactus Fruit Peruvian Apple",
"Foraged Cactus Golden Torch",
"Foraged Cactus Prickly Pear Red",
"Fresh Micro Hearts on Fire™",
"Fresh Micro Mix Lett. Grmt",
"Fresh Micro Mix Mint",
"Fresh Micro Mix Sweet Spice™",
"Fresh Micro Parsley Italian",
"Fresh Micro Verdolaga",
"Fresh MiniCrown™ Tom Thumb",
"Fresh Petite Lemon Grass",
"Fresh Petite Lett Freckles",
"Fresh Petite Mint Lavender",
"Fresh Petite Mix Mint",
"Fresh Petite Pea Green",
"Fresh Petite Sorrel",
"Fruit Che",
"Gac Fruit",
"Grapefruit",
"Grapefruit Cocktail",
"Grapefruit MeloGold",
"Grapefruit Melogold",
"Grapefruit Oro Blanco",
"Grapefruit Oro Blanco",
"Grapefruit Oro Blanco",
"Grapefruit Pomelo",
"Grapefruit Rex Union",
"Grapefruit Star Ruby",
"Grapefruit Star Ruby",
"Grapefruit Star Ruby",
"Grapefruit Star Ruby",
"Grapefruit White",
"Guavas Brazilian",
"Guavas Lemon",
"Guavas Pineapple",
"Herbs Lemon Verbena",
"Herbs Mint",
"Herbs Mint Pineapple",
"Herbs Peppermint",
"Herbs Sage Pineapple",
"Jack Fruit",
"Jelly Palm Fruit",
"Kiwi Baby Red",
"Kraton Fruit",
"Leaves Passion Fruit",
"Leaves Tea",
"Lemonade Fruit",
"Lemons Sweet",
"Lett Assorted Baby Heads",
"Lett Butter Red",
"Lett Mitsuba",
"Lett Mizuna",
"Lett Red Oak",
"Lett Romaine",
"Limes Rangpur",
"Melon Cavaillon",
"Melon French Kiss",
"Melon Sugar Queen",
"Melon Tendral",
"Melon Valencia",
"Melon Watermelon Orange",
"Monk Fruit",
"Nectarines Carmen Miranda",
"Nectarines Goldmine",
"Nectarines Stanwick",
"Nectarines White",
"Nectarines Yellow",
"Noni Fruit",
"Oranges Cara Cara",
"Oranges Navel",
"Oranges Valencia",
"Passionfruit",
"Passionfruit Banana",
"Passionfruit Banana",
"Passionfruit Yellow",
"Passionfruit Yellow",
"Peaches Bowen",
"Peaches First Lady",
"Peaches Ghiaccio",
"Peaches Indian Blood",
"Peaches Last Chance",
"Peaches Late Harvest",
"Peaches O'Henry",
"Peaches O'Henry",
"Peaches Rio Oso",
"Peaches Saturn",
"Peaches Snow White",
"Peaches White",
"Peaches Wild",
"Peaches Yellow",
"Peacotum",
"Persimmons Fuyu",
"Persimmons Sharon Fruit",
"Plums",
"Plums Armenian",
"Plums Black Splendor",
"Plums Damson Blue",
"Plums Elephant Heart",
"Plums Elephant Heart",
"Plums Golden",
"Plums Greengage",
"Plums Howard's Miracle",
"Plums Mini Pink",
"Plums Mirabelle de Metz",
"Plums Santa Rosa",
"Plums Satsuma",
"Plums Satsuma",
"Plums Wild",
"Plums Yummy Rosa",
"Pluots Dancing Demon",
"Pluots Flavor Fall",
"Pomelo",
"Pomelo African Shaddock",
"Pomelo Chandler",
"Pomelo Mato Buntan",
"Pomelo Reinking",
"Pomelo Tahitian",
"Pomelo Thong Dee",
"Pomelo Valentine",
"Red Palm Fruit",
"Shea Fruit",
"Snake Fruit",
"Squash Baby Zucchini w/ Flower",
"Star Fruit",
"Star Fruit Taiwanese",
"Tangerines Pixie",
"Tangerines Primavera",
"Ugli Fruit"
);

$info = array("Description/Taste", 
"Seasons/Availability", 
"Current Facts", 
"Applications", 
"Geography/History"
);


for ($i = 0; $i < count($links); ++$i) {
	echo "--------------------------------------------------------------------------------\n";
	echo $names[$i] . "\n";
	$html = file_get_html($links[$i]);
	$img = $html -> find('#prodPic', 0);
	$img_link = $img -> src;
	echo 'Image link: ' . $img_link . "\n";
	echo "------------------------------------------------\n\n";
	
	//$prodInfo = $html -> find('#prodInfo', 0);
	$header_h2 = $html -> find('h2'); 
	$text = $html -> find('text');
	
	$flag = 0;
	$idx = 0;
	
	for ($j = 0; $j < count($text); ++$j) {
		for ($k = 0; $k < 5; ++$k) {
			if ( strcmp(trim($text[$j]), $info[$k]) == 0 ) {
				$flag = 1;
				$idx = $j;
				break;
			}
		}
		
		if ($flag == 1)
			break;
	}
	
	for ($j = 0; $j < 3 * count($header_h2); ++$j) 
		echo trim($text[$idx + $j]) . "\n";
		
/*	
	for ($j = 0; $j < 4 * count($header_h2); ++$j) {
		$line = trim( $prodInfo -> children($j) -> plaintext );	
		echo $line . "\n";
	}
*/	
	//echo "\n";
	
	$html -> clear();
	unset($html);
}


?>

