<?php

namespace Templates;

class Block
{
    public static function generate($page)
    {

        $result = "<div class='generated_block'>
                    <div style='width: 33.3333%;margin-left: 10px;'>
                        <a href='../../tiger.templates/tiger_trucking__third_level_page.php?id=$page->id'>" . $page->title . "</a>
                    </div>
                    
                    <div style='width: 33.3333%;'>02.12.2018 15:12</div>
                    
                    <div style='width: 33.3333%;'>
                        <a href='../admin/update.page.php?id=$page->id'>Редактировать</a>/<a href='../admin/delete.page.php?id=$page->id'>Удалить</a>
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

            $result .= "<li><a href='../tiger.templates/tiger_trucking__third_level_page.php?id=" . $page["id"] . "'>" . $page["offer"] . "</a></li>";

            if ($count === 13) {
                $result .= "</ul></div>";
                $count = 0;
            }
        }

        return $result;
    }

    public static function get_offer($tag)
    {
        switch ($tag) {
            case "gruzoperevozki-po-rossii":
                return "Грузоперевозки по России отдельным транспортом от 1.5 до 20
                        тонн";
            case "gruzoperevozki-furami":
                return "Грузоперевозки фурами";
            case "gruzoperevozki-refrizheratorom":
                return "Грузоперевозки рефрижераторами (с заданным температурным
                        режимом)";
            case "poputnye-gruzoperevozki"   :
                return "Попутные грузоперевозки";
            case "dostavka-sbornyh-gruzov"  :
                return "Доставка сборных грузов по России от 50 до 800 кг (догрузом)";
            case "pereezd-mezhgorod"   :
                return "Переезды межгород";
            case "perevozka-lichnykh-vechey"  :
                return "Перевозка личных вещей от 50 кг";
            case "perevozka-konkretnyh-vidov-gruza" :
                return "Перевозка конкретных видов груза";
            case "gruzoperevozki-kamazom":
                return "Грузоперевозки КамАЗом от 5 до 10 тонн";
            default:
                return null;
        }
    }

    public static function get_special_settings($tag, $img_url) {
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
}