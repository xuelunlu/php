<?php

function trim_arr($arr)
{

    foreach ($arr as $key => $value) {
        $arr[$key] = trim($value);
    }

    return $arr;

}

$data[] = trim_arr(explode(",", "圓形臉, 橢圓形臉, 方形臉, 長形臉, 心形臉, 倒三角形臉, 菱形臉"));
$data[] = trim_arr(explode(",", "齊耳短髮, 短波浪, 鮑伯頭, 狼尾短髮, 鎖骨髮, 韓系蛋捲髮, 中分直髮, 水波紋捲髮, 長直髮, 長捲髮, 雲朵燙, 層次長髮"));
$data[] = trim_arr(explode(",", "法式瀏海, 空氣瀏海, 八字瀏海, 眉上瀏海, 厚瀏海"));
$data[] = trim_arr(explode(",", "劍眉, 柳葉眉, 一字眉, 上揚眉, 平直眉, 圓弧眉, 高挑眉, 自然眉, 濃眉, 細眉, 八字眉, 小挑眉, 英氣眉, 韓式粗平眉, 拱形眉"));
$data[] = trim_arr(explode(",", "單眼皮, 內雙眼皮, 外雙眼皮, 圓眼, 杏眼, 鳳眼, 丹鳳眼, 下垂眼, 上揚眼, 平行雙眼皮, 開扇雙眼皮, 窄長眼, 淚眼型, 三角眼, 桃花眼"));
$data[] = trim_arr(explode(",", "小巧鼻, 圓潤鼻, 高挺鼻, 直鼻, 鷹鉤鼻, 蒜頭鼻, 寬鼻, 窄鼻, 翹鼻, 低鼻樑, 山根高鼻, 山根低鼻, 圓球鼻, 塌鼻, 鈍鼻"));
$data[] = trim_arr(explode(",", "薄唇, 豐唇, 魅惑唇, 寬唇, 細唇, 上唇薄下唇厚, 小巧唇, 標準唇, 立體唇, 上揚唇, 下垂唇, 魚唇"));

$output_arr[] = $data[0][1];
$output_arr[] = $data[1][9];
$output_arr[] = $data[2][0];
$output_arr[] = $data[3][1];
$output_arr[] = $data[4][1];
$output_arr[] = $data[5][2];
$output       = "";
$output .= implode(", ", $output_arr) . "以及" . $data[6][4];

echo "一位亞洲中年女性的大頭照，臉部特徵是" . $output . "。";

//台灣女性常見的臉型、髮型、瀏海、眉毛、眼睛種類、鼻子種類以及嘴巴種類有哪些？不用解釋內容與說明，單純把種類列出就好。
//台灣女性的年齡層有哪些分類？
