<?php

class RetailExpress_SkyStore_Block_Page_Html_Navigation extends Mage_Page_Block_Html_Topmenu
{
    public function _construct()
    {
        parent::_construct();

        if (!$this->getTemplate()) {
            $this->setTemplate('page/html/navigation.phtml');
        }
    }

    /**
     * Recursively generates top menu html from data that is specified in $menuTree
     *
     * @param Varien_Data_Tree_Node $menuTree
     * @param string $childrenWrapClass
     * @return string
     */
    protected function _getHtml(Varien_Data_Tree_Node $menuTree, $childrenWrapClass)
    {
		
	
        $html = '';

        $children = $menuTree->getChildren();
	 
        $parentLevel = $menuTree->getLevel();
        $childLevel = is_null($parentLevel) ? 0 : $parentLevel + 1;

        $counter = 1;
        $childrenCount = $children->count();

        $parentPositionClass = $menuTree->getPositionClass();
        $itemPositionClassPrefix = $parentPositionClass ? $parentPositionClass . '-' : 'nav-';
		$cur = 0;
		$rowNum = 1;
        foreach ($children as $child) {
			//echo $childLevel;
			//echo $childLevel."---<br>";
            $child->setLevel($childLevel);
            $child->setIsFirst($counter == 1);
            $child->setIsLast($counter == $childrenCount);
            $child->setPositionClass($itemPositionClassPrefix . $counter);

            $outermostClassCode = '';
            $outermostClass = $menuTree->getOutermostClass();

            if ($childLevel == 0 && $outermostClass) {
                $outermostClassCode = ' class="' . $outermostClass . '" ';
                $child->setClass($outermostClass);
            }
			$category = $this->getCategory($child);
			//$catLevels = $category->getLevels();
			//group_3tab_hex_color
			//print_r($category);
			//tab_hex_color
			
			 if ($childLevel == 0 && $outermostClass) {
				 $catLevels = $category->getLevels();
				 if($category->getDropDownWidth()!=''){
					 
					 $tabwidth = "style='width:".$category->getDropDownWidth().";margin:0 auto;'";
					 
				 } else {
				 
				 	$tabwidth = '';
				 
				 }
				 
				 if($category->getTabHexColor()!='') {
					 
					$bgtabcolor =  $category->getTabHexColor();
				 
				 } else {
					 
					$bgtabcolor = "#000";
				 }
				 
				 $html .= '<li ' . $this->_getRenderedMenuItemAttributes($child) . ' style="background-color:'.$bgtabcolor.'">';
			 
			 } else {
				 
				if($childLevel === 1){
						
					if ($child->hasChildren()) {
							if($category->getLiWidthSecondLevel()!=''){
								$widthForSecondLi = "width:".$category->getLiWidthSecondLevel();
							}else{
								$widthForSecondLi = "";
							}
						
							$html .= "<div class=\"has-child-level2\" style=".$widthForSecondLi.">";
						
					}
				}
				if($childLevel === 2){
					$parentCatId = Mage::getModel('catalog/category')->load($category->getId())->getParentId();
					$catNameOfParent = Mage::getModel('catalog/category')->load($parentCatId);
					$category1 = $catNameOfParent->getDropBreakPoint();
					if($category1 != ""){
						$breakpoint =  $category1;
					}else{
						$breakpoint = 10;
					}
					if($cur == 0)
					{
						$html .= '<ul class="row' . $rowNum . '" style="float:left;">';
					}
					if($cur == $breakpoint)
					{
						$html .= '</ul>';
						$html .= '<ul class="row' . $rowNum . '" style="float:left;">';
						$cur = 0;
						
					}
					
						$cur++;
						$rowNum++;
				
				}

				 $html .= '<li ' . $this->_getRenderedMenuItemAttributes($child) . '>';
				 
				  if($childLevel === 1){
						
						if ($child->hasChildren()) {
						
							if($category->getTopContentForCategory()!=''){
							
								$html .= "<div class=\"top-content-cat\">";
								$html_content = Mage::helper('cms')->getPageTemplateProcessor()->filter($category->getTopContentForCategory());
								$html .= $html_content;
								$html .= "</div>";
							
							}
							  
						}else{
							
						  $html .= "";
						
						}					
					}
					
			 }
			if ($childLevel == 0 && $outermostClass) {
				if($category->getColoumStructure()!='' && $category->getColoumStructure() <= 8){
					
					$columnCount = "column-count:".$category->getColoumStructure().";-webkit-column-count:".$category->getColoumStructure().";-moz-column-count: ".$category->getColoumStructure().";";
					
				}else{
					$columnCount = "";
				}
			}else{
				
				$columnCount = "";
				
			}
			
            if($category->getCustomUrl()!=''){
				
				$catUrl = $category->getCustomUrl();
				
			}else{
				
				$catUrl = $child->getUrl();
				
			}
			
			if ($childLevel == 0 && $outermostClass) {
			
				if($category->getCatTabLabel()!=''){
					
					$catImg = "<img class='outer-menu' src='/media/catalog/category/".$category->getCatTabLabel()."'>";
					$aTagCss = 'style="position:relative;"';
					
				}else{
					
					$catImg = '';
					$aTagCss = '';
				
				}
			
			}else{
				
				if($category->getCatTabLabel()!=''){
					
					$catImg = "<img class='inner-menu' src='/media/catalog/category/".$category->getCatTabLabel()."'>";
					$aTagCss = 'style="position:relative;"';

				}else{
					
					$catImg = '';
					$aTagCss = '';
				
				}
			
			}
			
			if($childLevel === 2 && $category->getThumbnail() != ''){
				
				$parentCatId = Mage::getModel('catalog/category')->load($category->getId())->getParentId();
				$catNameOfParent = Mage::getModel('catalog/category')->load($parentCatId)->getName();
				
				if($catNameOfParent == 'Shop By Brands' || $catNameOfParent == 'Shop Brands'){
					
					$catOrImage = "<img src='/media/catalog/category/".$category->getThumbnail()."'>";
					
				}else{
					
					$catOrImage = $this->escapeHtml($child->getName());
					
				}
				
			}else{
				
				$catOrImage = $this->escapeHtml($child->getName());
				
			}
					
					$html .= '<a '.$aTagCss.' href="' . $catUrl . '" ' . $outermostClassCode . '>'.$catImg.'<span>'
						. $catOrImage . '</span></a>';
						
		   if($childLevel > 0 && !$outermostClass) {
			 
			  $parentId = Mage::getModel('catalog/category')->load($category->getId())->getParentId();
			  $d = Mage::getModel('catalog/category')->load($parentId)->getLevels();
		   
		   } else {
			 
			  $d =  $catLevels; 
		   }
		
		   if($parentLevel == 0 && $d >= $childLevel+2) {	
	 			
				if ($child->hasChildren()) {
	
					// Start modifications
					
					// End modifications
	
					if (!empty($childrenWrapClass)) {
						$html .= '<div class="' . $childrenWrapClass . '">';
	
	
	
					// Start modifications
					} elseif ($childLevel === 0) {
						$html .= "<div {$tabwidth} class=\"navigation-dropdown navigation-dropdown-{$category->getNavigationDropdownType()}\">";
					}
					// End modifications
	
					if($childLevel === 0){
						
						if($category->getProportionsLeftBlock()!=''){
							$leftBlockWidth = (($category->getProportionsLeftBlock()/12)*100).'%';
						}else{
							$leftBlockWidth = '';
						}
						
						if($category->getProportionsSubcategoreis()!=''){
							$subCatBlockWidth = (($category->getProportionsSubcategoreis()/12)*100).'%';
						}else{
							$subCatBlockWidth = '';
						}
						
						if($category->getProportionsRightBlock()!=''){
							$rightBlockWidth = (($category->getProportionsRightBlock()/12)*100).'%';
						}else{
							$rightBlockWidth = '';
						}
						
						if($category->getTopContentForCategory()!=''){
						
							$html .= "<div class=\"top-content-cat\">";
							$html_content = Mage::helper('cms')->getPageTemplateProcessor()->filter($category->getTopContentForCategory());
							$html .= $html_content;
							$html .= "</div>";
						
						}

						if($category->getLeftContentForCategory()!=''){
						
							$html .= "<div style=\"width:".$leftBlockWidth."\" class=\"left-content-cat\">";
							$html_content = Mage::helper('cms')->getPageTemplateProcessor()->filter($category->getLeftContentForCategory());
							$html .= $html_content;
							$html .= "</div>";
						
						}
						
					}else{
						$subCatBlockWidth = "";
					}
					
					$html .= '<ul style="width:'.$subCatBlockWidth.';'.$columnCount.'" class="level' . $childLevel .'">';
					$html .= $this->_getHtml($child, $childrenWrapClass);
					$html .= '</ul>';
	
					if($childLevel === 0){
						
						if($category->getRightContentForCategory()!=''){
						
							$html .= "<div style=\"width:".$rightBlockWidth."\" class=\"right-content-cat\">";
							$html_content = Mage::helper('cms')->getPageTemplateProcessor()->filter($category->getRightContentForCategory());
							$html .= $html_content;
							$html .= "</div>";
						
						}

						if($category->getBottomContentForCategory()!=''){
						
							$html .= "<div class=\"bottom-content-cat\">";
							$html_content = Mage::helper('cms')->getPageTemplateProcessor()->filter($category->getBottomContentForCategory());
							$html .= $html_content;
							$html .= "</div>";
						
						}
					}
	
					// Start modifications
					if ($childLevel === 0) {
	
						// If we need to use a "mega" style dropdown
						if ($category->getNavigationDropdownType() === 'mega') {
							$html .= $this->getNavigationCmsBlockHtml($category);
						}
					}
					if (!empty($childrenWrapClass) || $childLevel === 0) {
					// End modifications
	
	
	
						$html .= '</div>';
					}
				}
				
			}
			/*****************/
			if($childLevel === 1){
					
					if ($child->hasChildren()) {
					
						if($category->getBottomContentForCategory()!=''){
						
							$html .= "<div class=\"bottom-content-cat\">";
							$html_content = Mage::helper('cms')->getPageTemplateProcessor()->filter($category->getBottomContentForCategory());
							$html .= $html_content;
							$html .= "</div>";
						
						}
						  
					}else{
					
					  $html .= "";
					
					}					
				}
				
            $html .= '</li>';
			
			if($childLevel === 1){
					
				if ($child->hasChildren()) {
					
					//if($category->getTopContentForCategory()!='' || $category->getBottomContentForCategory()!='' || $category->getTopContentForCategory()!='' && $category->getBottomContentForCategory()!=''){
					
						$html .= "</div>";
					//}
					
				}
			}


            $counter++;
			 
        }

        return $html;
    }

