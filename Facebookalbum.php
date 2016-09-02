<?php 

class Facebookalbum{
public $my_API_key;
public $album_ID;
public $title;
public $sub_title;
public $object;
    public function setAPI($key){
        //Set User API Key
        $this->my_API_key = $key;
    }
    public function setAlbumID($id){
        //Set Album ID 
        $this->album_ID = $id;
    }
    public function setTitle($tit){
        //Set Title
        $this->title = $tit;
    }
    public function setSubTitle($stit){
        $this->sub_title = $stit;
    }
    
    public function renderSource(){
        echo '<link rel="stylesheet" href="style.css" />
<script src="script.js"></script>
<link href="//fonts.googleapis.com/css?family=Roboto+Mono:400,400italic,500,500italic,700,700italic|Roboto:400,400italic,500,500italic,700,700italic|Material+Icons" rel="stylesheet" type="text/css">
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=248974082139437";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>';
    }
    public function renderHeader(){
        echo '<div id="header" style="background-color:#2196F3;">
	<div id="header-text">'.$this->title.'</div>
</div>

<div id="menu" style="background-color:#2196F3;">
	<div id="menu-text">'.$this->sub_title.'</div>
</div>

<div id="block" style="position:relative;top:0px; height:256px;"></div>';
    }
    
    public function renderGallery(){
        echo '<div class="gallery-container">';
        if(!isset($_GET['page'])){
			$page = "MTE5OTk2MTYwNjcwMTkyOAZDZD";
			$cursor = "before";
			$getjson = "";
			} 
		else{
			$page = $_GET['page'];
			$cursor = $_GET['cursor'];
			$getjson = '&pretty=1&limit=25&'.$cursor.'='.$page;
			}
		$json = file_get_contents('https://graph.facebook.com/v2.6/'.$this->album_ID.'/photos?access_token='.$this->my_API_key.$getjson);
		$obj = json_decode($json, true);
                $this->object = $obj;
		$data = $obj['data'];
		foreach($data as $row){
			$json2 = file_get_contents('https://graph.facebook.com/'.$row['id'].'?access_token=248974082139437|IYPKRiBv97jv4xFeGjW9T8CXFW8&fields=source');
			$obj2 = json_decode($json2, true);
			
			$img = getimagesize($obj2['source']);
			$width = $img[0];
			$height = $img[1];
			
			$obj3 = json_decode(file_get_contents('https://graph.facebook.com/'.$row['id'].'/likes?access_token=248974082139437%7CIYPKRiBv97jv4xFeGjW9T8CXFW8'),true);
			$likenum = count($obj3['data']);
			echo '<div id="'.$obj2['id'].'" data-fullwidth="'.$width.'" data-fullheight="'.$height.'" class="image-box" style="background:url('.$obj2['source'].'); background-size:cover; background-position:center;" onclick="showPreview(this)"><div style="position:absolute; bottom:0px; left:0px; width:35px; height:20px; display:flex; align-items:center; justify-content:center; color:#D32F2F;"><div style="position:absolute; left:0px; height:20px; width:35px; background-color:#FFF; opacity:.5;"></div><span style="z-index:3">'.$likenum.'</span><img src="source/likes.png" height="15px" width="15px" style="z-index:3"></div></div>';
			}
                        echo '</div>';
    }
    public function renderPagination(){
        echo '<div class="pagination-container">
	<div class="pagination">';
        if($this->object['paging']['previous']!= ""){
			echo '<img src="source/paging.JPG" style="position:relative; height:75px; width:75px; left:0; float:left; transform:rotate(180deg);" onclick="window.location.href=\'http://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'].'?page='.substr($obj['paging']['previous'],-26,26).'&cursor=before'.'\'"/>';}
		if($this->object['paging']['next']!= ""){
			echo '<img src="source/paging.JPG" style="position:relative; height:75px; width:75px; left:0; float:left" onclick="window.location.href=\'http://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'].'?page='.substr($obj['paging']['next'],-26,26).'&cursor=after'.'\'"/>';}
    
                  echo '</div></div>';   
                }

}
?>