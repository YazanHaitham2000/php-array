<?php
echo "Q1:-"."<br>";
$colors = ['red', 'green', 'white'];

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $colors[0] . " carpet, the " . $colors[1] . " lawn, the " . $colors[2] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo $paragraph ."<br>";
echo "////////////////////////////";
echo "Q2:-"."<br>";
$colors = array('white', 'green', 'red');

echo "<ul>";

echo "<li>{$colors[1]}</li>";
echo "<li>{$colors[2]}</li>";
echo "<li>{$colors[0]}</li>";

echo "</ul>";
echo "////////////////////////////";
echo "Q3:-"."<br>";
$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}

echo "////////////////////////////";
echo "Q4:-"."<br>";
$Scolor = array(4 => 'white', 6 => 'green', 11 => 'red');

$first_color = reset($Scolor);

echo $first_color."<br>";
echo "////////////////////////////";
echo "Q5:-"."<br>";
$array = array(1, 2, 3, 4, 5);

$location = 3;
$new_item = '$';

array_splice($array, $location, 0, $new_item);

echo implode("", $array)."<br>";
echo "////////////////////////////";
echo "Q6:-"."<br>";
$fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
);

ksort($fruits);

foreach ($fruits as $key => $value) {
    echo "$key $value<br>";
}
echo "////////////////////////////";
echo "Q7:-"."<br>";
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

// حساب متوسط درجة الحرارة
$average = array_sum($temperatures) / count($temperatures);
echo "Average Temperature is: " . round($average, 1) . "<br>";

// ترتيب درجات الحرارة
sort($temperatures);

// الحصول على أدنى سبع درجات حرارة
$lowest_temperatures = array_slice($temperatures, 0, 7);
echo "List of seven lowest temperatures: " . implode(", ", $lowest_temperatures) . "<br>";

// الحصول على أعلى سبع درجات حرارة
$highest_temperatures = array_slice($temperatures, -7);
echo "List of seven highest temperatures: " . implode(", ", $highest_temperatures) . "<br>";
echo "////////////////////////////";
echo "Q8:-"."<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// دمج المصفوفتين مع الحفاظ على المفاتيح
$result = $array2 + $array1;

// عرض المصفوفة المدموجة
print_r($result);
echo "////////////////////////////" ."<br>";
echo "Q9:-"."<br>";
$colors = array("red", "blue", "white", "yellow");

// حلقة foreach لتحويل كل عنصر إلى أحرف كبيرة
foreach ($colors as $key => $value) {
    $colors[$key] = strtoupper($value);
}

// عرض المصفوفة الناتجة
echo "Array<br>";
foreach ($colors as $color) {
    echo $color . "<br>";
}
echo "////////////////////////////";
echo "Q10:-"."<br>";
$colors = array("RED", "BLUE", "WHITE", "YELLOW");

// حلقة foreach لتحويل كل عنصر إلى أحرف صغيرة
foreach ($colors as $key => $value) {
    $colors[$key] = strtolower($value);
}

// عرض المصفوفة الناتجة
echo "Array<br>";
foreach ($colors as $color) {
    echo $color . "<br>";
}
echo "////////////////////////////";
echo "Q11:-"."<br>";
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . "<br>";
        if ($i != 248) {
            echo "," . "<br>";
        }
    }
}
echo "////////////////////////////";
echo "Q12:-"."<br>";
$words = array("abcd", "abc", "de", "hjjj", "g");

// الحصول على طول السلسلة الأقصر باستخدام min و strlen
$shortest_length = min(array_map('strlen', $words));

// الحصول على طول السلسلة الأطول باستخدام max و strlen
$longest_length = max(array_map('strlen', $words));

// عرض النتائج
echo "The shortest array length is " . $shortest_length . ".<br>";
echo "The longest array length is " . $longest_length . "." . ".<br>";
echo "////////////////////////////";
echo "Q13:-"."<br>";
// تعريف الحدود السفلية والعليا للنطاق
$min = 11;
$max = 20;

// إنشاء مصفوفة من الأرقام في النطاق المحدد
$numbers = range($min, $max);

// تخليط الأرقام للحصول على ترتيب عشوائي
shuffle($numbers);

// اختيار أول 10 أرقام من الناتج
$random_numbers = array_slice($numbers, 0, 10);

// عرض الأرقام المختارة
echo implode(" ", $random_numbers) ."<br>";
echo "////////////////////////////";
echo "Q14:-"."<br>";
$array1 = array(2, 8, 10, 12, 6);

