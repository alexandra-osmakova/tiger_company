<?php

namespace Templates;

class Block
{
    public static function generate_third($page)
    {

        $result = "<div class='generated_block'>
                    <div style='width: 33.3333%;margin-left: 10px;'>
                        <a href='../../../$page->tag/$page->url'>" . $page->title . "</a>
                    </div>
                    
                    <div style='width: 33.3333%;'>$page->date</div>
                    
                    <div style='width: 33.3333%;'>
                        <a href='../thirdlevel/update.page.php?id=$page->id'>Редактировать</a>/<a href='../thirdlevel/delete.page.php?id=$page->id'>Удалить</a>
                    </div>
                   
                   </div>";

        return $result;
    }

    public static function generate_second($page) {
        $result = "<div class='generated_block' style='height: 50px;'>
                    <div style='width: 50%;margin-left: 10px;'>
                        <a href='../../../$page->tag/'>" . $page->offer . "</a>
                    </div>
                  
                    <div style='width: 50%;'>
                        <a href='../secondlevel/update.page.php?id=$page->id'>Редактировать</a>
                    </div>
                   
                   </div>";

        return $result;
    }

    public static function generate_tagged_block($offer, $img)
    {
        $result = "<div class='blog_content__images_item' style='background-image: url(" . $img . ")'>
                    <div class='blog_type__item_wrap'></div>
                    <div class='blog_type__content'>
                        <span class='blog_type__text'>$offer</span>
                    </div>
                    <div class='blog_type__content_hover'>
                        <span class='blog_type__text_hover'>$offer</span>
                        <button class='blog_type__btn btn' onclick='modal_on_second()'>Заказать</button>
                    </div>
                </div>";

        return $result;
    }

    public static function generate_slider_blocks($pages)
    {
        $result = "";
        $count = 0;

        foreach ($pages as $page) {
            if ($count === 0) {
                $result .= "<div><ul>";
            }
            $count++;

            $result .= "<li><a href=../" . $page["tag"] . "/" . $page{"url"} . ">" . $page["offer"] . "</a></li>";

            if ($count === 13) {
                $result .= "</ul></div>";
                $count = 0;
            }
        }

        return $result;
    }

//    public static function get_offer($tag)
//    {
//        switch ($tag) {
//            case "gruzoperevozki-po-rossii":
//                return "Грузоперевозки по России отдельным транспортом от 1.5 до 20
//                        тонн";
//            case "gruzoperevozki-furami":
//                return "Грузоперевозки фурами";
//            case "gruzoperevozki-refrizheratorom":
//                return "Грузоперевозки рефрижераторами (с заданным температурным
//                        режимом)";
//            case "poputnye-gruzoperevozki"   :
//                return "Попутные грузоперевозки";
//            case "dostavka-sbornyh-gruzov"  :
//                return "Доставка сборных грузов по России от 50 до 800 кг (догрузом)";
//            case "pereezd-mezhgorod"   :
//                return "Переезды межгород";
//            case "perevozka-lichnykh-vechey"  :
//                return "Перевозка личных вещей от 50 кг";
//            case "perevozka-konkretnyh-vidov-gruza" :
//                return "Перевозка конкретных видов груза";
//            case "gruzoperevozki-kamazom":
//                return "Грузоперевозки КамАЗом от 5 до 10 тонн";
//            default:
//                return null;
//        }
//    }

    public static function get_special_settings($tag, $img_url)
    {
        switch ($tag) {
            case "gruzoperevozki-po-rossii"    :
            case "gruzoperevozki-kamazom"  :
            case "poputnye-gruzoperevozki"       :
                return "<div id=\"video-bg\" style=\"background-image: url('$img_url');\">
                            <video loop muted autoplay>
                                <source src=\"../tiger.video/2.webm\" type=\"video/webm\">
                            </video>
                        </div>";
                break;
            case "gruzoperevozki-refrizheratorom"    :
                return "<div id=\"video-bg\" style=\"background-image: url('$img_url'); background-position: center 27%;\"></div>";
                break;
            case "gruzoperevozki-furami"    :
                return "<div id=\"video-bg\" style=\"background-image: url('$img_url'); background-position: center bottom;\"></div>";
                break;
            default         :
                return "<div id=\"video-bg\" style=\"background-image: url('$img_url')\"></div>";
                break;
        }
    }

    public static function generate_all_blocks($pages)
    {
        $result = "";

        foreach ($pages as $page) {
            $page->img_first = str_replace("../", "", $page->img_first);
            $page->text = strip_tags($page->text);
            $page->text = (strlen($page->text) >= 200) ? mb_substr($page->text, 0, 200) . "..." : $page->text;

            $result .= "<a href=\"$page->tag/$page->url\">
                            <div class=\"block\">
                                <h1>$page->title</h1>
                                <h6>$page->date</h6>
                                <div class=\"inner_img\" style=\"background: url('$page->img_first')\"></div>
                                <p>$page->text</p>
                            </div>
                        </a>";
        }

        return $result;
    }
}