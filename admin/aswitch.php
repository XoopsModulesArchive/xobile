<?php
###############################################################################
##   Copyright (C) 2009  Dylian Melgert                                      ##
##                                                                           ##
##      This program is free software: you can redistribute it and/or modify ##
##      it under the terms of the GNU General Public License as published by ##
##      the Free Software Foundation, either version 3 of the License, or    ##
##      (at your option) any later version.                                  ##
##                                                                           ##
##      This program is distributed in the hope that it will be useful,      ##
##      but WITHOUT ANY WARRANTY; without even the implied warranty of       ##
##      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        ##
##      GNU General Public License for more details.                         ##
##                                                                           ##
##      You should have received a copy of the GNU General Public License    ##
##      along with this program.  If not, see <http://www.gnu.org/licenses/>.##
###############################################################################

$active = intval($_GET['active']);
if($active == 1){
    $active = 0;
}else{
    $active = 1;
}
$sql    = "UPDATE  `".$xoopsDB->prefix("xoBile_plugins")."` SET `isactive` =  '".$active."' WHERE `plugdir` = '".$plgdir."' LIMIT 1;";
if($xoopsDB->queryF($sql)){
    redirect_header(XOOPS_URL.'/modules/'.$xoopsModule->getVar('dirname').'/admin/admin.php', 3, _AM_xobile_SUCCES_CONFIG, false);
    exit();
}else{
    redirect_header(XOOPS_URL.'/modules/'.$xoopsModule->getVar('dirname').'/admin/admin.php', 3, _AM_xobile_ERROR_CONFIG, false);
    exit();
}
?>