// استخدام array_filter لإزالة الأرقام التي تساوي صفر
$non_zero_numbers = array_filter($array1, function($value) {
    return $value != 0;
});

// الحصول على أصغر عدد غير مساوٍ لصفر
$smallest_nonzero = min($non_zero_numbers);

// عرض النتيجة
echo "Sample Output: " . $smallest_nonzero ."<br>";
echo "////////////////////////////";
echo "Q15:-"."<br>";
// تعريف دالة الفرز السريع (Quick Sort)
function quick_sort($array) {
    if (count($array) < 2) {
        return $array;
    }
    
    $left = $right = array();
    reset($array);
    $pivot_key = key($array);
    $pivot = array_shift($array);
    
    foreach ($array as $k => $v) {
        if ($v > $pivot) {
            $left[$k] = $v;
        } else {
            $right[$k] = $v;
        }
    }
    
    return array_merge(quick_sort($left), array($pivot_key => $pivot), quick_sort($right));
}

// المصفوفة الأصلية
$input_array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

// فرز المصفوفة بترتيب تنازلي
$sorted_array = quick_sort($input_array);

// عرض النتيجة
echo "Expected Result: ";
echo "Array (";
foreach ($sorted_array as $key => $value) {
    echo "[$key] => $value";
    if ($key !== array_key_last($sorted_array)) {
        echo "/ ";
    }
}
echo ")"."<br>";
echo "////////////////////////////"."<br>";
echo "Q16:-"."<br>";
function floor_with_precision($number, $precision, $separator) {
    // حساب المضاعف بناءً على الدقة
    $multiplier = pow(10, $precision);
    // تقريب الرقم للأسفل مع الدقة المحددة
    $floored_number = floor($number * $multiplier) / $multiplier;
    // تنسيق الرقم مع الفاصل العشري المحدد
    return number_format($floored_number, $precision, $separator, '');
}

// البيانات التجريبية
echo floor_with_precision(1.155, 2, ".") . "\n"."<br>"; // 1.15
echo floor_with_precision(100.25781, 4, ".") . "\n"."<br>"; // 100.2578
echo floor_with_precision(-2.9636, 3, ".") . "\n"."<br>"; // -2.964
echo "////////////////////////////"."<br>";
echo "Q17:-"."<br>";
function merge_unique_lists($list1, $list2) {
    // تحويل القوائم المفصولة بفواصل إلى مصفوفات وإزالة الفراغات البيضاء
    $array1 = array_map('trim', explode(',', $list1));
    $array2 = array_map('trim', explode(',', $list2));

    // دمج المصفوفتين وإزالة القيم المكررة
    $unique_array = array_unique(array_merge($array1, $array2));
    
    // تحويل المصفوفة النهائية إلى سلسلة نصية مفصولة بفواصل
    return implode(', ', $unique_array);
}

// البيانات التجريبية
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";

echo merge_unique_lists($list1, $list2)."<br>"; // 4, 5, 6, 7, 8
echo "////////////////////////////";
echo "Q18:-"."<br>";
function remove_duplicates($input) {
    // تحويل السلسلة النصية إلى مصفوفة
    $array = explode(', ', $input);
    
    // إزالة العناصر المكررة
    $unique_array = array_unique($array);
    
    // تحويل المصفوفة النهائية إلى سلسلة نصية مفصولة بفواصل
    $output = implode(', ', $unique_array);
    
    return $output;
}

// البيانات التجريبية
$input = "4, 5, 6, 7, 4, 7, 8";

echo remove_duplicates($input)."<br>"; // 4, 5, 6, 7, 8
echo "////////////////////////////";
echo "Q19:-"."<br>";
function is_subset($array1, $array2) {
    // التأكد من أن كل عنصر في المصفوفة الفرعية موجود في المصفوفة الأصلية
    foreach ($array2 as $element) {
        if (!in_array($element, $array1)) {
            return false;
        }
    }
    return true;
}

// البيانات التجريبية
$array1 = array('a', '1', '2', '3', '4');
$array2 = array('a', '3');

// التحقق مما إذا كانت المصفوفة الفرعية هي جزء من المصفوفة الأصلية
if (is_subset($array1, $array2)) {
    echo "array2 is a subset of array1"."<br>";
} else {
    echo "array2 is not a subset of array1"."<br>";
}
echo "////////////////////////////";
?>
