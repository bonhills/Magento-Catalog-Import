<?php
/**
#    Copyright (C) 2013-2015 Global Era Commerce (http://www.globalera.com). All Rights Reserved
#    @author Serenus Infotech <magento@serenusinfotech.com>
#    @author Intelliant <magento@intelliant.net>
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as
#    published by the Free Software Foundation, either version 3 of the
#    License, or (at your option) any later version.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 **/

class Gec_Customimport_Model_Mysql4_Catalogentity extends Mage_Core_Model_Mysql4_Abstract {

    public function _construct() {

        // Note that the entity_id refers to the key field in your database table.
        $this->_init('customimport/catalogentity', 'entity_id');
    }

}


?>