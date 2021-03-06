<?php

/**
 * PHPExcel_Chart_Title
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category    PHPExcel
 * @package        PHPExcel_Chart
 * @copyright    Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license        http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version        ##VERSION##, ##DATE##
 */
class PHPExcel_Chart_Title
{

    /**
     * Title Caption
     *
     * @var string
     */
    private $caption = null;

    /**
     * Title Layout
     *
     * @var PHPExcel_Chart_Layout
     */
    private $layout = null;

    /**
     * Title Font
     *
     * @var PHPExcel_Style_Font
     */
    private $font = null;


    /**
     * Create a new PHPExcel_Chart_Title
     */
    public function __construct($caption = null, PHPExcel_Chart_Layout $layout = null, PHPExcel_Style_Font $font = null )
    {
        $this->caption = $caption;
        $this->layout = $layout;
        $this->font = $font;
    }

    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set caption
     *
     * @param string $caption
     * @return PHPExcel_Chart_Title
     */
    public function setCaption($caption = null)
    {
        $this->caption = $caption;
        
        return $this;
    }

    /**
     * Get Layout
     *
     * @return PHPExcel_Chart_Layout
     */
    public function getLayout()
    {
        return $this->layout;
    }



    /**
     * Get Font
     *
     * @return PHPExcel_Style_Font
     */
    public function getFont() {
        if( empty( $this->font ) ) {
            $this->font = new PHPExcel_Style_Font();
            $this->font->setSize( 9 );
        }
        return $this->font;
    }
}
