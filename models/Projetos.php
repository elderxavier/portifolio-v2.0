<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Projetos
 *
 * @author elder
 */
class Projetos extends Model{
     
    public function getItemPortifolio($title = '', $group='', $img='', $description='', $link=null){
        $link = $link ? $link : "javascript:vaoid(0)";
        $html = "<li class=\"item-thumbs span3 {$group} \">                                     
                <a class=\"hover-wrap fancybox\" data-fancybox-group=\"eccomerce\" title=\"{$title}\" href=\"assets/img/work/full/{$img}.jpg\" data-href=\"{$link}\">
                    <span class=\"overlay-img\"></span>
                    <span class=\"overlay-img-thumb font-icon-plus\"></span>
                </a>                                        
                <img src=\"assets/img/work/thumbs/{$img}_thumbs.jpg\" alt=\"{$description}\">
            </li>
            ";
         return $html;        
        //return str_replace(array("\r\n", "\r", "\n"),"",$html);            
    }
}
