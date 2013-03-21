<?php

namespace Kendo\Dataviz\UI;

class ChartCategoryAxisItemCrosshairTooltipBorder extends \kendo\SerializableObject {
//>> Properties

    /**
    * The color of the border.
    * @param string $value
    * @return \Kendo\Dataviz\UI\ChartCategoryAxisItemCrosshairTooltipBorder
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The width of the border.
    * @param float $value
    * @return \Kendo\Dataviz\UI\ChartCategoryAxisItemCrosshairTooltipBorder
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>