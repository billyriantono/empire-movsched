<?php
/*
  Plugin Name: Empire MoveSched
  Plugin URI: http://blackriderz.web.id
  Description: Display Playing Now Movie in Empire Movie Theater ( BIP )
  Version: 1.0
  Author: Billy Riantono
  Author URI: http://blackriderz.web.id/about
  License: GPL2
 
  Copyright 2010  Billy Riantono  (email : me@blackriderz.web.id)
 
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.
 
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
 
  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
  */
  header('Content-Type: text/html; charset=utf-8');
 
  // define the feeds URL
  function empire_start(){
  $xml = "http://blackriderz.web.id/empire-movsched-rss.php";
  $xmlDoc = new DOMDocument();
  $xmlDoc->load($xml);
 
  $output = "";
  // start to iterate through the item nodes
  $output .= "<marquee direction=\"up\" scrollamount=\"1\" scrolldelay=\"60\" onMouseOut=\"this.start()\" onMouseOver=\"this.stop()\">";
  foreach ($xmlDoc->getElementsByTagName("item") as $item) {
   // $output .= "<tr><td>";
 
    $title = $item->getElementsByTagName("title")->item(0)->nodeValue;
    $time1 = $item->getElementsByTagName("description")->item(0)->nodeValue;
    //$time2 = $item->getElementsByTagName("movietime2")->item(0)->nodeValue;
	//$time3 = $item->getElementsByTagName("movietime3")->item(0)->nodeValue;
	//$time4 = $item->getElementsByTagName("movietime4")->item(0)->nodeValue;
	//$time5 = $item->getElementsByTagName("movietime5")->item(0)->nodeValue;
	//$time6 = $item->getElementsByTagName("movietime6")->item(0)->nodeValue;
 
 
    $output .= "<strong>Movie : $title</strong><br />$time1<br/>";
    //$output .= $description;
 
   // $output .= "</tr>";
  }
 
  $output .= "</marquee>";
  
  echo $output;
  echo "This Plugin by <a href='http://blackriderz.web.id'>Billy Riantono</a>";
  }
?>