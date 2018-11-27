<?php

namespace Templates;

class Block {
    public static function generate($page) {

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
}