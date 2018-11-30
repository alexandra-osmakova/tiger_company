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
            case "g_rus":
                return "Грузоперевозки по России отдельным транспортом от 1.5 до 20
                        тонн";
            case "g_fur":
                return "Грузоперевозки фурами";
            case "g_ref":
                return "Грузоперевозки рефрижераторами (с заданным температурным
                        режимом)";
            case "pg"   :
                return "Попутные грузоперевозки";
            case "dsg"  :
                return "Доставка сборных грузов по России от 50 до 800 кг (догрузом)";
            case "pm"   :
                return "Переезды межгород";
            case "plv"  :
                return "Перевозка личных вещей от 50 кг";
            case "pkvg" :
                return "Перевозка конкретных видов груза";
            case "g_kamaz":
                return "Грузоперевозки КамАЗом от 5 до 10 тонн";
            default:
                return null;
        }
    }
}