    protected function getCategory(Varien_Data_Tree_Node $child)
    {
        $categoryId = $this->extractCategoryId($child);

        return Mage::getModel('catalog/category')->load($categoryId);
    }

    protected function getNavigationCmsBlockHtml(Mage_Catalog_Model_Category $category)
    {
        if ($blockIdAndPosition = $this->getNavigationCmsBlockIdAndPosition($category)) {
            list($blockId, $position) = $blockIdAndPosition;

            if (($html = $this->helper('skystore')->getCmsBlockHtml($blockId)) === null) {
                return '';
            }

            // Open the navigation manufacturers markup
            return <<<HTML
<div class="navigation-cms-block navigation-cms-block-{$position}">
    {$html}
</div>
HTML;
        }

        return '';
    }

    protected function extractCategoryId(Varien_Data_Tree_Node $child)
    {
        return (int) preg_replace('/^.*?-(\d+)$/', '$1', $child->getId());
    }

    protected function getNavigationCmsBlockIdAndPosition(Mage_Catalog_Model_Category $category)
    {
        if (!$category->getId()) {
            return;
        }

        if (!$id = $category->getNavigationCmsBlock()) {
            return;
        }

        if (!$position = $category->getNavigationCmsBlockPosition()) {
            return;
        }

        return [(int) $id, $position];
    }
}
