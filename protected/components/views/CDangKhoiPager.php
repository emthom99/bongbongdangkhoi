<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CDangKhoiPager
 *
 * @author Hoang Minh Duc
 */
class CDangKhoiPager extends CLinkPager{
    //put your code here
    public function run()
    {
            $this->registerClientScript();
            $buttons=$this->createPageButtons();
            if(empty($buttons))
                    return;
            echo '<span class="header">'.$this->header.'</span>';
            
            echo "---";
            echo implode(" - ",$buttons);
            echo " --- ";
             //make prev & next button
            $currentPage=$this->getCurrentPage(false);
            
            if(($page=$currentPage-1)<0)
                $page=0;
            echo $this->createPageLink($this->prevPageLabel,$page,$this->previousPageCssClass,$currentPage<=0,false);
            
            echo " | ";
            
            $pageCount=$this->getPageCount();
            if(($page=$currentPage+1)>=$pageCount-1)
		$page=$pageCount-1;
            echo $this->createPageLink($this->nextPageLabel,$page,$this->nextPageCssClass,$currentPage>=$pageCount-1,false);
            
            echo $this->footer;
    }
    
    protected function createPageLink($label,$page,$class,$hidden,$selected)
    {
            if($hidden || $selected)
                    $class.=' '.($hidden ? $this->hiddenPageCssClass : $this->selectedPageCssClass);
            return CHtml::link($label,$this->createPageUrl($page),array('class'=>$class));
    }
    
    protected function createPageButtons()
    {
            if(($pageCount=$this->getPageCount())<=1)
                    return array();

            list($beginPage,$endPage)=$this->getPageRange();
            $currentPage=$this->getCurrentPage(false); // currentPage is calculated in getPageRange()
            $buttons=array();
            
            // internal pages
            for($i=$beginPage;$i<=$endPage;++$i)
                    $buttons[]=$this->createPageLink($i+1,$i,$this->internalPageCssClass,false,$i==$currentPage);
            
            return $buttons;
    }
}

?>
