<?php
namespace app\manage\block;

class KeywordBlock extends Block
{

    /**
     * search
     *
     * @param array $data            
     * @return string
     */
    public static function search($data = [])
    {
        $data = array_merge(self::$default_search, $data);
        
        $html = '<div class="am-u-sm-' . $data['sm_num'] . ' am-u-md-' . $data['md_num'] . '">';
        $html .= '<div class="am-input-group am-input-group-sm">';
        $html .= '<input type="text" class="am-form-field nd-search-field" name="' . $data['name'] . '" placeholder="' . $data['holder'] . '" value="' . $data['value'] . '" style="' . $data['style'] . '" ' . $data['attr'] . ' />';
        $html .= '<span class="am-input-group-btn">';
        $html .= '<button class="am-btn am-btn-default nd-search" target-form="' . $data['target'] . '" type="button">' . $data['text'] . '</button>';
        $html .= '</span>';
        $html .= '</div>';
        $html .= '</div>';
        
        return $html;
    }
}